'use strict';

//const ExtractTextPlugin = require("extract-text-webpack-plugin");

let DEV = true;

//const webpack = require('webpack');
const path = require('path');
//const AssetsPlugin = require('assets-webpack-plugin');
//const CleanWebpackPlugin = require('clean-webpack-plugin'); //installed via npm
//const MiniCssExtractPlugin = require("mini-css-extract-plugin");
//const UglifyJsPlugin = require("uglifyjs-webpack-plugin");
//const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");
const fs = require('fs');

const appDirectory = fs.realpathSync(process.cwd());

function resolveApp(relativePath) {
    return path.resolve(appDirectory, relativePath);
}

const paths = {
    appSrc: resolveApp('src'),
    appBuild: resolveApp('build'),
    appIndexJs: resolveApp('src/index.js'),
    appNodeModules: resolveApp('node_modules'),
  };  
  
  let pathsToClean = [
    'build'
  ]

  let cleanOptions = {
    root:     __dirname,
    verbose:  true,
    dry:      false
  }

module.exports = {
    
    entry:{
        app: './src/app.js',
    },
    output: {
      path: paths.appBuild,
      //filename: '[name].[chunkhash].js'
      filename: DEV ? 'bundle.js' : 'bundle.[hash:8].js',
    },
    /*
    externals: [
        {
          "jquery": {
            root: "jquery"
          }
        }
      ],
    */

    resolve: {
        unsafeCache: true,
        modules: [
            path.join(__dirname, "js/helpers"),
            "node_modules"
        ]
    },
    
    module: {
        rules: [
            /*
            {
                test: /\.js$/, 
                exclude: /node_modules/, 
                include: paths.appSrc,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['env']
                    }
                }
            },
            */
            
            {
                test: /\.(png|svg|jpg|gif)$/,
                use: [
                    {
                        loader: 'file-loader',
                        options: {
                            name: './images/[name].[hash].[ext]'
                        }
                    }
                ]
            },
            
            {
                test: /\.scss$/,
                use: [
                    DEV ? 'style-loader' : MiniCssExtractPlugin.loader,
                    'css-loader',
                    'sass-loader',
                ],
            },
        ]
      },
      /*
      optimization: {
        minimizer: [
          new UglifyJsPlugin({
            cache: true,
            parallel: true,
            sourceMap: true // set to true if you want JS source maps
          }),
          new OptimizeCSSAssetsPlugin({})
        ]
      },
      */
      plugins: [
        
        // new ExtractTextPlugin('style.css'),
        
        //new CleanWebpackPlugin(pathsToClean, cleanOptions),
        /*
        new MiniCssExtractPlugin({
            // Options similar to the same options in webpackOptions.output
            // both options are optional
            filename: "style.css",
            chunkFilename: "style.css"
        }),
        */
       /*
        new AssetsPlugin({
          path: paths.appBuild,
          filename: 'assets.json',
        }),
        */
      ]
  };