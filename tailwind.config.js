/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
  './application/views/pages/*.php',
  './application/controllers/*/.php',
  './application/models/*/.php'],
  theme: {
    container: {
      center: true,
      padding: '16px',
    },
    extend: {},
    mytheme: {
      primary: '#570df8',
      secondary: '#f000b8',
      accent: '#1dcdbc',
      neutral: '#2b3440',
      'base-100': '#ffffff',
      info: '#3abff8',
      success: '#36d399',
      warning: '#fbbd23',
      error: '#f87272',
    },
  },
  plugins: [
    require('daisyui'),
    require('flowbite/plugin')],
}
