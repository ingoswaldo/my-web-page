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
        light: '#efefef',
        DEFAULT: '#bbbbbb',
        dark: '#898989'
      }
    },
    borderWidth: {
      DEFAULT: '1px',
      '2': '2px',
      '3': '3px',
    },
    extend: {
      height: {
        '4/5-screen': '80vh'
      },
      borderRadius: {
        '3xl': '5rem',
        '4xl': '10rem',
        '5xl': '15rem',
        '6xl': '20rem',
      },
    },
  },
  variants: {
    extend: {
      fontSize: ['hover'],
    },
  },
  plugins: [],
}
