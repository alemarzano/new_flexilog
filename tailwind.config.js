module.exports = {
  theme: {
     screens: {
        sm: '640px',
        md: '768px',
        lg: '1024px',
        xl: '1280px',
     },
     fontFamily: {
        display: ["'AlleynW01'", 'sans-serif'],
        body: ["'AlleynW01'", 'sans-serif'],
        html: ["'AlleynW01'", 'sans-serif'],
     },
     borderWidth: {
        default: '0',
        '1': '1px',
        '3': '3px',
        '4': '4px',
     },
     borderRadius: {
        default: '0',
        '3': '3px',
        'lg': '24px'
     },        
     extend: {
        colors: {
           indigo: {
              '100': '#e5f7ff',
              '200': '#b3e8ff',
              '300': '#80d8ff',
              '400': '#4dc8ff',
              '500': '#1ab9ff',
              '600': '#009fe6',
              '700': '#007cb3',
              '800': '#005880',
              '900': '#00354d',
           },
           pink: {
              '100': '#ffb3e01',
              '200': '#ff80cc',
              '300': '#ff4db7',
              '400': '#ff1aa3',
              '500': '#e60089',
              '600': '#b3006b',
              '700': '#80004c',
              '800': '#4d002e',
              '900': '#1a000f'
           },
           yellow: {
              '100': '#FFF1CC',
              '200': '#FFE299',
              '300': '#FFD466',
              '400': '#FFC633',
              '500': '#FFB800',
              '600': '#CC9300',
              '700': '#996E00',
              '800': '#664900',
              '900': '#332500',
           },
           orange: {
              '100': '#FFD7CC',
              '200': '#FFAF99',
              '300': '#FF8866',
              '400': '#FF6033',
              '500': '#FF3800',
              '600': '#CC2D00',
              '700': '#992200',
              '800': '#661600',
              '900': '#330B00',
           },
           gray: {
              '50' : '#F2F2F2',
              '100': '#DBDBDB',
              '200': '#B8B8B8',
              '300': '#949494',
              '400': '#707070',
              '500': '#4D4D4D',
              '600': '#3D3D3D',
              '700': '#2E2E2E',
              '800': '#1F1F1F',
              '900': '#0F0F0F',
           }
        },
        spacing: {
           '72':'18rem',
           '80':'20rem',        
           '88':'22rem',
           '96': '24rem',
           '128': '32rem',
        },
        maxWidth: {
           '12': '1180px'
        },
        inset: {
           '1/2':'50%',
        }
     },
     container: {
        center:true,
        padding:'20px',        
     },
     variants: {
        borderWidth: ['responsive', 'even', 'hover', 'focus', 'focus-within'],
        backgroundColor: ['responsive', 'hover', 'focus'],
        cursor: ['responsive', 'hover', 'focus'],
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
        textColor: ['responsive', 'hover', 'focus', 'visited']
     }
  }
}
