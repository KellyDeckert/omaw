const webpack = require('webpack');
const path = require('path');
const FileManagerPlugin = require('filemanager-webpack-plugin');
const CopyPlugin = require('copy-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

const themeDirectoryName = 'one-mind-at-work';

const config = {
  entry: './src/index.js',
  output: {
    // path: path.resolve(__dirname, 'dist'),
    path: path.resolve(
      __dirname,
      `dist/wp-content/themes/${themeDirectoryName}`
    ),
    filename: 'bundle.js'
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        use: 'babel-loader',
        exclude: /node_modules/
      },
      {
        test: /\.scss$/,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          {
            loader: 'sass-loader',
            options: {
              // Prefer Dart Sass
              implementation: require('sass'),
              webpackImporter: false,
              sassOptions: {
                includePaths: ['./node_modules'],
              },
            },
          }
          // 'sass-loader'
        ]
      },
      {
        test: /\.css$/,
        use: [
          MiniCssExtractPlugin.loader,
          {
            loader: 'css-loader',
            options: {
              importLoaders: 1,
              modules: true
            }
          }
        ]
      },
      // {
      //   test: /\.svg$/,
      //   use: 'file-loader'
      // },
      {
        test: /\.(png|svg|jpg|jpeg|gif)$/i,
        type: 'asset/resource',
      },
    ]
  },
  plugins: [
    new FileManagerPlugin({
      events:{
          onStart: {
          copy: [
              { 
              source: path.resolve(__dirname, 'src/theme/**/*'), 
              destination: path.resolve(__dirname,`dist/wp-content/themes/${themeDirectoryName}`) 
              }
          ]
          }
      }
    }),
    new CopyPlugin({
      // patterns: [{ from: 'src/index.html' }],
      patterns: [
        {
            from: 'src/theme/',
            toType: 'dir'
        }
      ]
    }),
    new webpack.ContextReplacementPlugin(/moment[\/\\]locale$/, /en/),
    new MiniCssExtractPlugin()
  ]
};

module.exports = config;