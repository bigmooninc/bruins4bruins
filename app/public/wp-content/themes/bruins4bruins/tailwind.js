module.exports = {
  theme: {
    extend: {
      colors: {
        'bu-blue': '#00205b',
          'bu-red': '#c8012e',
          'bu-blue-secondary': '#0092ff'
      }
    },
    fontFamily: {
      'sans': ['Open-Sans', 'Helvetica']
    }
  },
  variants: {},
  plugins: [
      require('tailwindcss-transition')({
          standard: 'all 0.32s ease',
          transitions: {
            slow: 'all 0.5s ease'
          }
      })
  ]
}
