# Hyde Documentation CI

This repo is part of the CI pipeline for the https://hydephp.github.io/ website and replaces the repo previosly found in https://github.com/hydephp/docs/.

## Contributing

You are very welcomne to contribute to the documentation source Markdown in the https://github.com/hydephp/docs/ repo. They will automatically be pushed to this repo.

## How does it work?
When a file is changed on the Docs repo it gets automatically pushed to the `_docs` directory here in the DocsCI repo. Once a file here is changed the CI will kick up and compile the site to static HTML. It then uploads the compiled files to the [website repo](https://github.com/hydephp/hydephp.github.io) where the site then gets automatically uploaded to GitHub Pages.

## Usage

While the main purpose of this repo is to generate the static HTML Documentation pages you can also clone it to quickstart development of your own documentation site!

## Credits

-   [Caen De Silva](https://github.com/caendesilva)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Attributions
> Please see the respective authors' repositories for their license files

- The Hyde core is built with [Laravel Zero](https://laravel-zero.com/) which is based on [Laravel](https://laravel.com/)
- The frontend is built with [TailwindCSS](https://tailwindcss.com/).
