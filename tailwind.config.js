/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        colors: {
            primary: '#1B1917',
            light: '#FAFAF9',
            lightGray: '#f5f5f5',
            textColor: '#474540',
            transparent: 'transparent',
        },
        extend: {
            backdropBlur: {
                xs: '3px',
            }
        },
    },
    plugins: [],
}
