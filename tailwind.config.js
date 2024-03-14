/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{vue,js,ts,jsx,tsx}",
  ],
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
      keyframes: {
        heart: {
          '0%, 100%': { transform: 'scale(1)' },
          '50%': { transform: 'scale(1.1)' },
        },
        zoomInDown: {
          from: {
            opacity: 0,
            transform: 'scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0)',
            'animation-timing-function': 'cubic-bezier(0.55, 0.055, 0.675, 0.19)'
          },
          '60%': {
            opacity: 1,
            transform: 'scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0)',
            'animation-timing-function': 'cubic-bezier(0.175, 0.885, 0.32, 1)'
          }
        },
        infiniteScroll: {
          from: { transform: "translateX(0)" },
          to: { transform: "translateX(-100%)" },
        }
      },
      animation: {
        heart: 'heart 1s infinite',
        'zoom-in-down': 'zoomInDown 1s infinite',
        'infinite-scroll': 'infiniteScroll 20s linear infinite'
      }
    },
  },
  variants: {
    extend: {
      opacity: ['disabled'],
    },
  },
  plugins: [],
}

