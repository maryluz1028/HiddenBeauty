module.exports = {
    mode: 'jit',
    future: {
        removeDeprecatedGapUtilities: true,
        purgeLayersByDefault: true,
    },
    purge: {
        content: [
            './*.php',
            './templates/**/*.php',
            './build/js/**/*.js',
        ],
        options: {
            safelist: [],
            blocklist: [],
            keyframes: true,
            fontFace: true,
        },
    },
    theme: {
        screens: {
            sm:'35rem',
            md:'43rem',
            lg:'59rem',
            xl:'75rem',
        },
        container: {
            center: true,
            padding: '1rem',
        },
        extend: {
            colors: {
                'pink':'#ec5598',
                'white':'#fff',
                'black01':'#222222',
                'black02':'#292929',
                'gray01':'#707070',
                'gray02':'#e1e1e1',
                'gray03':'#fbfbfb',
                'gray04' :'#F1F1F1',
                'color-rgba':'rgba(0,0,0,.70)',
                'color-rgba-white':'rgba(255,255,255,.20)',
                'cornflowerBlue':'#5575e3',
        },
            fontSize: {
                xxs: '0.675rem',
            },
            lineHeight: {
                tighter: '1.125',
            },
            backgroundImage: {
                'bg-page-title-image': "url('https://www.lovebeautyandplanet.com/content/dam/unilever/love_beauty_and_planet/united_states_of_america/photography_and_pictures/1395471_-_lbp_-_ingredients_-_cherry_blossom_6000x1560-36305288-jpg.jpg')",
            },
        }
    },
    variants: {
        textColor: ['responsive', 'hover', 'focus', 'visited'],
    },
    plugins: [
        ({addUtilities}) => {
            const utils = {
                '.translate-x-half': {
                    transform: 'translateX(50%)',
                },
            };
            addUtilities(utils, ['responsive'])
        }
    ]
};
