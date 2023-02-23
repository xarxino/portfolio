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
				dark: {
					primary: "#CCD8D4", // Primary color
					secondary: "#121212", // Background color
				},
      },
      backgroundImage: {
				"noise-dark": "url('/assets/src/img/bg-noise-dark.png')",
    },
			darkMode: "class",
  },
  plugins: [],
}
 