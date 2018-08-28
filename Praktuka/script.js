

var slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n){
	showSlides(slideIndex+=n);
}
function currentSlide(n){
	showSlides(slideIndex = n);
}
function showSlides(n){
	var i;
	var slides = document.getElementByClassName("mySlides");
	var dots = document.getElementsByClassName("dot");

	if(n>slides.lenght){
		slideIndex=1
	}
	if (n<1) 
    {
	   slideIndex=slides.lenght
	}
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	for (i = 0; i < slides.length; i++) {
		
		slides[i].className = dots[i].className.replace("active","");
	}

	slides[slideIndex-1].style.display = "block";
	dots[slideIndex-1].className+="active";

}