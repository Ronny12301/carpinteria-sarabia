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
        "principal": ['Ubuntu', '"Inter"', 'sans-serif'],
        "titulos": ['Cormorant Garamond', '"Inter"', 'sans-serif']
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
          '0%, 100%': { transform: 'translateY(-8%)', animationTimingFunction: 'cubic-bezier(0.5,0,0.7,0.7)' },
          '50%': { transform: 'none', animationTimingFunction: 'cubic-bezier(0,0,0.2,0.7)' }
        }
      },

      screens: {
        'sm': '820px',
        'md': '1050px',
        'lg': '2000px',
        'xl': '2300px',
        // => @media (min-width: 1440px) { ... }
      },
    },
  },
  plugins: [],
}

