/** @type {import('tailwindcss').Config} */

const colors = require('tailwindcss/colors')

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./vendor/wireui/wireui/src/*.php",
    "./vendor/wireui/wireui/ts/**/*.ts",
    "./vendor/wireui/wireui/src/WireUi/**/*.php",
    "./vendor/wireui/wireui/src/Components/**/*.php",
    './app/Livewire/**/*Table.php',
    './vendor/power-components/livewire-powergrid/resources/views/**/*.php',
    './vendor/power-components/livewire-powergrid/src/Themes/Tailwind.php'
  ],
  darkMode: 'class',
  theme: {
    extend: {
      colors: {
        "pg-primary": colors.gray,
      },
    },
  },
  plugins: [],
  presets: [
    require("./vendor/wireui/wireui/tailwind.config.js"),
    require('@tailwindcss/forms'),
    require("./vendor/power-components/livewire-powergrid/tailwind.config.js"),
  ],
}