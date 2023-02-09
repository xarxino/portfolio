/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  darkMode: 'class',
  theme: {
    extend: {
      fontFamily: {
        'display': ["Lexend", "sans-serif"],
        'body': ["Mada", "sans-serif"],
      },
      colors: {
        'primary': '#27332F',
      },
      backgroundImage: {
        'noise': "url('/src/img/bg-noise.png')",
      }
    },
  },
  plugins: [],
}
 