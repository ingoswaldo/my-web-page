<template>
  <div class="max-w-7xl mx-auto mt-8 md:mt-14 | px-2 sm:px-6 lg:px-8 py-2 md:py-14">
    <h3 class="text-4xl text-blue font-medium" data-aos="zoom-in-right"
        data-aos-duration="2000">Portfolio</h3>
    <div class="flex justify-center my-4">
      <div class="h-48 md:h-80 | bg-blue | mx-auto portfolio"
           v-for="(portfolio, index) in portfolios"
           :key="index"
           v-bind:class="{'absolute | left-0 | w-2/12 rounded-r-2xl': isFirst(index + 1) && !isOnMobile(), 'absolute | right-0 | w-2/12 | rounded-l-2xl': isLast(index + 1) && !isOnMobile(), 'w-5/12 | rounded-2xl': !isFirst(index + 1) && !isLast(index + 1) && isOnShowSetting(index + 1), hidden: !isOnShowSetting(index + 1), 'w-full | rounded-2xl': isOnMobile() && isOnShowSetting(index + 1)}">
      </div>
    </div>
  </div>
</template>

<script>
import Portfolios from "@/assets/settings/portfolio.json"

export default {
  name: "Portfolio",
  data: () => {
    return {
      portfolios: Portfolios,
      portfolioSetting: {
        visibleItems: {
          sm: 1,
          default: 4
        },
        showItems: []
      }
    }
  },
  methods: {
    isOnMobile() {
      return screen.width < 768
    },

    isFirst(index) {
      return this.portfolioSetting.showItems.findIndex(value => value === index) === 0
    },

    isLast(index) {
      return this.portfolioSetting.showItems.findIndex(value => value === index) === (this.getQuantityPortfolioVisible() - 1)
    },

    isOnShowSetting(key) {
      return this.portfolioSetting.showItems.findIndex(value => value === key) !== -1
    },

    hasImageUrl(imageUrl) {
      return imageUrl !== '' && imageUrl !== undefined
    },

    getQuantityPortfolioVisible() {
      if (this.isOnMobile()){
        return this.portfolioSetting.visibleItems.sm
      }

      return this.portfolioSetting.visibleItems.default;
    },

    addPortfolioToShowSetting(value) {
      this.portfolioSetting.showItems.push(value)
    },

    addVisiblePortfolios() {
      for (let i = 1; i <= this.getQuantityPortfolioVisible(); i++) {
        this.addPortfolioToShowSetting(i)
      }
    },
  },

  mounted() {
    this.addVisiblePortfolios()
  }
}
</script>
