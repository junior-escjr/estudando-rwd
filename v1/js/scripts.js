var funcoes = {
	init: function(){
		this.menuMobile();
	},

	menuMobile: function(){
		$('.mobmenu').on('click', function(){
			$('.main_header_menu .content').slideToggle();
			$(this).toggleClass('active');
			return false;
		});
	}
}

$(function(){
	funcoes.init();
});