const slide = document.querySelectorAll('.slide-in');
const scrollingBox = document.querySelector('.scrolling-box');
const form = document.querySelector('form');
const contact = document.querySelector('.contact');
const footer = document.querySelector('footer');

window.onload = function(){
	scaleThings();
};

function scaleThings() {
	let scale = document.querySelector("#scale");
	scale.classList.toggle('scale');
}

function handleSubmit() {
	let submitPara = document.createElement("p");
	let paraExist = form.querySelector("p");
	if (!paraExist) {
		submitPara.innerText = "Message sent! I'll get back to you shortly.";
		form.appendChild(submitPara);
	}
}

function checkSlide(o) {
	slide.forEach(slideBlock => {
		if(o.scrollTop >= ((o.scrollHeight) - (1.95 * o.offsetHeight))) {
			slideBlock.classList.add("active");
		}
	})
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

form.addEventListener('submit', handleSubmit);