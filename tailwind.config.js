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
        'beig': '#FFDBC3',
        'lila-clar':'#9F91CC',
        'lila':'#5C4B99',
        'lila-fosc':'#3D246C',
      },
    },
    
  },
  plugins: [],
  
  
}

