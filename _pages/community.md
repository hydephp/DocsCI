# Community Portal

> This page is work in progress, but is intended to give you a place to
> learn more about Hyde development and how to contribute.

## Quick Links

<div style="display: flex; flex-wrap: wrap; margin: 0 -40px; margin-top: -20px;">

<div style="margin: 0 40px;">

### Community Health Files

- [Contribution Guide](contributing)
- [Code of Conduct](code-of-conduct)
- [Security Policy](security)

</div>

<div style="margin: 0 40px;">

### Other Resources

- [Documentation](docs)
- [Legal Information](legal)
- [MIT License](license)
  
</div>


<div style="margin: 0 40px;">

### Important Repositories

- [The Hyde Project](https://github.com/hydephp/hyde)![External link](../_media/external.svg "External link"){.ext-link}
- [The Core Framework](https://github.com/hydephp/framework)![External link](../_media/external.svg "External link"){.ext-link}
- [The Development Monorepo](https://github.com/hydephp/develop)![External link](../_media/external.svg "External link"){.ext-link}

</div>

</div>

---

# Developer Resources
This section is written for those who are interested in contributing to the HydePHP Framework.

If you are looking to build an application using Hyde, you might be looking for the [official documentation](docs).

## How HydePHP is Structured


**HydePHP consists of a few core components, and development is done in a monorepo.**

This means that when contributing to the code, we submit the code to a single "mono" repository where the code is automatically split into separate read-only repositories for each component.

The two most important components are **Hyde** and **Framework**. We also use **HydeFront** for frontend assets.

**The Hyde package is what the end-user sees and interacts with.** When creating a new HydePHP site, this is done using the Hyde project. The package contains all the necessary files to run a HydePHP site and bootstraps the entire system.

**The Framework package holds most of the logic of the Hyde framework.** This is where all the data models, static site generators, HydeCLI commands, Blade views, and more, are stored. Having this in a package makes it much easier to version and update using Composer.

**The HydeFront package contains stylesheets and scripts** to help make HydePHP sites accessible and interactive. It also includes a pre-compiled TailwindCSS file containing all the styles needed for the built-in Blade templates.

<!-- Became very long, saving for a blog post. It's a separate package for a few reasons. Partly to separate presentation and logic, and also to allow hosting of the styles on a CDN. We take advantage of this as we control the HydeFront version in the Framework package, so we can be sure that Blade templates always use the correct version. This also means that we can issue bug-fixing patches to live sites without needing users to recompile their sites.

This great power also requires great responsibility. Even though HydePHP itself is in the beta stage and is in the 0.x semantic versioning range and has no compatibility guarantees, HydeFront is strictly versioned and is in the 1.x semantic versioning range.

This means that developers must never introduce breaking changes in minor or patch releases. Since the package is in the NPM registry, releases are only ever rolled out manually by the maintainer to ensure that no vulnerable or malicious code is introduced as automatic patch updates could be a security issue. -->

