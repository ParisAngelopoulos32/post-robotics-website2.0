module.exports = {
    content: [
        // https://tailwindcss.com/docs/content-configuration
        './*.php',
        './Components/**/*.{php,scss,twig}',
        './inc/**/*.{php,scss,twig}',
        './ts/**/*.{ts,scss}',
        './scss/**/*.scss',
        './safelist.txt',
    ],
    theme: {
        container: {
            center: true,
            padding: '1rem',
        },
        extend: {
            fontFamily: {
                'primary': ['var(--font-primary)', 'sans-serif'],
                'header': ['var(--font-header)', 'sans-serif'],
            },
            colors: {
                primary: {
                    DEFAULT: "#fff"
                },
                secondary: {
                    DEFAULT: "#fff"
                }
            },
        },
        screens: {
            'sm': '576px',
            'md': '768px',
            'lg': '992px',
            'xl': '1200px',
            '2xl': '1400px',
        }
    },
    plugins: []
}
