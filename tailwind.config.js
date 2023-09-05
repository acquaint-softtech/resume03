module.exports = {
  darkMode: 'class',
  content: [
    './resources/**/*.antlers.html',
    './resources/**/*.antlers.php',
    './resources/**/*.blade.php',
    './resources/**/*.vue',
    './content/**/*.md'
  ],
  theme: {
    extend: {
      backgroundImage: {
				'homeBg': "url('../../public/assets/hero-bg-img.png')",
        'homeBgDark': "url('../../public/assets/hero-bg-img-dark.png')",
        'aboutMe': "url('../../public/assets/about-me-bg.png')",
        'footerDark': "url('../../public/assets/footer-bg-dark.png')",
        'footerLight': "url('../../public/assets/footer-bg.png')",
        'contactLight': "url('../../public/assets/contact-bg.png')",
        'contactDark': "url('../../public/assets/contact-bg-dark.png')",
        
        
				
			},
      height: {
        '63': '250px',
        '51': '200px',
        '17': '70px',
      },
      width: {
        '63': '250px',
        '51': '200px',
        '150': '150px',
        '17': '70px',

      },
      colors: {
        'accent1' : '#ee5f38',
        'heading' : '#000248',
        'primary': 'rgb(51 51 51)',
        'paragraph': 'rgb(99 99 99)'
        
      },
      borderRadius: {
        '30': '30px',
      },
      maxWidth: {
        '6/7': '85%',
        '63': '250px',
        '150': '150px',
      },
      margin: {
        '3.9': '15px',
        '6.5': '25px',
        '7.5': '30px',
        '8.5': '35px',
        '1.5': '5px',
        '4.5': '18px',
        '12.5': '50px',
        '13': '55px',
      },
      padding: {
        '17': '70px',
        '12.5': '50px',
        '7.5': '30px',
        '0.9': '3px',
        
        '3.9': '15px',
        '1.4': '5px',
      },
      zIndex: {
        '8': '8',
        '99': '99',
        '98': '98',

      },
      fontSize: {
        '17': '17px',
        '40': '40px',
      },
      screens: {
        'only-md': {'min': '768px', 'max': '1023px'},
      },
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}
