const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    presets: [
        require('./vendor/wireui/wireui/tailwind.config.js')
    ],
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './vendor/wireui/wireui/resources/**/*.blade.php',
        './vendor/wireui/wireui/ts/**/*.ts',
        './vendor/wireui/wireui/src/View/**/*.php'
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'primary': { //malibu
                    '50': '#f9fcfe',
                    '100': '#f3f9fe',
                    '200': '#e0f1fc',
                    '300': '#cee8fb',
                    '400': '#a9d7f7',
                    '500': '#84c6f4',
                    '600': '#77b2dc',
                    '700': '#6395b7',
                    '800': '#4f7792',
                    '900': '#416178'
                }
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
