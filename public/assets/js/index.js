$(document).ready(function() {
	$('input.input-float').keyup(function(event) {
		if ($(this).val()!="") {
			$(this).parent().addClass('active');
		}
	});
	$('input.input-float').on('focus',function(e) {
		$(this).parent().addClass('active');
	})
	$('input.input-float').on('blur',function(e) {
		if ($(this).val()!="") {
			return;
		}
		$(this).parent().removeClass('active');
	})
	$('input.input-float.date').on('blur',function(e) {
		if ($(this).val()!="") {
			return;
		}
		$(this).parent().removeClass('active');
	})
	$('.label-radio').on('click', function(e) {
		var name = $(this).children("input[type='radio']").attr('name');
		$('.label-radio').children("input[type='radio'][name='"+name+"']").parent().removeClass('selected');
		$(this).children("input[type='radio'][name='"+name+"']").prop( "checked", true );
		$(this).children("input[type='radio'][name='"+name+"']").parent().addClass('selected');
	});
	$('.btn-daftar').on('click', function(e) {
		e.preventDefault();
		$('#wrapper-modal').addClass('active')
		$('body').addClass('modal-open')
	});
	$('.btn-close').on('click', function(e) {
		e.preventDefault();
		$(this).parent().parent().parent().removeClass('active')
		$('body').removeClass('modal-open')
	});
	$('.btn-menu').on('click', function(event) {
		event.preventDefault();
		$('#menu').addClass('active')
		$('body').addClass('modal-open')
	});
	$('.btn-close-menu').on('click', function(event) {
		event.preventDefault();
		$('#menu').removeClass('active')
		$('body').removeClass('modal-open')
	});
	$(window).scroll( function(){
    
        $('.hideme.top').each( function(i){
            
            var bottom_of_object = $(this).offset().top + ($(this).outerHeight()/3*2) - 100;
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1','top':'0'},500);
                    
            }
            
        }); 
        $('.hideme').not('top').each( function(i){
            
            var bottom_of_object = $(this).offset().top + ($(this).outerHeight()/3*2) -100;
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},500);
                    
            }
            
        }); 
    
    });
});