@php
$statistics = new \App\StatisticsController();
@endphp

<div class="flex flex-wrap justify-center max-w-7xl mx-auto my-4 lg:my-8 items-stretch">
	<div class="my-4 px-4 w-full md:w-1/2 xl:w-1/3 max-w-md h-auto">
		<div class="bg-white text-slate-900 p-4 rounded-lg shadow-xl h-full relative">
			<h3 class="font-bold text-2xl text-center mb-3 pb-3">Total Downloads</h3>
			<strong id="counter-framework-downloads-total" class="text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-br from-purple-500 to-red-600">
				{{ ($statistics->framework->downloads->total) }}
			</strong>
			<div class="prose mt-4">
				<small>
					<a href="https://packagist.org/packages/hyde/framework/stats">View on Packagist</a>
				</small>
			</div>
			<span class="opacity-75 hover:opacity-100 transition-opacity absolute top-4 right-4 cursor-help text-lg" title="Total downloads for the Hyde/Framework package, counted by packagist.org {{ Carbon\Carbon::now() }}">&#9432;</span>
		</div>
		
	</div>
</div>


<script>
	// unless user has prefers reduced motion
	if (! window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
		var CounterFDTHasRun = false;
		// Create a counter animation
		function runCounterFDT() {
			var counter = document.getElementById('counter-framework-downloads-total');
			var count = counter.textContent;
			var i = 0;
			var interval = setInterval(function() {
				if (i < count - 1000) {
					i = i + 99;
				} else if (i < count - 100) {
					i = i + 9;
				} else if (i < count - 50) {
					i = i + 5;
				} else {
					i++;
				}
				counter.textContent = (new Intl.NumberFormat().format(i));
				if (i >= count) {
					clearInterval(interval);
				}
			}, 10);
		}

		// Run the counter animation when the element comes into view
		var observer = new IntersectionObserver(function(entries) {
			// isIntersecting is true when element and viewport are overlapping
			// isIntersecting is false when element and viewport don't overlap
			if(entries[0].isIntersecting === true)
				if (CounterFDTHasRun === false) {
					runCounterFDT();
					CounterFDTHasRun = true;
				}
		}, { threshold: [0] });

		observer.observe(document.querySelector("#counter-framework-downloads-total"));
	}
</script>