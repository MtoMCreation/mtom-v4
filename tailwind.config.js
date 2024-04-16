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
            textColor: '#474540',
        },
        extend: {
            backdropBlur: {
                xs: '3px',
            }
        },
    },
    plugins: [],
}
