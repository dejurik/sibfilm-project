// vite.config.js
import { defineConfig } from 'vite'

export default defineConfig({
  build: {
    rollupOptions: {
			input: {
				admin: '/admin/templates/default/js/main.js',
				main:'/templates/default/js/app.js',
				css:'/templates/default/css/input.css',
			},
			output: [
				{
						entryFileNames: "[name].bundle.js",
						dir: 'templates/dist',
				}
			]
		}
	}
})
