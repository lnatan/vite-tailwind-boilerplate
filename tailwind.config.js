module.exports = {
  content: [
    // https://tailwindcss.com/docs/content-configuration
    './*.php',
    './inc/**/*.php',
    './templates/**/*.php',
    './kitchen-sink/**/*.php',
    './safelist.txt'
    //'./**/*.php', // recursive search for *.php (be aware on every file change it will go even through /node_modules which can be slow, read doc)
  ],
  theme: {
    screens: {
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px'
    },
    container: {
      center: true,
      padding: {
        DEFAULT: '1.25rem'
      },
    },
    fontFamily: {
      sans: ['Gilroy', 'system-ui', 'sans-serif']
    },
    extend: {
      fontFamily: {
        wide: 'Heading-Pro-Wide'
      }
    }
  },
  plugins: []
}