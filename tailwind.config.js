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
        leftRight: {
          '40%': {
            transform: 'translate(50px, 0) scale(.7)',
            opacity: 1
          },
          '80%': {
            transform: 'translate(0) scale(2)',
            opacity: 0
          },
          '100%': {
            transform: 'translate(0) scale(1)',
            opacity: 1
          },
        },
        twister: {
          '10%': { opacity: 1 },
          '100%': {
            transform: 'rotate(0deg) translate(0)',
            opacity: 1
          },
        },
        reveal: {
          from: {
            opacity: 0,
            transform: 'perspective(500px) translate3d(-35px, -40px, -150px) rotate3d(1, -1, 0, 35deg)'
          },
          to: {
            opacity: 1,
            transform: 'perspective(500px) translate3d(0, 0, 0)'
          }
        }
      },
      animation: {
        heart: 'heart 1s infinite',
        twister: 'twister .5s forwards',
        reveal: 'reveal 1s ease-out 1 both',
        'left-right': 'leftRight .5s forwards',
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

