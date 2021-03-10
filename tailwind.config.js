module.exports = {
  purge: ['./index.html', './src/**/*.{vue,js,ts,jsx,tsx}'],
  darkMode: false, // or 'media' or 'class'
  theme: {
    colors: {
      blue: {
        DEFAULT: '#4c6cab',
      },
      white: {
        DEFAULT: '#ffffff'
      },
      gray: {
        DEFAULT: '#bbbbbb',
        dark: '#898989'
      }
    },
    extend: {
      height: {
        '3/4-screen': '75vh'
      },
      borderRadius: {
        '4xl': '10rem',
        '5xl': '15rem',
        '6xl': '20rem',
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
