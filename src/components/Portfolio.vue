<template>
  <div class="max-w-7xl mx-auto mt-8 md:mt-14 | px-2 sm:px-6 lg:px-8 py-2 md:py-14">
    <h3 class="text-4xl text-blue font-medium" data-aos="zoom-in-right"
        data-aos-duration="2000">Portfolio</h3>
    <div class="flex flex-row flex-wrap mt-4 mb-16 inset-x-2"
         data-aos="zoom-in-right"
         data-aos-duration="2000"
         data-aos-once="true">
      <button class="text-lg font-medium capitalize | rounded-full | px-4 py-0 | focus:outline-none"
              @click.prevent="setCategorySelect('all')"
              v-bind:class="isCategorySelected('all')? 'text-white | bg-blue' : 'text-gray-dark'">All
      </button>
      <button class="text-lg font-medium capitalize | rounded-full | px-4 py-0 | focus:outline-none"
              v-for="(category, index) in categories"
              :key="index"
              @click.prevent="setCategorySelect(category)"
              v-bind:class="isCategorySelected(category)? 'text-white | bg-blue' : 'text-gray-dark'">{{ category }}
      </button>
      <button class="mx-1 | text-2xl text-white font-medium | bg-blue | rounded-full | px-4 py-1 | focus:outline-none"
              data-aos="zoom-in-right"
              data-aos-duration="2000">
        &lt;
      </button>
      <button class="mx-1 | text-2xl text-white font-medium | bg-blue | rounded-full | px-4 py-1 | focus:outline-none"
              data-aos="zoom-in-right"
              data-aos-duration="2000">
        &gt;
      </button>
    </div>
    <div class="flex justify-center | my-4">
      <img class="h-48 md:h-80 | bg-blue | mx-auto | object-cover portfolio"
           data-aos="zoom-in-right"
           data-aos-duration="2000"
           v-for="(portfolio, index) in portfoliosFilterByCategory"
           :key="index"
           :src="loadImage(portfolio.imageUrl)"
           v-bind:class="{'absolute | left-0 | w-1/12 2xl:w-2/12 | rounded-r-2xl': canShowFirstPortfolio(index + 1), 'absolute | right-0 | w-1/12 2xl:w-2/12 | rounded-l-2xl': canShowLastPortfolio(index + 1), 'w-1/3 2xl:w-5/12 | rounded-2xl': canShowPortfolio(index + 1), hidden: !isOnShowSetting(index + 1), 'w-full | rounded-2xl | mx-2': (isOnMobile() || isOnTablet()) && isOnShowSetting(index + 1), 'space-x-1': isOnMobile() || isOnTablet()}" />
    </div>
  </div>
</template>

<script>
import Portfolios from "@/assets/settings/portfolio.json"

export default {
  name: "Portfolio",
  data: () => {
    return {
      portfolios: [],
      portfolioSetting: {
        visibleItems: {
          sm: 1,
          md: 2,
          default: 4
        },
        showItems: []
      },
      categories: [],
      categorySetting: {
        selected: 'all'
      }
    }
  },
  computed: {
    portfoliosFilterByCategory() {
      if (this.isCategorySelected('all')) {
        return this.portfolios
      }

      return this.portfolios.filter(value => this.isCategorySelected(value.type))
    }
  },
  methods: {
    isOnMobile() {
      return screen.width < 768
    },

    isOnTablet() {
      return screen.width > 768 && screen.width < 1280
    },

    isFirst(index) {
      return this.portfolioSetting.showItems.findIndex(value => value === index) === 0
    },

    isLast(index) {
      return this.portfolioSetting.showItems.findIndex(value => value === index) === (this.getQuantityPortfolioVisible() - 1)
    },

    getQuantityPortfolioFilteredByCategory() {
      return this.portfoliosFilterByCategory.length
    },

    canShowFirstPortfolio(index) {
      return this.getQuantityPortfolioFilteredByCategory() >= this.getQuantityPortfolioVisible() && this.isFirst(index) && !this.isOnMobile()
    },

    canShowLastPortfolio(index) {
      return this.getQuantityPortfolioFilteredByCategory() >= this.getQuantityPortfolioVisible() && this.isLast(index) && !this.isOnMobile()
    },

    canShowPortfolio(index) {
      return !this.canShowFirstPortfolio(index) && !this.canShowLastPortfolio(index) && this.isOnShowSetting(index)
    },

    isOnShowSetting(key) {
      return this.portfolioSetting.showItems.findIndex(value => value === key) !== -1
    },

    hasImageUrl(imageUrl) {
      return imageUrl !== '' && imageUrl !== undefined
    },

    getQuantityPortfolioVisible() {
      if (this.isOnMobile()) {
        return this.portfolioSetting.visibleItems.sm
      }

      if (this.isOnTablet()) {
        return this.portfolioSetting.visibleItems.md
      }

      return this.portfolioSetting.visibleItems.default;
    },

    addPortfolioToShowSetting(value) {
      this.portfolioSetting.showItems.push(value)
    },

    addPortfolioToBeginningShowSetting(value) {
      this.portfolioSetting.showItems.unshift(value)
    },

    addVisiblePortfolios() {
      for (let i = 1; i <= this.getQuantityPortfolioVisible(); i++) {
        this.addPortfolioToShowSetting(i)
      }
    },

    removeFirstPortfolioItem() {
      this.portfolioSetting.showItems.shift()
    },

    removeLastPortfolioItem() {
      this.portfolioSetting.showItems.shift()
    },

    setRightPortfoliosToShowSetting(number) {
      if (this.isOnShowSetting(number)) {
        return
      }

      if (this.getQuantityPortfolioVisible() > 1) {

        if (number > this.getQuantityPortfolioVisible()) {
          this.removeFirstPortfolioItem()
          this.addPortfolioToShowSetting(number)
        }

        if (number <= this.getQuantityPortfolioVisible()) {
          this.removeLastPortfolioItem()
          this.addPortfolioToBeginningShowSetting(number)
        }
      }

      this.addPortfolioToShowSetting(number)
    },

    addCategory(category) {
      this.categories.push(category)
    },

    findCategory(name) {
      return this.categories.find(value => value === name)
    },

    addCategoriesFromPortfolios() {
      Portfolios.forEach(item => {
        if (this.findCategory(item.type) === undefined) {
          this.addCategory(item.type)
        }
      })
    },

    isCategorySelected(name) {
      return name === this.categorySetting.selected
    },

    setCategorySelect(name) {
      this.categorySetting.selected = name
    },

    loadImage(name) {
      return require(`@/assets/images/${name}`)
    }
  },

  mounted() {
    this.portfolios = Portfolios

    this.addCategoriesFromPortfolios()
    this.addVisiblePortfolios()
  }
}
</script>
