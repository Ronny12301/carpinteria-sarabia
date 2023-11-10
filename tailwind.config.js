/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        "principal": ['"Inter"', 'sans-serif']
      },

      colors: {
        'cafe-sarabia': '#a63814',
      },

      backgroundImage: {
        'fondo-principal': "url('/public/img/fondo-principal.jpg')",
        'fondo-login': "url('/public/img/fondo-login.jpg')"
      }
    },
  },
  plugins: [],
}

