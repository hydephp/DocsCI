@extends('hyde::layouts.app')
@section('content')
<style>
	mark {
		background: linear-gradient(-100deg, #fece2f2f, #fddf47a4 95%, #fece2f27);
		border-radius: 1em 0;
		padding: 0.125rem 0.5rem;
	}
	.dark mark {
		background: linear-gradient(-100deg, #fece2fa8, #fddf47a4 95%, #fece2f8a);
	}
	/* Gradients by https://uigradients.com/ */
	.dark #app {
		/* Royal */
		background: #141E30; /* fallback for old browsers */
		background: -webkit-linear-gradient(to left bottom, #243B55, #141E30); /* Chrome 10-25, Safari 5.1-6 */
		background: linear-gradient(to left bottom, #243B55, #141E30); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	}
</style>
<!--
	Components based on https://devdojo.com/tails/app
-->
<header class="w-full py-32 lg:pt-44 flex flex-col text-center items-center justify-center min-h-[75vh]">
	<h1 class="text-6xl md:text-7xl text-gray-800 font-black leading-7 md:leading-10 dark:text-white">
		HydePHP
	</h1>
	<div class="max-w-3xl p-8 mt-4">
		<strong role="doc-subtitle" class="text-4xl leading-8">
			A Laravel-powered 
			<strong>Static App Generator</strong>
		</strong>
		<p class="text-2xl mt-2">
			that allows you to create blogs, documentation sites, and more. 
		</p>
		<!-- Syntax highlighted by torchlight.dev -->
		<pre style="margin-top: 2.5rem; margin-bottom: 0.5rem;"><code data-theme="material-theme-palenight" data-lang="bash" class="torchlight" style="background-color: #292D3E; padding: 0.5rem 1rem; border-radius: 0.25rem;"><span style="color: #FFCB6B;">composer</span> <span style="color: #C3E88D;">create-project hyde/hyde</span> <span style="color: #CCCCCC">--stability=dev</span></code></pre>
	</div>
	<div class="my-4">  {{-- Buttons based on https://tailwindcomponents.com/component/tailwind-css-buttons --}}
		<a href="docs/master/index.html" class="transition duration-300 ease-in-out focus:outline-none focus:ring-4 focus:ring-purple-900 focus:ring-opacity-75 focus:shadow-outline bg-purple-700 hover:bg-purple-900 text-white font-normal py-2 px-4 m-2 rounded">Documentation</a>
		<a href="#features" class="transition duration-300 ease-in-out focus:outline-none focus:ring-4 focus:ring-indigo-900 focus:ring-opacity-75 focus:shadow-outline bg-indigo-700 hover:bg-indigo-900 text-white font-normal py-2 px-4 m-2 rounded">Explore the Features</a>
	</div>
</header>
<!-- Section 1 -->
<section id="features" class="px-2 py-32 bg-white dark:bg-gray-800 md:px-0">
	<div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
		<div class="flex flex-wrap items-center sm:-mx-3">
			<div class="w-full md:w-1/2 md:px-3">
				<div class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
					<h1 class="text-4xl font-extrabold tracking-tight text-gray-900 dark:text-gray-100 sm:text-5xl md:text-3xl lg:text-4xl xl:text-5xl">
						<span class="block xl:inline">Create beautiful websites</span>
						<span class="block text-indigo-600 xl:inline">in minutes!</span>
					</h1>
					<div>
						<p class="mx-auto text-base text-gray-500 dark:text-gray-200 sm:max-w-md lg:text-xl md:max-w-3xl mb-4">It's never been easier to build beautiful websites to show off your content to the world.</p>
						<p class="mx-auto text-base text-gray-500 dark:text-gray-300 sm:max-w-md lg:text-lg md:max-w-3xl">Hyde comes with Tailwind-based Blade views so that you can focus on content, not markup.</p>
					</div>
					<div class="relative flex flex-col sm:flex-row sm:space-x-4">
						<a href="#about" class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-indigo-600 rounded-md sm:mb-0 hover:bg-indigo-700 sm:w-auto">
							Learn more
							<svg
							xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<line x1="5" y1="12" x2="19" y2="12"></line>
							<polyline points="12 5 19 12 12 19"></polyline>
						</svg>
					</a>
					<a href="docs/master/index.html" class="flex items-center px-6 py-3 text-gray-500 dark:text-gray-200 bg-gray-200 dark:bg-gray-600 hover:dark:bg-gray-700 rounded-md hover:bg-gray-300 hover:text-gray-600">
						Explore the docs
					</a>
				</div>
			</div>
		</div>
		<div class="w-full md:w-1/2">
			<div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
				<iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/pJw_auBMSMY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>
</section>
<!-- Section 2 -->
<section class="w-full bg-white dark:bg-gray-800 pt-7 pb-7 md:pt-20 md:pb-24">
	<div class="box-border flex flex-col items-center content-center px-8 mx-auto leading-6 text-black dark:text-white border-0 border-gray-300 border-solid md:flex-row max-w-7xl lg:px-16">
		<!-- Image -->
		<div class="box-border relative w-full max-w-md px-4 mt-5 mb-4 -ml-5 text-center bg-no-repeat bg-contain border-solid md:ml-0 md:mt-0 md:max-w-none lg:mb-0 md:w-1/2 xl:pl-10">
			<img src="../media/productivity.png" class="p-2 pl-6 pr-5 xl:pl-16 xl:pr-20 ">
		</div>
		<!-- Content -->
		<div class="box-border order-first w-full text-black dark:text-white border-solid md:w-1/2 md:pl-10 md:order-none">
			<h2 class="m-0 text-xl font-semibold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl">
				Boost Productivity
			</h2>
			<p class="pt-4 pb-8 m-0 leading-7 text-gray-700 dark:text-gray-100 border-0 border-gray-300 sm:pr-12 xl:pr-32 lg:text-lg">
				Hyde is incredibly fast to get started with. 
				<mark>Here's&nbsp;why.</mark>
			</p>
			<ul class="p-0 m-0 leading-6 border-0 border-gray-300">
				<li class="box-border relative py-1 pl-0 text-left text-gray-500 dark:text-gray-300 border-solid">
					<span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 dark:bg-yellow-500 rounded-full">
						<span class="text-sm font-bold">✓</span>
					</span>
					Pre-built semantic Blade templates using TailwindCSS.
				</li>
				<li class="box-border relative py-1 pl-0 text-left text-gray-500 dark:text-gray-300 border-solid">
					<span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 dark:bg-yellow-500 rounded-full">
						<span class="text-sm font-bold">✓</span>
					</span>
					Easy asset managing with pre-configured Laravel Mix.
				</li>
				<li class="box-border relative py-1 pl-0 text-left text-gray-500 dark:text-gray-300 border-solid">
					<span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 dark:bg-yellow-500 rounded-full">
						<span class="text-sm font-bold">✓</span>
					</span>
					Content-first workflow using your choice of tools. 
				</li>
			</ul>
		</div>
		<!-- End  Content -->
	</div>
	<div class="box-border flex flex-col items-center content-center px-8 mx-auto mt-2 leading-6 text-black dark:text-white border-0 border-gray-300 border-solid md:mt-20 xl:mt-0 md:flex-row max-w-7xl lg:px-16">
		<!-- Content -->
		<div class="box-border w-full text-black dark:text-white border-solid md:w-1/2 md:pl-6 xl:pl-32">
			<h2 class="m-0 text-xl font-semibold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl">
				Automatic Content
			</h2>
			<p class="pt-4 pb-8 m-0 leading-7 text-gray-700 dark:text-gray-100 border-0 border-gray-300 sm:pr-10 lg:text-lg">
				<mark>Hyde takes care of the boring stuff</mark>, so you don't have to.
			</p>
			<ul class="p-0 m-0 leading-6 border-0 border-gray-300">
				<li class="box-border relative py-1 pl-0 text-left text-gray-500 dark:text-gray-300 border-solid">
					<span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 dark:bg-yellow-500 rounded-full">
						<span class="text-sm font-bold">✓</span>
					</span>
					Automatic navigation and sidebars menus.
				</li>
				<li class="box-border relative py-1 pl-0 text-left text-gray-500 dark:text-gray-300 border-solid">
					<span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 dark:bg-yellow-500 rounded-full">
						<span class="text-sm font-bold">✓</span>
					</span>
					Intelligent metadata for SEO and accessibility.
				</li>
				<li class="box-border relative py-1 pl-0 text-left text-gray-500 dark:text-gray-300 border-solid">
					<span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 dark:bg-yellow-500 rounded-full">
						<span class="text-sm font-bold">✓</span>
					</span>
					Automatic file discovery without needing routing.
				</li>
			</ul>
		</div>
		<!-- End  Content -->
		<!-- Image -->
		<div class="box-border relative w-full max-w-md px-4 mt-10 mb-4 text-center bg-no-repeat bg-contain border-solid md:mt-0 md:max-w-none lg:mb-0 md:w-1/2">
			<img src="../media/settings.png" class="pl-4 sm:pr-10 xl:pl-10 lg:pr-32">
		</div>
	</div>
</section>
<a id="about"></a>
<section class="py-20 bg-white dark:bg-gray-800">
	<div class="container items-center max-w-6xl px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
		<div class="flex flex-wrap items-center -mx-3 justify-center">
			<div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
				<div class="w-full lg:max-w-md">
					<h2 class="mb-4 text-3xl font-bold leading-tight tracking-tight sm:text-4xl font-heading">Who is Hyde for?</h2>
					<p class="mb-4 font-medium tracking-tight text-gray-700 xl:mb-6 dark:text-gray-300">
						Wondering who can benefit from using Hyde? Well, besides everyone, here's some use cases to get your mind started.
					</p>
					<ul>
						<li class="flex items-center py-2 space-x-4 xl:py-3">
							<svg class="w-8 h-8 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
							xmlns="http://www.w3.org/2000/svg">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
						</svg>
						<span class="font-medium text-gray-600 dark:text-gray-300">
							Laravel developers wanting to build a static site without having to learn a new framework.
						</span>
					</li>
					<li class="flex items-center py-2 space-x-4 xl:py-3">
						<svg class="w-8 h-8 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
						xmlns="http://www.w3.org/2000/svg">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
					</svg>
					<span class="font-medium text-gray-600 dark:text-gray-300">
						Content creators who just want to write blog posts in Markdown and not have to worry about anything else.
					</span>
				</li>
				<li class="flex items-center py-2 space-x-4 xl:py-3">
					<svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
					xmlns="http://www.w3.org/2000/svg">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
				</svg>
				<span class="font-medium text-gray-600 dark:text-gray-300">Developers who want to get a documentation site up and running quickly, allowing them to focus on content.</span>
			</li>
		</ul>
	</div>
</div>
<div class="w-full px-3 mb-12 lg:w-2/5 order-0 lg:order-1 lg:mb-0">
	<img class="mx-auto sm:max-w-sm lg:max-w-full" src="../media/feature-graphic.png" alt="feature image">
</div>
</div>
</div>
</section>

<section class="mx-auto max-w-7xl py-16 px-8 bg-white dark:bg-gray-800">
	<h2 class="text-center text-3xl font-bold">How does it work?</h2>
	
	<div class="flex flex-row w-full my-4">
		<div class="lg:w-1/3 m-4 p-4 rounded-lg shadow-lg bg-gray-100 dark:bg-gray-700 prose dark:prose-invert">
			<h3>
				Quick and painless installation
			</h3>
			<h4>
				Hyde is installed similarly to Laravel
			</h4>
			<p>
				Installation is easy by using composer. The installer creates a directory with all the files you need to get started, including Blade views and compiled Tailwind assets.
			</p>
		</div>
		<div class="lg:w-1/3 m-4 p-4 rounded-lg shadow-lg bg-gray-100 dark:bg-gray-700 prose dark:prose-invert">
			<h3>
				Save content in _source folders
			</h3>
			<h4>
				Creating content is easy with Markdown
			</h4>
			<p>
				Put your Markdown or Blade content in the source directories. The directory you use will determine the Blade layout and output path that will be used. 
			</p>
		</div>
		<div class="lg:w-1/3 m-4 p-4 rounded-lg shadow-lg bg-gray-100 dark:bg-gray-700 prose dark:prose-invert">
			<h3>
				Files are automatically discovered
			</h3>
			<h4>
				Compiling is initiated with the HydeCLI
			</h4>
			<p>
				When running the build command, Hyde will take your source files and intelligently compiles them into the output directory. During this build navigation menus and sidebars will be generated automatically.
			</p>
		</div>
	</div>
	
</section>

<section class="pb-20 pt-8 bg-white dark:bg-gray-800">
	<div class="container items-center max-w-6xl px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
		<div class="flex flex-wrap items-center -mx-3 justify-center">
			<div class=" w-full px-3 ">
				<div class="w-full lg:max-w-3xl mx-auto">
					<h2 class="mb-4 text-3xl font-bold leading-tight tracking-tight sm:text-4xl font-heading text-center">More about Hyde</h2>
					<p class="m-4 text-gray-800 xl:mb-6 dark:text-gray-100">
						<br>
						HydePHP is a new Static Site Builder focused on writing content, not markup. With Hyde, it is easy to create static websites, blogs, and documentation pages using Markdown and (optionally) Blade.
						<br>
						<br>
						Hyde is powered by Laravel Zero which is a stripped-down version of the robust Laravel Framework. Using Blade templates the site is intelligently compiled into static HTML.
						<br>
						<br>
						Hyde is inspired by JekyllRB and is created for Developers who are comfortable writing posts in Markdown. It requires virtually no configuration out of the box as it favours convention over configuration. This is what makes Hyde different from other Laravel static site builders that are more focused on writing your blade views from scratch, which you can do with Hyde too if you want.
						<br>
						<br>
						Hyde is designed to be stupidly simple to get started with, while also remaining easily hackable and extendable. Hyde comes with a lightweight minimalist frontend layout built with TailwindCSS which you can extend and customize with the Blade components.
						<br>
						<br>
						Due to this powerful modularity yet elegant simplicity, Hyde is a great choice for developers no matter what their background or experience level.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="posts" class="mx-auto max-w-7xl py-16 px-8 lg:mt-8">
	<header class="lg:mb-12 xl:mb-16">
		<h2
		class="text-3xl text-left opacity-75 dark:opacity-90 leading-10 tracking-tight font-extrabold sm:leading-none mb-8 md:mb-12 md:text-4xl md:text-center lg:text-5xl">
		Latest Posts
	</h2>
</header>
<div class="max-w-xl mx-auto">
	@foreach(Hyde::getLatestPosts() as $post)
	@include('hyde::components.article-excerpt')
	@endforeach
</div>
</section>
<style> html, body { scroll-behavior: smooth; } </style>
@push('footer')
<small>
	Landing page attributions:
	Components based on https://devdojo.com/tails/app.
	Illustrations by 
	<a href="https://icons8.com/illustrations/author/d7G1hwdhjPTV" rel="noopener noreferrer nofollow">Semenin Egor</a> from 
	<a href="https://icons8.com/illustrations" rel="noopener noreferrer nofollow">Ouch!</a>.
</small>
@endpush
@endsection