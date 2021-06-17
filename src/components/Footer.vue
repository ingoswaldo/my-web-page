<template>
  <div class="bg-gray-light mt-4 md:mt-40">
    <img src="@/assets/images/author.jpg" class="invisible md:visible absolute | h-1/4 lg:h-1/3 xl:h-2/5 | right-4 md:right-8 | -mt-2 md:-mt-12 | object-cover | rounded-2xl xl:rounded-3xl"/>
    <div class="max-w-7xl mt-0 md:mt-16 | px-8 py-2 md:py-14">
      <div class="block 2xl:flex 2xl:justify-around items-center | h-60 lg:h-72 xl:h-80">
        <logo class="w-80 | text-blue | my-2"/>
        <div class="block 2xl:flex 2xl:flex-col">
          <div class="flex | my-2">
            <location class="text-blue | w-14 h-14"/>
            <h3 class="footer-text text-blue font-medium text-xl | mx-2">
              <text-animated :text="city" animation="rain" parent-class="footer-text" />
            </h3>
          </div>
          <div class="flex | my-2 mx-auto">
            <email class="text-blue | w-14 h-14"/>
            <h3 class="footer-text text-blue font-medium text-xl | mx-2">
              <text-animated :text="email" animation="rain" parent-class="footer-text" />
            </h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Logo from "@/components/icons/Logo";
import Location from "@/components/icons/Location";
import Email from "@/components/icons/Email";
import TextAnimated from "@/components/elements/TextAnimated";

export default {
  name: "Footer",
  components: {
    TextAnimated,
    Email,
    Location,
    Logo
  },
  data: () => {
    return {
      city: 'Sincelejo, Colombia',
      email: 'info@oswaldomontes.com'
    }
  },
}
</script>
