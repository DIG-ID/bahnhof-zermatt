/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './header.php',
    './index.php',
    './footer.php',
    './404.php',
    './inc/*.php',
    './page-templates/**/*.php',
    './template-parts/**/*.php',
  ],
  theme: {
    fontFamily: {
      sans: ['Pressura', 'sans-serif'],
      serif: ['Lyon', 'serif'],
      italic: ['Lyon-italic', 'serif'],
    },
    extend: {
      colors: {
        'orange-red': '#ff5050',
        'pink': '#e42c5f',
      },
    },
  },
  plugins: [
    //require('@tailwindcss/line-clamp'),
  ],
}
