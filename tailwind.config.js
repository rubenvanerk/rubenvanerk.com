module.exports = {
  content: [
        './resources/**/*.antlers.html',
        './resources/**/*.blade.php',
        './content/**/*.md'
    ],
    theme: {
        fontFamily: {
            sans: ['Inter', 'sans'],
            mono: ['Menlo', 'monospace']
        },
        extend: {
            colors: {
                'turquoise': {
                    '50': '#ebfef8',
                    '100': '#cefdec',
                    '200': '#a1f9de',
                    '300': '#64f1ce',
                    '400': '#24e0b8',
                    '500': '#02c7a4',
                    '600': '#00a287',
                    '700': '#00826f',
                    '800': '#006659',
                    '900': '#00544b',
                },
            }
        }
    },
    plugins: [],
    important: true
}
