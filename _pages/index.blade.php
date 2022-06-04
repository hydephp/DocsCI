@extends('hyde::layouts.app')
@section('content')
@php($title = 'Elegant and Powerful Static App Builder')
<style>
	mark {
		background: linear-gradient(-100deg, #fece2f2f, #fddf47a4 95%, #fece2f27);
		border-radius: 1em 0;
		padding: 0.125rem 0.5rem;
	}
	.dark mark {
		background: linear-gradient(-100deg, #fece2fbe, #fddf47a4 95%, #fece2fbd);
	}
	/* Gradients by https://uigradients.com/ */
	.dark .app-gradient {
		/* Royal */
		background: #141E30; /* fallback for old browsers */
		background: -webkit-linear-gradient(to left bottom, #243B55, #141E30); /* Chrome 10-25, Safari 5.1-6 */
		background: linear-gradient(to left bottom, #243B55, #141E30); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	}
	#main-navigation {
		z-index: 10;
	}
</style>
@push('meta')
<meta name="author" content="Caen De Silva">
<meta name="description" content="HydePHP - Elegant and Powerful Static App Builder">
<meta name="keywords" content="HydePHP, Static App Builder, Static Sites, Blogs, Documentation">
@endpush

<!--
	Components based on https://devdojo.com/tails/app
-->
<header id="content" class="app-gradient w-full py-32 lg:pt-44 flex flex-col text-center items-center justify-center min-h-screen -mt-16">
	<h1 class="text-5xl sm:text-6xl md:text-7xl text-gray-800 font-black leading-7 md:leading-10 dark:text-white">
		HydePHP
	</h1>
	<div class="max-w-full sm:max-w-3xl p-8 mt-4">
		<strong role="doc-subtitle" class="text-3xl sm:text-4xl leading-8">
			A Laravel-powered 
			<strong>Static App Generator</strong>
		</strong>
		<p class="text-xl sm:text-2xl mt-4 sm:mt-2">
			that allows you to create blogs, documentation sites, and more. 
		</p>
		<!-- Syntax highlighted by torchlight.dev -->
		<pre class="hidden sm:block" style="margin-top: 2.5rem; margin-bottom: 0.5rem;"><code data-theme="material-theme-palenight" data-lang="bash" class="torchlight" style="background-color: #292D3E; padding: 0.5rem 1rem; border-radius: 0.25rem;"><span style="color: #FFCB6B;">composer</span> <span style="color: #C3E88D;">create-project hyde/hyde</span> <span style="color: #CCCCCC">--stability=dev</span></code></pre>
		<div class="sm:hidden">
		<pre class="max-w-full" style="margin-top: 2.5rem; margin-bottom: 0.5rem;"><code data-theme="material-theme-palenight" data-lang="bash" class="torchlight flex flex-wrap justify-center" style="background-color: #292D3E; padding: 0.5rem 1rem; border-radius: 0.25rem;"><span style="color: #FFCB6B; margin: 0 4px;">composer</span> <span style="color: #C3E88D; margin: 0 4px;">create-project hyde/hyde</span> <span style="color: #CCCCCC" margin: 0 4px;>--stability=dev</span></code></pre>
	</div>
	</div>
	<div class="sm:my-4 max-w-full flex flex-wrap justify-center">  {{-- Buttons based on https://tailwindcomponents.com/component/tailwind-css-buttons --}}
		<a href="docs/master/index.html" class="btn btn-primary">Documentation</a>
		<a href="#features" class="btn btn-default">Explore the Features</a>
	</div>
</header>

@include('sections.features')

@include('sections.posts')

<style> html, body { scroll-behavior: smooth; } </style>
@push('footer')
<div class="mt-1 pt-1 border-t border-slate-200 dark:border-slate-700">
	<small>
		Landing page attributions:
		Components based on https://devdojo.com/tails/app.
		Illustrations by 
		<a href="https://icons8.com/illustrations/author/d7G1hwdhjPTV" rel="noopener noreferrer nofollow">Semenin Egor</a> from 
		<a href="https://icons8.com/illustrations" rel="noopener noreferrer nofollow">Ouch!</a>.
	</small>
</div>
@endpush
@endsection
