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

	//CONTROLE DO SLIDE

	var action = setInterval(slideGo, 3000);

	$('.slide_nav.go').on('click', function(){
		clearInterval(action);
		slideGo();
	});

	$('.slide_nav.back').on('click', function(){
		clearInterval(action);
		slideBack();
	});

	function slideGo(){
		var existe_proximo = $('.slide_item.first').next().size();
		if(existe_proximo){
			$('.slide_item.first').fadeOut(400, function(){
				$(this).removeClass('first').next().fadeIn().addClass('first');
			});
		} else {
			$('.slide_item.first').fadeOut(400, function(){
				$('.slide_item').removeClass('first');
				$('.slide_item:eq(0)').fadeIn().addClass('first');
			});
		}
	}

	function slideBack(){
		var existe_anterior = $('.slide_item.first').index();
		var quantidade = $('.slide_item').length;

		if(existe_anterior >= quantidade){
			$('.slide_item.first').fadeOut(400, function(){
				$(this).removeClass('first').prev().fadeIn().addClass('first');
			});
		} else {
			$('.slide_item.first').fadeOut(400, function(){
				$('.slide_item').removeClass('first');
				$('.slide_item:last-of-type').fadeIn().addClass('first');
			});
		}
	}
})