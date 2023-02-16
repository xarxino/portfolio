const path = require("path");
const { EnvironmentPlugin } = require("webpack");
const isDev = process.env.NODE_ENV === "development";
const PurgeCSSPlugin = require("purgecss-webpack-plugin");
const glob = require('glob');

module.exports = {
	mode: isDev ? "development" : "production",
	entry: "./src/js/index.js",
	output: {
		path: path.resolve(__dirname, "dist"),
		filename: "bundle.js",
	},
	module: {
		rules: [
			{
				test: /\.css$/,
				use: [
					"style-loader",
					"css-loader",
					{
						loader: "postcss-loader",
						options: {
							postcssOptions: {
								plugins: [
									require("tailwindcss"),
									require("autoprefixer"),
								],
							},
						},
					},
				],
			},
			{
				test: /src\/img\/.*\.(png|jpe?g|gif|svg)$/i,
				use: [
					{
						loader: "file-loader",
						options: {
							outputPath: "img",
						},
					},
					{
						loader: "image-webpack-loader",
						options: {
							bypassOnDebug: true,
						},
					},
				],
			},
		],
	},
	plugins: [
		new PurgeCSSPlugin({
			paths: glob.sync(`${path.join(__dirname, "src")}/**/*`, {
				nodir: true,
			}),
		}),
		new EnvironmentPlugin({
			WP_THEME_URL: process.env.WP_THEME_URL || "http://localhost",
		}),
	],
};
