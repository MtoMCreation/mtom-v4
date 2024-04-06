/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        container: {
            center: true,
        },
        extend: {
            backdropBlur: {
                xs: '3px',
            }
        },
    },
    plugins: [],
}