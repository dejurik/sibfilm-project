/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
			"./templates/**/*.tpl",
			"./node_modules/nestable2/dist/jquery.nestable.min.js",
			"./node_modules/jquery-modal/jquery.modal.min.js",
	],
  theme: {
    extend: {},
  },
  plugins: [],
}

