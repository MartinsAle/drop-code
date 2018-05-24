jQuery(document).ready(function($) {

	// CODIGO PARA ARANCORAS DENTRO DA PAGINA (SMOOTH SCROLL)
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});


	// CODIGO PARA ATRIBUIR MARCAÇÃO DA PAGINA ATUAL NO ITEM DO MENU
	var url = window.location.href;
    var activePage = url;
    $('.nav-item a').each(function () { //ADICIONAR CLASSE QUE ESTA NA LI DO LINK DO MENU
        var linkPage = this.href;

        if (activePage == linkPage) {
            $(this).closest("li").addClass("active"); //ADICIONAR CLASSE QUE O TEMPLATE UTILIZA PARA MARCAR O MENU
        }
    });
});