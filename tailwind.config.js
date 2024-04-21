/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
			"./templates/admin/**/*.tpl",
			"./templates/app/default/**/*.tpl",
			"./node_modules/nestable2/dist/jquery.nestable.min.js",
			"./node_modules/jquery-modal/jquery.modal.min.js",
			"./templates/**/**/**/*.js",
	],
  theme: {
    extend: {},
  },
  plugins: [],
}

