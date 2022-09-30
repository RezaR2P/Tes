/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ["./assets/**/*.{html,js}", "./node_modules/flowbite/**/*.js"],
	theme: {
		extend: {
			spacing: {
				102: "28rem",
				106: "32rem",
			},
		},
	},
	plugins: [require("flowbite/plugin")],
};
