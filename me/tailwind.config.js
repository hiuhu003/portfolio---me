/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#646cff',
        secondary: '#646cffaa',
        reactBlue: '#61dafb',
      },
    },
  },
  plugins: [],
}