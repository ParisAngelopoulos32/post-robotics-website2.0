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
            padding: {
                DEFAULT: '16px',
                sm: '24px',
                md: '32px',
            },
            screens: {
                sm: '1180px',
                md: '1180px',
                lg: '1180px',
                xl: '1180px',
                '2xl': '1180px',
            },
        },
        extend: {
            fontFamily: {
                'primary': ['var(--font-primary)', 'sans-serif'],
                'header': ['var(--font-header)', 'sans-serif'],
            },
            colors: {
                white: '#fff',
                black: '#000',
                primary: {
                    100: '#F3F5F1',
                    200: '#E2E6DF',
                    600: "#7AC13E",
                    700: '#5C9A2E',
                    DEFAULT: "#7AC13E"
                },
                secondary: {
                    100: '#AEB6BE',
                    200: '#5B6470',
                    300: '#37414F',
                    400: '#2E3948',
                    500: '#232C37',
                    600: '#1B222B',
                    DEFAULT: '#1B222B',
                },
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
