const slide = document.querySelectorAll('.slide-in');
const foot = document.querySelector('footer');

window.onload = function(){
	scaleThings();
};

function scaleThings() {
	let scale = document.querySelector('#scale');
	scale.classList.toggle('scale');
}

function checkSlide(o) {
	if(window.innerWidth >= 500) {
		slide.forEach(slideBlock => {
			if(o.scrollTop + foot.scrollHeight >= ((o.scrollHeight) - (1.95 * o.offsetHeight))) {
				slideBlock.classList.add("active");
			} else if(o.scrollTop + foot.scrollHeight <= ((o.scrollHeight) - (1.95 * o.offsetHeight))) {
				slideBlock.classList.remove("active");
			}
		})
	} else {
		slide.forEach(slideBlock => {
			if(o.scrollTop + foot.scrollHeight >= ((o.scrollHeight) - (2.5 * o.offsetHeight))) {
				slideBlock.classList.add("active");
			} else if(o.scrollTop + foot.scrollHeight <= ((o.scrollHeight) - (2.5 * o.offsetHeight))) {
				slideBlock.classList.remove("active");
			}
		})
	}
}

function debounce(func, wait = 20, immediate = true) {
	let timeout;
	return function() {
		let context = this, args = arguments;
		let later = function() {
			timeout = null;
			if(!immediate) func.apply(context, args);
		};
		let callNow = immediate && !timeout;
		clearTimeout(timeout);
		timeout = setTimeout(later, wait);
		if (callNow) func.apply(context, args);
	}
}
