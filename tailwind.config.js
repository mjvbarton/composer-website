module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue'
  ],
  theme: {
    extend: {            
      fontFamily:{
        'sans' : ['Open Sans', 'ui-sans-serif', 'sans-serif'],
        'display' : ['Nunito', 'ui-sans-serif', 'sans-serif']
      }
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms')
  ],
}
