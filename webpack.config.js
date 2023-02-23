const path = require("path");
const { EnvironmentPlugin } = require("webpack");
const isDev = process.env.NODE_ENV === "development";
const PurgeCSSPlugin = require("purgecss-webpack-plugin");
const glob = require("glob");

module.exports = {
  mode: isDev ? "development" : "production",
  devtool: isDev ? "eval" : "source-map",
  entry: "./assets/src/js/index.js",
  output: {
    path: path.resolve(__dirname, "assets/dist"),
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
                plugins: [require("tailwindcss"), require("autoprefixer")],
              },
            },
          },
        ],
      },
    ],
  },
  plugins: [
    new PurgeCSSPlugin({
      paths: glob.sync(`${path.join(__dirname, "assets/src")}/**/*`, {
        nodir: true,
      }),
    }),
    new EnvironmentPlugin({
      WP_THEME_URL: process.env.WP_THEME_URL || "http://localhost",
    }),
  ],
};
