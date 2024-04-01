/** @type {import('tailwindcss').Config} */
export default {
  content: [

    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {},
    colors: {
      'blueish':'#184e77',
      'greenish':'#3d9970',
    }
  },
  plugins: [
    require('flowbite/plugin')
  ],
}



