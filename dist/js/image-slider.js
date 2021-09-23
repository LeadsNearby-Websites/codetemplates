(function (d, w) {
	function whenAvailable(name, callback) {
	let interval = 50; // ms

	window.setTimeout(function () {
		if (window[name]) {
		callback(window[name]);
		} else {
		whenAvailable(name, callback);
		}
	}, interval);
}

whenAvailable('Glide', () => {
	const sliders = d.querySelectorAll('.lnbImageSlider');
		sliders.forEach(slider => {
			let glide = new Glide(slider, {
			type: 'carousel',
			perView: 1,
			focusAt: 'center',
			autoplay: 2800,
			breakpoints: {
				800: {
				perView: 1
				},
				600: {
				perView: 1
				}
			}
			});
			glide.mount();
		});
	});
})(document, window);