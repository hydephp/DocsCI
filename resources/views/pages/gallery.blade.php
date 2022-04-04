@extends('hyde::layouts.app')
@section('content')
<script>
	// Are animations enabled?
	var animationsEnabled = true;
	
	// Disable animations if prefers-reduced-motion is enabled
	if (window.matchMedia && window.matchMedia('(prefers-reduced-motion)').matches) {
		console.log('Prefers reduced motion detected. Animations disabled.');
		animationsEnabled = false;
	} else {
		// Add the stylesheet
		var link = document.createElement('link');
		link.rel = 'stylesheet';
		link.href = 'https://unpkg.com/aos@next/dist/aos.css';
		document.head.appendChild(link);
	}
</script>
<section class="py-16 px-4 lg:min-h-screen text-center">
	<h1 class="text-2xl md:3-xl lg:text-5xl font-black text-slate-700 px-3 my-3">
		Turn Markdown into Blog Posts
	</h1>
	<strong class="text-xl md:text-2xl lg:text-3xl text-slate-800 px-3">
		Write content. Not code.*
	</strong>
	<div class="text-xl text-slate-700">
		<small>*Unless you want to, of course.</small>
	</div>
	<style>
		#argon-section-header {
			align-items: center;
		}
	</style>
	<div class="lg:hidden sm:px-8 py-4">
		@include('components.gallery.example-delta-interactive-header')
	</div>
	<div id="argon-section-header" class="hidden lg:flex max-w-7xl my-8 mx-auto items-center clear-both lg:px-8">
		<div class="float-left z-10" style="margin-right: -40px;" data-aos="fade-right">
			@include('components.gallery.example-argon-header')
		</div>
		<div class="float-right" data-aos="fade-up">
			@include('components.gallery.example-argon-image-header')
		</div>
	</div>
	<div class="clear-both"></div>
</section>
@include('components.gallery.section-pages')
<section class="mx-auto items-center text-center py-16 px-4 lg:min-h-screen">
	<h1 class="text-2xl md:3-xl lg:text-5xl font-black text-slate-700 px-3 my-3">
		Beautiful Documentation Pages
	</h1>
	<strong class="text-xl md:text-2xl lg:text-3xl text-slate-800 px-3">
		All without breaking a sweat.
	</strong>

	<div class="p-8  max-w-5xl mx-auto" data-aos="fade-up">
		<picture class="shadow-2xl mx-auto">
			<source media="(max-width: 425px)" srcset="./media/documentation-page-example-ios.png">
			<img 
				src="./media/documentation-page-example-mbp.png"
				alt="documentation-page-example">
		</picture>
	</div>
	<p>
		<a href="https://github.com/hydephp/examples/blob/24218d98cf86aea217729337ad80801d6930f5a0/examples/markdown-documentation/installation.md">View source on GitHub</a>
	</p>
</section>
<section class="mx-auto items-center text-center py-16 px-4 lg:min-h-screen bg-slate-100">
	<h1 class="text-2xl md:3-xl lg:text-5xl font-black text-slate-700 px-3 my-3">
		Fully Mobile Friendly, of course.
	</h1>
	<strong class="text-xl md:text-2xl lg:text-3xl text-slate-800 px-3">
		Enjoy your site in any size of screen.
	</strong>
	<div class="devices relative w-full flex gap-6 lg:gap-10 snap-x snap-mandatory overflow-x-auto lg:overflow-hidden justify-center py-8 lg:mt-4">
		<div class="snap-center shrink-0">
			<div class="shrink-0 w-4 sm:w-48"></div>
		</div>
		<div class="snap-center shrink-0 first:pl-8 last:pr-8">
			<img class="shrink-0 rounded-lg w-auto lg:w-80" data-aos="fade-left" src="https://raw.githubusercontent.com/hydephp/examples/master/media/devices/post_example_ios_8.png" />
		</div>
		<div class="snap-center shrink-0 first:pl-8 last:pr-8">
			<img class="shrink-0 rounded-lg w-auto lg:w-80" data-aos="fade-up" src="https://raw.githubusercontent.com/hydephp/examples/master/media/devices/post_feed_ios_8.png" />
		</div>
		<div class="snap-center shrink-0 first:pl-8 last:pr-8">
			<img class="shrink-0 rounded-lg w-auto lg:w-80" data-aos="fade-right" src="https://raw.githubusercontent.com/hydephp/examples/master/media/devices/docs_example_ios_8.png" />
		</div>
		<div class="snap-center shrink-0">
			<div class="shrink-0 w-4 sm:w-48"></div>
		</div>
	</div>
</section>
<section class="mx-auto items-center py-16 px-4 lg:min-h-screen ">
	<header class="text-center">
		<h1 class="text-2xl md:3-xl lg:text-5xl font-black text-slate-700 px-3 my-3 text-center ">
			Clean Semantic HTML
		</h1>
		<strong class="text-xl md:text-2xl lg:text-3xl text-slate-800 px-3 text-center ">
			Data Rich, SEO Friendly, and Accessible.
		</strong>
	</header>
	<div class="flex flex-col lg:flex-row justify-between items-start my-8 max-w-screen-xl mx-auto">
		@include('components.gallery.example-delta-code-alice-post')
		@include('components.gallery.example-delta-code-alice-table')
	</div>
</aside>
</div>
</section>
<footer>
	<div class="text-center p-4">
		Images hosted with ❤ by <a href="https://github.com">GitHub</a>
	</div>
</footer>
<style>
	.devices img {
		max-height: 80vh;
	}
</style>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
	// If animations are enabled
	if (animationsEnabled === true) {
		AOS.init();
	}
</script>
@endsection