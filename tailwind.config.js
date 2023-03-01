/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  darkMode: "class",
  theme: {
    extend: {
      fontFamily: {
        display: ["Lexend", "sans-serif"],
        body: ["Mada", "sans-serif"],
      },
      colors: {
        primary: "#27332F",
        dark: {
          primary: "#CCD8D4", // Primary color
          secondary: "#121212", // Background color
        },
      },
      backgroundImage: {
        noise: "url('/assets/src/img/bg-noise.png')",
        "noise-dark": "url('/assets/src/img/bg-noise-dark.png')",
      },
      animation: {
        "fade-out": "fadeOut 1s ease",
      },
      keyframes: {
        fadeOut: {
          "0%": { opacity: 1 },
          "100%": { opacity: 0 },
        },
      },
    },
  },
  plugins: [],
};
