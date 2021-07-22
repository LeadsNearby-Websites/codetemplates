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
    const carousels = d.querySelectorAll('.lnbBadgeRotator__grid');
        carousels.forEach(carousel => {
            let glide = new Glide(carousel, {
            type: 'carousel',
            perView: 6,
            focusAt: 'center',
            autoplay: 3500,
            breakpoints: {
                800: {
                perView: 4
                },
                600: {
                perView: 2
                }
            }
            });
            glide.mount();
        });
    });
})(document, window);