# README

First of all make sure you have npm and gulp installed. if you have installed these 2 before then you can skip this steps.

## Install npm

Go to Nodejs website and choose the stable version of node and install. Make sure nodejs is on your PATH ENV. (google this if you're unsure)

To check whether NodeJS is installed, go to terminal or cmd. type in 
```
npm -v
```

if you see a nodejs version etc. that means its already installed.

## Install gulp (globally)

Once installed, you can use npm to install gulp by typing 

```
npm install -g gulp
```

this will install gulp in your computer so that you can use the command **gulp** in your terminal/cmd.

## How To

Clone this repo or download them and put it somewhere in your computer. Once that is done. open terminal/cmd and navigate through this folder. Once there, here is the list of command you can do:

```
gulp less => compiles less files, rename them, and put it on the root folder. this is also generates sourcemaps

gulp js => compiles js files which includes the one from node packages and ours, rename them and put it on the root folder.

gulp => do the previous 2 tasks and use watch + browsersync for real time editing

gulp dist => build a production files
```
