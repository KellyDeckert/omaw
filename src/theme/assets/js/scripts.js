function debounce(func){
	var timer;
	return function(event){
	  if(timer) clearTimeout(timer);
	  timer = setTimeout(func,100,event);
	};
}

var ready = (callback) => {
	if (document.readyState != "loading") callback();
	else document.addEventListener("DOMContentLoaded", callback);
}

ready(() => { 
	console.log('hello from scripts.js!');
	initMobileFooterAccordions();
});

function initMobileFooterAccordions(){
	var accordion = document.querySelectorAll('footer .menu li.menu-item-has-children a');
	
	for (var i = 0; i<accordion.length; i++){
        accordion[i].addEventListener("click", (e) => { accordionClick(e) });
    }

	var accordionClick = (eventHappened) => {
		var targetClicked = event.currentTarget;
		var classes = targetClicked.parentElement.classList;
		var submenu = targetClicked.nextElementSibling;
		
		if(!classes.contains('open')){
			classes.add('open');
		} else {
			classes.remove('open');
		}

		if ( submenu && submenu.classList.contains('sub-menu-wrapper') ) {
			if ( submenu.style.maxHeight ){
				console.log( "current height: " + submenu.style.maxHeight );
				submenu.style.maxHeight = null;
			} else {

				// ->> TO FIX, AUTOCLOSE OPEN MENU WHEN DIFFERENT MENU IS CLICKED

				// var allSubMenus = document.querySelectorAll('footer .menu .sub-menu-wrapper');
				// console.log( allSubMenus );
				// for (var i = 0; i < allSubMenus.length; i++){
				// 	console.log("current menu: " + allSubMenus[i]);
				// 	var toggle = document.querySelectorAll('footer .menu .menu-item-has-children');
				// 	if (allSubMenus[i].style.maxHeight){
				// 			console.log("there is a menu already open");
				// 		allSubMenus[i].style.maxHeight = null;
				// 		toggle[i].classList.remove('open');
				// 	}
				// }

				submenu.style.maxHeight = submenu.scrollHeight + "px";
			}
		} else {
			console.log('something was clicked but it was not the accordion parent');
		}
	}
}




/* HERO */

// get animated subjects and its items
const animatedSubjects = document.querySelector('.hero__animated-subjects');
const animatedSubjectItems = document.querySelectorAll('.hero__animated-subject');
// if found, animate
if (animatedSubjects && animatedSubjectItems) {
    // get all items into array
    const animatedSubjectsArray = Array.from(animatedSubjectItems);
    // get random index for initial load
    let subHeadingsIndex = Math.floor(Math.random()*animatedSubjectsArray.length);
    setTimeout(() => {
        // reveal initial immediately
        animatedSubjectsArray[subHeadingsIndex].classList.add('hero__animated-subject--active');
        // change slide every 5 seconds
        const subHeadingsInterval = setInterval(() => {
			// increase index or reset to 0
			subHeadingsIndex < animatedSubjectsArray.length - 1 ? subHeadingsIndex++ : subHeadingsIndex = 0;
            // make next one active
           animatedSubjectsArray[subHeadingsIndex].classList.add('hero__animated-subject--active');
            // make others inactive after delay, to stagger the animation a bit
            setTimeout(() => {
                for (let index = 0; index < animatedSubjectsArray.length; index++) {
                    if (index != subHeadingsIndex) {
                     animatedSubjectsArray[index].classList.remove('hero__animated-subject--active');
                    }
                }
            }, 1000)
        }, 3500);
    }, 500)
}




/* QUOTES SLIDER */
var quoteSliderElement = document.querySelector('.quote-slider__slides');
var quoteSliderWrapper = document.querySelector('.quote-slider__slides .swiper-wrapper');
var quoteSliderPagination = document.querySelector('.quote-slider__slides .swiper-pagination');
if( quoteSliderElement ){
	var quoteSlider = new Swiper(".quote-slider__slides", {
		direction: 'vertical',
		updateOnWindowResize: true,
		pagination: {
		el: ".swiper-pagination",
		clickable: true,
			renderBullet: function (index, className) {
				return '<span data-pager="' + (index + 1) + '" class="bullet-pb-off ' + className + '">' + (index + 1) + '</span>';
			},
		},
		breakpoints: {
			0: {
				direction: 'horizontal',
				autoHeight: true
			},
			768: {
				direction: 'vertical',
			}
		},
	});
	quoteSlider.on('slideChange',function(){
		if(quoteSliderPagination){
			quoteSliderPagination.setAttribute('data-index',quoteSlider.activeIndex + 1)
		}
	});	
	window.addEventListener("resize",debounce(function(e){
		if( quoteSliderWrapper ){
			quoteSliderWrapper.style.removeProperty('height');	
		}
		quoteSlider.update();
	}));	
}



/* MOBILE CARDS SLIDER */
var mobileCardsSlider = document.querySelector('.swiper.cards.mobile');




var init = false;

function initCartSlider() {
  if (window.innerWidth < 768) {
    if (!init) {
      init = true;
      cardSlider = new Swiper(".swiper.cards.mobile", {
        direction: "horizontal",
        slidesPerView: "auto",
		autoHeight: true,
        navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
      });
    }
  } else if (init) {
    cardSlider.destroy();
    init = false;
  }
}

if(mobileCardsSlider){
	initCartSlider();
}
window.addEventListener("resize", initCartSlider);