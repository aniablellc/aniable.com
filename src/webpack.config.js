const path = require('path');
const TerserPlugin = require('terser-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
  entry: {
    aniable: path.resolve(__dirname, 'app.js')
  },
  output: {
    path: path.resolve(__dirname, '../static'),
    filename: '[name].js'
  },
  optimization: {
    minimize: true,
    minimizer: [
      new TerserPlugin({
        terserOptions: {
          format: {
            comments: false
          }
        },
        extractComments: false
      })
    ]
  },
  resolve: {
    extensions: ['.js']
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: ['babel-loader']
      },
      {
        test: /\.s?[ca]ss$/,
        exclude: /node_modules/,
        use: [MiniCssExtractPlugin.loader, 'css-loader', 'sass-loader']
      },
      {
        test: /\.(png|jpe?g)$/,
        exclude: /node_modules/,
        use: [
          {
            loader: 'file-loader',
            options: {
              outputPath: 'static',
              publicPath: 'static'
            }
          }
        ]
      }
    ]
  },
  plugins: [new MiniCssExtractPlugin()]
};
