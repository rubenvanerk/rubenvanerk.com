module.exports = {
  content: [
        './resources/**/*.antlers.html',
        './resources/**/*.blade.php',
        './content/**/*.md'
    ],
    theme: {
        fontFamily: {
            sans: ['Inter', 'sans'],
            display: ['Lalezar', 'cursive'],
            mono: ['Menlo', 'monospace']
        },
        transitionDuration: {
            DEFAULT: '250ms'
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
                'golden-tainoi': {
                    '50': '#fffaeb',
                    '100': '#fff1c6',
                    '200': '#ffe088',
                    '300': '#ffcc51',
                    '400': '#ffb420',
                    '500': '#f99107',
                    '600': '#dd6a02',
                    '700': '#b74906',
                    '800': '#94370c',
                    '900': '#7a2f0d',
                },
                'salmon': {
                    '50': '#fff3f1',
                    '100': '#ffe6e1',
                    '200': '#ffd0c7',
                    '300': '#ffafa0',
                    '400': '#ff8b76',
                    '500': '#f8583b',
                    '600': '#e53c1d',
                    '700': '#c12f14',
                    '800': '#a02914',
                    '900': '#842918',
                },
            }
        }
    },
    plugins: [],
    important: true
}
