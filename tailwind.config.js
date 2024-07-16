/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js",
  ],
  theme: {
      fontFamily: {
          kalameh: [
              'kalameh',
              'sans-serif',
          ],
          yekanBakh: [
              'YekanBakh',
              'sans-serif',
          ],
      },
    extend: {},
  },
  plugins: [
      require('flowbite/plugin')
  ],
}

