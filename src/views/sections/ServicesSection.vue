<script setup>

import CardWithBlueBackground from "@/components/cards/CardWithBlueBackground.vue";
import {onBeforeMount, ref} from "vue";
import {fetchSetting} from "@/helpers/fetch.js";
import CardWithItemsCentered from "@/components/cards/CardWithItemsCentered.vue";
import ComputerCodeIcon from "@/components/icons/ComputerCodeIcon.vue";
import MobileIcon from "@/components/icons/MobileIcon.vue";
import CleanCodeIcon from "@/components/icons/CleanCodeIcon.vue";
import UserInterfaceIcon from "@/components/icons/UserInterfaceIcon.vue";
import {useIntersectionObserver} from "@vueuse/core";
import {useGlobalState} from "@/store.js";

const service =  ref({})
const serviceDevelopment =  ref(null)
const state = useGlobalState()

onBeforeMount(() => {
  fetchSetting('services.json')
      .then(response => service.value = response)
})

useIntersectionObserver(serviceDevelopment, ([{ isIntersecting }]) => {
  if (!isIntersecting) return

  state.menuActive.value = '#services'
})
</script>

<template>
  <card-with-blue-background title="Services">
    <div class="grid grid-cols-1 md:grid-cols-2">
      <card-with-items-centered ref="serviceDevelopment" :title="service.development?.title" :description="service.development?.description">
        <template #icon>
          <computer-code-icon class="text-white | h-32 w-32" />
        </template>
      </card-with-items-centered>

      <card-with-items-centered :title="service.optimization?.title" :description="service.optimization?.description">
        <template #icon>
          <mobile-icon class="text-white | h-32 w-32" />
        </template>
      </card-with-items-centered>

      <card-with-items-centered :title="service.design?.title" :description="service.design?.description">
        <template #icon>
          <clean-code-icon class="text-white | h-32 w-32" />
        </template>
      </card-with-items-centered>

      <card-with-items-centered :title="service.consulting?.title" :description="service.consulting?.description">
        <template #icon>
          <user-interface-icon class="text-white | h-32 w-32" />
        </template>
      </card-with-items-centered>
    </div>
  </card-with-blue-background>
</template>
