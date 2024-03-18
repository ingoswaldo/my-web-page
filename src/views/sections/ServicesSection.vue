<script setup>

import CardWithBlueBackground from "@/components/cards/CardWithBlueBackground.vue";
import {onBeforeMount, ref} from "vue";
import {fetchSetting} from "@/helpers/fetch.js";
import CardWithItemsCentered from "@/components/cards/CardWithItemsCentered.vue";
import ComputerCodeIcon from "@/components/icons/ComputerCodeIcon.vue";
import MobileIcon from "@/components/icons/MobileIcon.vue";
import CleanCodeIcon from "@/components/icons/CleanCodeIcon.vue";
import UserInterfaceIcon from "@/components/icons/UserInterfaceIcon.vue";

const service =  ref({})

onBeforeMount(() => {
  fetchSetting('services.json')
      .then(response => service.value = response)
})
</script>

<template>
  <card-with-blue-background title="Services">
    <div class="grid grid-cols-1 md:grid-cols-2">
      <card-with-items-centered :title="service.development?.title" :description="service.development?.description">
        <template #icon>
          <computer-code-icon class="hidden md:block | text-white | w-16 md:w-24" />
        </template>
      </card-with-items-centered>

      <card-with-items-centered :title="service.optimization?.title" :description="service.optimization?.description">
        <template #icon>
          <mobile-icon class="hidden md:block | text-white | w-16 md:w-24" />
        </template>
      </card-with-items-centered>

      <card-with-items-centered :title="service.design?.title" :description="service.design?.description">
        <template #icon>
          <clean-code-icon class="hidden md:block | text-white | w-16 md:w-24" />
        </template>
      </card-with-items-centered>

      <card-with-items-centered :title="service.consulting?.title" :description="service.consulting?.description">
        <template #icon>
          <user-interface-icon class="hidden md:block | text-white | w-16 md:w-24" />
        </template>
      </card-with-items-centered>
    </div>
  </card-with-blue-background>
</template>
