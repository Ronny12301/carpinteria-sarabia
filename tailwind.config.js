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
        "principal": ['Cormorant Garamond', '"Inter"', 'sans-serif']
      },

      colors: {
        'cafe-sarabia': '#a63814',
        'cafe-sarabia-hover': '#872E10',
      },

      backgroundImage: {
        'fondo-principal': "url('/public/img/fondo-principal.jpg')",
        'fondo-login': "url('/public/img/fondo-login.jpg')",
        'fondo-registrar-usuario': "url('/public/img/fondo-registro-usuario.jpg')",
        'fondo-registro-mueble': "url('/public/img/fondo-registro-mueble.jpg')",
        'fondo-forget': "url('/public/img/fondo-forget.jpg')",
        'fondo-reset': "url('/public/img/fondo-reset.jpg')"
      },

      animation: {
        bounce: 'bounce 1s infinite'
      },
      keyframes: {
        bounce: {
          '0%, 100%': { transform: 'translateY(-25%)', animationTimingFunction: 'cubic-bezier(0.8,0,1,1)' },
          '50%': { transform: 'none', animationTimingFunction: 'cubic-bezier(0,0,0.2,1)' }
        }
      }
    },
  },
  plugins: [],
}

