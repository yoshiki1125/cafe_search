const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                cursive: ['cursive'],
            },
            screens: {
                  sm: '480px',
                  md: '768px',
                  lg: '976px',
                  xl: '1536px',
                 
            },
            backgroundSize: {
                  auto: 'auto',
                  cover: 'cover',
                  contain: 'contain',
                  '50%': '50%',
                  '16': '4rem',
            },
        
            color: {
                 red: {
                        50: '#fef2f2',
                        100: '#fee2e2',
                        200: '#fecaca',
                        300: '#fca5a5',
                        400: '#f87171',
                        500: '#ef4444',
                        600: '#dc2626',
                },
                rose: {
                        500: '#f43f5e',
                        600: '#e11d48',
                        700: '#be123c',
                },
            },
                
           
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
