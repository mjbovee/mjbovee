const slide = document.querySelectorAll('.slide-in');
const scrollingBox = document.querySelector('.scrolling-box');
const form = document.querySelector('form');

window.onload = function(){
	scaleThings();
};

function scaleThings() {
	let scale = document.querySelector("#scale");
	scale.classList.toggle('scale');
}

function handleSubmit() {
	let submitPara = document.createElement("p");
	submitPara.innerText = "You submitted a form"
	form.appendChild(submitPara)
}

/*function checkSlide(e) {
	console.log(e)
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

scrollingBox.addEventListener('scroll', debounce(checkSlide));*/
form.addEventListener('submit', handleSubmit);