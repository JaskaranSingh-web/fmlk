/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './resources/views/**/*.blade.php',
        './resources/scripts/**/*.js',
      ],
    theme: {
        container: {
          center: true,
          padding: {
            DEFAULT: '1rem',
            sm: '1.5rem',
            lg: '2rem',
            xl: '2.5rem',
            '2xl': '3rem',
          },
          screens: {
            sm: '640px',
            md: '768px',
            lg: '1024px',
            xl: '1280px',
            '2xl': '1440px',
          },
        },
      extend: {
        colors: {
            primary: '#09090b',
            secondary: '#f3f4f6',
            accent: '#c10007',     
            neutral: '#a3a3a3',     
            dark: '#292524',        
            light: '#fafaf9',       
            success: '#16a34a',     
            danger: '#b91c1c',      
            warning: '#eab308',     
          },
        fontFamily: {
            sans: ['"Open Sans"', 'sans-serif'],
            heading: ['Montserrat', 'sans-serif'],
            accent: ['CandyRound', 'serif'], 
          },
        fontSize: {
            body: ['1rem', { lineHeight: '1.5rem' }],
            lead: ['1.333rem', { lineHeight: '1.75rem' }],
            h1: ['3.157rem', { lineHeight: '3.25rem' }],
            h2: ['2.369rem', { lineHeight: '2.5rem' }],
            h3: ['1.777rem', { lineHeight: '2rem' }],
            h4: ['1.333rem', { lineHeight: '1.75rem' }],
            h5: ['1rem', { lineHeight: '1.5rem' }],
            small: ['0.75rem', { lineHeight: '1rem' }],
          }
      },
    },
    plugins: [
      require('flowbite/plugin')
    ],
  };
  