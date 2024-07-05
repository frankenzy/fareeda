// tailwind.config.js

import forms from '@tailwindcss/forms';
import defaultTheme from 'tailwindcss/defaultTheme';

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'figtree-blue': '#006699',
                'figtree-green': '#009966',
                'figtree-red': '#CC0000',
                'figtree-yellow': '#FFCC00',
                'figtree-orange': '#FF9900',
                'figtree-purple': '#990099',
                'figtree-pink': '#CC0099',
                'figtree-gray': '#999999',
                'figtree-light-gray': '#CCCCCC',
                'figtree-dark-gray': '#666666',
                'figtree-black': '#000000',
                'figtree-white': '#FFFFFF',
                'one': '#F85E05',
            },
            backgroundImage: {
                'full-background': "url('/images/background.jpg')", // Assurez-vous que le chemin d'accès à votre image est correct
            },
            width: {
                '70': '70%',
                '40': '40%',
                '60': '60%',
                '7xxl':'90%',
                '8xl':'80%',
            },
            height: {
                '90vh': '90vh',
                '92vh': '92vh',
                '96vh': '96vh',
                '98vh': '98vh',
                '95vh': '95vh',
            },
        },
    },

    plugins: [
        forms,
        require('flowbite/plugin'), // Assurez-vous que le plugin 'flowbite' est correctement installé
    ],
};
