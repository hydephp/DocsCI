<style>
	#pages-section-wrapper {
		/* height: 100vh; */
		/* overflow-y: scroll; */
		transition: all 1s;
	}

	#pages-section-wrapper.start {
		background-color: lightblue;
	}
	#pages-section-wrapper.end {
		background-color: pink;
	}
</style>

<section id="pages-section-wrapper" class="mx-auto items-center text-center py-16 px-4 lg:min-h-screen bg-slate-100 start">
	<div  id="pages-section">
		
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
	<div id="slide2" class="slide mx-auto items-center lg:min-h-screen">
		<h1 class="text-2xl md:3-xl lg:text-5xl font-black text-slate-700 px-3 my-3">
			<div id="pagesSectionHeader">
				Or use Laravel's Blade
			</div>
		</h1>
		<strong class="text-xl md:text-2xl lg:text-3xl text-slate-800 px-3">
			For those times you need full control.
		</strong>
		<div class="p-8  max-w-5xl mx-auto">
			<iframe loading="lazy" width="100%" height="100%" style="min-height: 550px; overflow: hidden; border-radius: 1rem;" src="https://cdn.desilva.se/frontend/df6bc4b6-8665-4125-89e3-aee46ef7905e/argon-blade-example-animated.html?1" frameborder="0"></iframe>
		</div>
	</div>
</div>


<script>
	function c9230488Start() {
		document.getElementById('pages-section-wrapper').classList.add('start');
		document.getElementById('pages-section-wrapper').classList.remove('end');
	}
	function c9230488End() {
		document.getElementById('pages-section-wrapper').classList.remove('start');
		document.getElementById('pages-section-wrapper').classList.add('end');
	}
	
	
	
	if (window.matchMedia("(prefers-reduced-motion: no-preference)").matches) {
		let offset = document.getElementById('first').clientHeight;
		document.addEventListener('scroll', function() {
			if (window.scrollY < offset + 300) {
				c9230488Start();
			} else {
				c9230488End();
			}
		});
	}

	document.getElementById('pages-section-wrapper').focus();
	
</script>

</section>