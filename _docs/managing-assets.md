# Managing and Compiling Assets

## Intro
Managing and compiling assets is a very common task in web development. Unfortunately, it's rarely fun. 

With hyde, **you don't have to do it**, in fact, you can skip this entire page if you are happy with how it is.
But as always with Hyde, you can customize everything if you want to.

Hyde ships with a complete frontend where base styles and scripts are included through [HydeFront](https://github.com/hydephp/hydefront) which adds accessibility and mobile support as well as interactions for dark mode switching and navigation and sidebar interactions.

HydeFront is split into two files, `hyde.css` and `hyde.js`. These are loaded in the default Blade views using the [jsDelivr CDN](https://www.jsdelivr.com/package/npm/hydefront). This is the recommended way to load the base styles as the [Hyde Framework](https://github.com/hydephp/framework) automatically makes sure that the correct HydeFront version for the current version of Hyde is loaded. You can disable the CDN in the `config/hyde.php` file by setting `'loadHydeAssetsUsingCDN'` to `false`.

The bulk of the frontend is built with [TailwindCSS](https://tailwindcss.com/). To get you started, when installing Hyde, all the Tailwind styles you need come precompiled and minified into `_media/app.css`.

## Some extra information, and answers to possible questions

### Do I have to use NPM to use Hyde?
No. NPM is optional as all the compiled styles you need are already installed. You only need NPM if you want to compile your own styles.

### When do I need to compile assets?

#### When customizing
If you want to customize the Tailwind settings or add custom styles, you will need to take care of compiling the styles yourself.

#### When adding new classes
The `_media/app.css` file that comes with Hyde contains TailwindCSS for all classes that are used in the default Blade views, but nothing more.

If you customize the Blade views and add new classes, or if you add new classes in Blade-based pages, you may need to compile the assets yourself to get the new styles.

If you stick to using Markdown based pages, you don't need to compile anything.

## How are assets stored and managed?

Currently, the frontend assets are separated into three places.

The `resources/assets` contains **source** files, meaning files that will be compiled into something else. Here you will find the `app.css` file that bootstraps the TailwindCSS styles. This file is also an excellent place to add your custom styles.

The `_media` folder contains **compiled** (and usually minified) files. When Hyde compiles your static site, all asset files here will get copied as they are into the `_site/media` folder.

The `_site/media` folder contains the files that are served to the user.

### What is the difference between `_media` and `_site/media`?
It may seem weird to have two folders for storing the compiled assets, but it is quite useful.

The `_site` directory is intended to be excluded from version control while the `_media` folder is included in the version control, though you may choose to exclude the compiled files from the `_media` folder if you want to.

You are of course free to modify this behavior by editing the `webpack.mix.js` file.

## How do I compile assets?

First, make sure that you have installed all the NodeJS dependencies using `npm install`.
Then run `npm run dev` to compile the assets. If you want to compile the assets for production, run `npm run prod`.
You can also run `npm run watch` to watch for changes in the source files and recompile the assets automatically.

### How does it work?

Hyde uses [Laravel Mix](https://laravel-mix.com/) (which is a wrapper for [webpack](https://webpack.js.org/)) to compile the assets.

When running the `npm run dev/prod` command, the following happens:

1. Laravel Mix will compile the `resources/assets/app.css` file into `_media/app.css` using PostCSS with TailwindCSS and AutoPrefixer.
2. Mix then copies the `_media` folder into `_site/media`, this is so that they are automatically accessible to your site without having to rerun `php hyde build`.



## Managing images
As mentioned above, assets stored in the _media folder are automatically copied to the _site/media folder, making it the recommended place to store images. You can then easily reference them in your Markdown files.
