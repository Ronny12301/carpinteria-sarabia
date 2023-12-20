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
        "principal": ['Ubuntu','"Inter"', 'sans-serif']
      },

      colors: {
        'cafe-sarabia': '#a63814',
      },

      backgroundImage: {
        'fondo-principal': "url('/public/img/fondo-principal.jpg')",
        'fondo-login': "url('/public/img/fondo-login.jpg')",
        'fondo-registrar-usuario': "url('/public/img/fondo-registro-usuario.jpg')",
        'fondo-registro-mueble': "url('/public/img/fondo-registro-mueble.jpg')"
      }
    },
  },
  plugins: [],
}

