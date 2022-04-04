<style>
</style>
<section id="pages-section-wrapper" class="mx-auto items-center text-center py-16 px-4 lg:min-h-screen bg-slate-100" style="background-color: lightblue;">
	<div onclick="transitionSlides()" id="pages-section">
		
	<div id="slide1" class="slide mx-auto items-center lg:min-h-screen">
		<h1 class="text-2xl md:3-xl lg:text-5xl font-black text-slate-700 px-3 my-3">
			<div id="pagesSectionHeader">
				Create Markdown Driven Pages
			</div>
		</h1>
		<strong class="text-xl md:text-2xl lg:text-3xl text-slate-800 px-3">
			With ease. Front Matter included.
		</strong>
		<div class="p-8  max-w-5xl mx-auto" data-aos="fade-up">
			<picture class="shadow-2xl mx-auto">
				<source media="(max-width: 425px)" srcset="./media/markdown-page-example-ios.png">
				<img 
					src="./media/markdown-page-example-mbp.png"
					alt="markdown-page-example">
			</picture>
		</div>
		<p>
			<a href="https://github.com/hydephp/examples/blob/24218d98cf86aea217729337ad80801d6930f5a0/examples/markdown-pages/hyde-demo-markdown-page.md">View source on GitHub</a>
		</p>
	</div>
	<div id="slide2" class="slide mx-auto items-center lg:min-h-screen" style="display: none;">
		<h1 class="text-2xl md:3-xl lg:text-5xl font-black text-slate-700 px-3 my-3">
			<div id="pagesSectionHeader">
				Or use Laravel's Blade
			</div>
		</h1>
		<strong class="text-xl md:text-2xl lg:text-3xl text-slate-800 px-3">
			For those times you need full control.
		</strong>
		<div class="p-8  max-w-5xl mx-auto" data-aos="fade-up">
			<picture class="shadow-2xl mx-auto">
				<source media="(max-width: 425px)" srcset="./media/blade-page-example-ios.png">
				<img 
					src="./media/blade-page-example-mbp.png"
					alt="blade-page-example">
			</picture>
		</div>
		<p>
			<a href="https://github.com/hydephp/examples/blob/24218d98cf86aea217729337ad80801d6930f5a0/examples/markdown-pages/hyde-demo-markdown-page.md">View source on GitHub</a>
		</p>
	</div>
</div>

</section>
<script>
	const sectionWrapper = document.getElementById('pages-section-wrapper');
	const section = document.getElementById('pages-section');
	const slide1 = document.getElementById("slide1");
	const slide2 = document.getElementById("slide2");
	let currentSlide = 1;

	// Transition between the slides
	function transitionSlides() {
		if (currentSlide == 1) {
			transitionToSecond();
			currentSlide = 2;
		} else {
			transitionToFirst();
			currentSlide = 1;
		}
	}

	function transitionToSecond() {
		slide1.style.display = 'none';
		slide2.style.display = 'block';
		sectionWrapper.style.backgroundColor = 'pink';
	}

	function transitionToFirst() {
		slide1.style.display = 'block';
		slide2.style.display = 'none';
		sectionWrapper.style.backgroundColor = 'lightblue';
	}

	window.addEventListener("load", function() {
		section.style.cursor = 'pointer';
	});
</script>