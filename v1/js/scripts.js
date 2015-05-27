var funcoes = {
	init: function(){
		this.menuMobile();
		this.verificarTamanhoDaImagem();
	},

	menuMobile: function(){
		$('.mobmenu').on('click', function(){
			$('.main_header_menu .content').slideToggle();
			$(this).toggleClass('active');
			return false;
		});
	},

	verificarTamanhoDaImagem: function(){
		$('.debug').each(function(){
			$(this).after('<p style="color: #fff; background: #333; padding: 10px;">'+$(this).width()+'px</p>');
		});
	}
}

$(function(){
	funcoes.init();
});