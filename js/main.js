$(document).ready(function(){



    // MENU JS

		var burguer = $('.cabecera-burguer');
		var paloUno = $('.cabecera-burguer > div:first-child');
		var paloTres = $('.cabecera-burguer > div:last-child');
		var menu = $('.cabecera-nav');
		var enlace = $('.menu-item');


		burguer.click(function(){
			paloUno.toggleClass('palouno');
			paloTres.toggleClass('palotres');
			menu.toggleClass('cabecera-nav-abierto');
		})

		enlace.click(function(){
			paloUno.toggleClass('palouno');
			paloTres.toggleClass('palotres');
			menu.toggleClass('cabecera-nav-abierto');
		})

	
		
	//QUITAR SCROLL DESPLEGABLE

		var body = $('body');
		var burguer = $('.cabecera-burguer');

		burguer.click(function(){
			body.toggleClass('overflow');
		})

		enlace.click(function(){
			body.toggleClass('overflow');
		})



    

        

});