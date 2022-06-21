$(document).ready(main);
console.log("menu");
var contador = 1;

function main () {
	$('.menu_bar').click(function(){
		if (contador == 1) {
			$('nav').animate({
				left: '0'
			});
			contador = 0;
            aux();
            
		} else {
			contador = 1;
			$('nav').animate({
				left: '-100%'
			});
            aux2()
		}
	});

	// Mostramos y ocultamos submenus
	$('.submenu').click(function(){
		$(this).children('.children').slideToggle();
	});
}

function aux(){
    document.getElementById('padreCarrusel').style.display = "none"
}
function aux2(){
    document.getElementById('padreCarrusel').style.display = "block"
}