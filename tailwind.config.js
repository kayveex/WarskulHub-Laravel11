/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    'node_modules/preline/dist/*.js',
  ],
  theme: {
    extend: {
      colors: {
        'primaryGreen': '#16A34A',
        'secondaryGreen': '#22C55E',
        'warsYellow': '#22C55E',
        'primaryDark': '#1D232A',
        'secondaryDark': '#242A31',
      }
    },
  },
  plugins: [
    require('preline/plugin'),
  ],
}