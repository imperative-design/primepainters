

$('document').ready(function($){ 
    init();
});

function init(){
    bindEvents();
    $('.testimonials-wrapper').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        focusOnSelect: true,
        // appendArrows: '.case-studies',
        dots: true,
		responsive: [
            {
            breakpoint: 768,
            settings: {
                arrows: false,
                dots: false,
                slidesToShow: 2
            }
            },
            {
            breakpoint: 480,
            settings: {
                arrows: false,
                dots: false,
                slidesToShow: 1
            }
            }
        ]
	});
}

function bindEvents(){
    console.log('binding events')
    $('.hero .menu > li').on('click', animateServiceBoard);
    
    $('.nav-toggle').off('click');
    $('.nav-toggle').on('click', toggleNav);
}

function toggleNav(evt){
    console.log('toggling nav');
    if(typeof evt !== 'undefined') evt.preventDefault();
    $('.nav').toggleClass('active');
    return false;
}

export default function animateServiceBoard(evt){
    var targetSelector  = evt.currentTarget.querySelector('.label').innerText.toLocaleLowerCase().replace(' ', ''); //interiors
    var $targetSlide    = $(`#${targetSelector}.slide`); //$('#interiors.slide')
    var $nextTransition;

    if($('.slide.active').length == 0) { 
        $nextTransition = $('.service-board .transition').eq(0);
    } else {
        $nextTransition = ($('.slide.active').next('.transition').length > 0) ? $('.slide.active').next('.transition') : $('.slide.active').prev('.transition');
        $('.slide.active').removeClass('active');
    }


    $('.container').scrollTo($nextTransition, {
        duration: 500,
        onAfter:() => {
            console.log('$targetSlide: ', $targetSlide);
            $targetSlide.addClass('active');
            window.setTimeout(()=>{
                $('.container').scrollTo($targetSlide, 500);
            }, 2000);
        }
    }); 
}

// export default animateServiceBoard