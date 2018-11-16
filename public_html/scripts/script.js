const slide = document.querySelectorAll('.slide-in');
const form = document.querySelector('form');
const foot = document.querySelector('footer');
const output = document.querySelector('#outputArea');

window.onload = function(){
	scaleThings();
};

function scaleThings() {
	let scale = document.querySelector('#scale');
	scale.classList.toggle('scale');
}

/*function handleSubmit() {
	let submitPara = document.createElement('p');
	let paraExist = form.querySelector('p');
	if (!paraExist) {
		output.innerText = "Message sent! I'll get back to you shortly.";
		form.appendChild(submitPara);
	}
}*/

function checkSlide(o) {
	slide.forEach(slideBlock => {
		if(o.scrollTop + foot.scrollHeight >= ((o.scrollHeight) - (2 * o.offsetHeight))) {
			slideBlock.classList.add("active");
		} else if(o.scrollTop + foot.scrollHeight <= ((o.scrollHeight) - (2 * o.offsetHeight))) {
			slideBlock.classList.remove("active");
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

//form.addEventListener('submit', handleSubmit);