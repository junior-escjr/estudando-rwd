$(function(){

	Shadowbox.init();

	//CONTROLE DO MENU MOBILE
	$('.mobile_action').on('click', function(){
		var m_mobile = $(this).hasClass('active');
		if(!m_mobile){
			$(this).addClass('active');
			$('.main_header_nav').animate({'left' : 0}, 300);
		} else {
			$(this).removeClass('active');
			$('.main_header_nav').animate({'left' : '-100%'}, 300);
		}
	});
})