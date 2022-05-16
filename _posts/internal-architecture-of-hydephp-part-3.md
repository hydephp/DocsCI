---
title: "Internal Architecture of HydePHP - Part 3: Page Models"
description: In this third instalment we take a look at how Hyde internally parses Markdown files and compiles them into HTML.
category: deepdives
author: Caen
date: 2022-05-13 20:00
image:
  path: "/media/tech-5090539_1920.jpg"
  description: "Background image of futuristic circles"
  license: "Pixabay License"
  licenseUrl: https://pixabay.com/service/license/
  credit: https://pixabay.com/photos/tech-circle-technology-abstract-5090539/
  author: "Reto Scheiwiller"
---

## A Deep Dive into Page Models AKA "How Hyde knows what to do with your Markdown"

> Deep-Dives takes a closer look at the codebase and tries to explain what's going on.

Welcome to the third instalment in my series on the internal architecture of HydePHP. 

> If you haven't read part one already, you should do that first. Here is a quick link [Internal Architecture of HydePHP - Part 1: Introduction](https://hydephp.com/posts/internal-architecture-of-hydephp-part-1).


## How page models are used to generate static pages

The page models are integral to the static site-building process.

When compiling a Markdown file into static HTML this is roughly what happens, using a blog post as an example:

During the build loop, the source file in the `_posts` directory is discovered by the `CollectionService`.
Since it's in the `_posts` directory, Hyde knows it's a Markdown post, this will then affect many of the
proceeding classes used. The Markdown file will be passed to the `MarkdownPostParser` which will then
using the `MarkdownFileService` parse the Markdown blog post file into a `MarkdownPost` Model.

The MarkdownPost model now contains all the metadata, for example, the **Author** model, as well
as the actual Markdown content. The Model can now be passed to the StaticPageBuilder which
will render an HTML using the Model data to populate the `post` Blade template.

Since it's a blog post, the resulting HTML will be stored in the `_site/posts` directory.

As you can see, a lot is going on here. But having it this way means it's incredibly easy
and fast to create content where you don't even need to specify what layout to use.
