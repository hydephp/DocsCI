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
</style>

<!--
Components based on https://devdojo.com/tails/app
-->

<header class="w-screen pb-20 pt-32 lg:pt-44 flex flex-col text-center items-center justify-center min-h-[75vh]">
	<h1 class="text-6xl md:text-7xl text-gray-800 font-black leading-7 md:leading-10 dark:text-white">
		HydePHP
	</h1>
	<div class="max-w-3xl p-8 mt-4">
		<strong role="doc-subtitle" class="text-4xl leading-8">
			A Laravel-powered <strong>Static App Generator</strong>
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
<section id="features" class="px-2 py-32 bg-white dark:bg-gray-900 md:px-0">
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
							<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
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
<section class="w-full bg-white dark:bg-gray-900 pt-7 pb-7 md:pt-20 md:pb-24">
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
				Hyde is incredibly fast to get started with. <mark>Here's&nbsp;why.</mark>
			</p>
			<ul class="p-0 m-0 leading-6 border-0 border-gray-300">
				<li class="box-border relative py-1 pl-0 text-left text-gray-500 dark:text-gray-400 border-solid">
					<span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 dark:bg-yellow-500 rounded-full"><span class="text-sm font-bold">✓</span></span>
					Pre-built semantic Blade templates using TailwindCSS.
				</li>
				<li class="box-border relative py-1 pl-0 text-left text-gray-500 dark:text-gray-400 border-solid">
					<span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 dark:bg-yellow-500 rounded-full"><span class="text-sm font-bold">✓</span></span>
					Easy asset managing with pre-configured Laravel Mix.
				</li>
				<li class="box-border relative py-1 pl-0 text-left text-gray-500 dark:text-gray-400 border-solid">
					<span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 dark:bg-yellow-500 rounded-full"><span class="text-sm font-bold">✓</span></span>
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
				<li class="box-border relative py-1 pl-0 text-left text-gray-500 dark:text-gray-400 border-solid">
					<span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 dark:bg-yellow-500 rounded-full"><span class="text-sm font-bold">✓</span></span>
					Automatic navigation and sidebars menus.
				</li>
				<li class="box-border relative py-1 pl-0 text-left text-gray-500 dark:text-gray-400 border-solid">
					<span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 dark:bg-yellow-500 rounded-full"><span class="text-sm font-bold">✓</span></span>
					Intelligent metadata for SEO and accessibility.
				</li>
				<li class="box-border relative py-1 pl-0 text-left text-gray-500 dark:text-gray-400 border-solid">
					<span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 dark:bg-yellow-500 rounded-full"><span class="text-sm font-bold">✓</span></span>
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


<section id="posts" class="mx-auto max-w-7xl py-16 px-8 lg:mt-8">
	<header class="lg:mb-12 xl:mb-16">
		<h2
		class="text-3xl text-left opacity-75 dark:opacity-90 leading-10 tracking-tight font-extrabold sm:leading-none mb-8 md:mb-12 md:text-4xl md:text-center lg:text-5xl">
		Latest Posts</h2>
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
Illustrations by <a href="https://icons8.com/illustrations/author/d7G1hwdhjPTV" rel="noopener noreferrer nofollow">Semenin Egor</a> from <a href="https://icons8.com/illustrations" rel="noopener noreferrer nofollow">Ouch!</a>.
</small>
@endpush

@endsection
