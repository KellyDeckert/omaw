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
	autoCloseMobile(); // reset menu if page is reloaded with menu open
	initMobileFooterAccordions();
	lockMobileScroll();
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

function lockMobileScroll(){

	var mobileMenuToggle = document.querySelector('#toggle-mobile-menu');

	mobileMenuToggle.addEventListener("click", (e) => { mobileMenuClick(e) });

	var mobileMenuClick = (eventHappened) => {
		console.log('MOBILE TOGGLE --> CLICKED!');
		let body = document.querySelector('body');
		if(!body.classList.contains('mobile-menu-open')){
			body.classList.add('mobile-menu-open');
			console.log('MOBILE MENU --> OPENING');
		} else {
			body.classList.remove('mobile-menu-open');
			console.log('MOBILE MENU --> CLOSING');
		}
	}

}

function autoCloseMobile(){
	var mobileMenuToggle = document.querySelector('#toggle-mobile-menu');
	mobileMenuToggle.checked = false;
}

// function initMobileDrawer(){

// 	const listEl = document.querySelector('.mdc-drawer .mdc-list');
// 	const mainContentEl = document.querySelector('.main-content');

// 	listEl.addEventListener('click', (event) => {
// 		drawer.open = false;
// 	});

// 	document.body.addEventListener('MDCDrawer:closed', () => {
// 		mainContentEl.querySelector('input, button').focus();
// 	});
// }


/* Add animations to Gravity Forms BEFORE init 
-- Need to fix, the AOS init isn't firing these even though they are being added */
// if(document.querySelector('.gform_wrapper')){
// 	let form = document.querySelector('.gform_wrapper .gform_fields');
// 	let fieldRows = form.querySelectorAll('.gfield');
// 	fieldRows.forEach(function( row, index) {
// 		row.setAttribute('data-aos','smooth-slide-left');
// 		row.setAttribute('data-aos-delay','550');
// 		row.setAttribute('data-aos-duration','450');
// 		row.setAttribute('data-aos-easing','cubic');
// 	});
// 	let submitRow = document.querySelector('.gform_wrapper .gform_footer');
// 		submitRow.setAttribute('data-aos','smooth-slide-up');
// 		submitRow.setAttribute('data-aos-delay','550');
// 		submitRow.setAttribute('data-aos-duration','450');
// 		submitRow.setAttribute('data-aos-easing','cubic');
// }

/* AOS animations */
var isIE11 = !!window.MSInputMethodContext && !!document.documentMode;
AOS.init({
    delay: 0,
    disable: window.innerWidth < 1280 || isIE11,
    duration: 350,
    easing: 'ease-in-out',
    offset: 100
});

window.addEventListener('resize', function () {
    AOS.refresh();
});




/* HERO */

// get animated subjects and its items
var animatedSubjects = document.querySelector('.hero__animated-subjects');
var animatedSubjectItems = document.querySelectorAll('.hero__animated-subject');
// if found, animate
if (animatedSubjects && animatedSubjectItems) {
    // get all items into array
    var animatedSubjectsArray = Array.from(animatedSubjectItems);
    // get random index for initial load
    let subHeadingsIndex = Math.floor(Math.random()*animatedSubjectsArray.length);
    setTimeout(() => {
        // reveal initial immediately
        animatedSubjectsArray[subHeadingsIndex].classList.add('hero__animated-subject--active');
        // change slide every 5 seconds
        var subHeadingsInterval = setInterval(() => {
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


/* CONTENT SLIDER */
var contentSliderElement = document.querySelector('.content-slider__slides');
var contentSliderWrapper = document.querySelector('.content-slider__slides .swiper-wrapper');
var contentSliderPagination = document.querySelector('.content-slider__slides .swiper-pagination');
if( contentSliderElement ){
	var contentSlider = new Swiper(".content-slider__slides", {
		direction: 'vertical',
		updateOnWindowResize: true,
		pagination: {
			el: ".swiper-pagination.content-slider__pagination",
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
	contentSlider.on('slideChange',function(){
		if(contentSliderPagination){
			contentSliderPagination.setAttribute('data-index',contentSlider.activeIndex + 1)
		}
	});	
	window.addEventListener("resize",debounce(function(e){
		if( contentSliderWrapper ){
			contentSliderWrapper.style.removeProperty('height');	
		}
		contentSlider.update();
	}));
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
			568: {
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
function initCardSlider() {
  if (window.innerWidth < 768) {
    if (!init) {
      init = true;
      cardSlider = new Swiper(".swiper.cards.mobile", {
        direction: "horizontal",
        slidesPerView: "auto",
		autoHeight: false,
        navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
      });
    }
  } else if (init) {
    // mobileCardsSlider.destroy();
    init = false;
  }
}
if(mobileCardsSlider){
	initCardSlider();
}
window.addEventListener("resize", initCardSlider);




/* CHARTS */

// chart configuration
var charts = {
    percentage : {
        delay : 500,
        interval : 200,
        selector : '.percentage-list-chart-canvas',
        canvasSelector : 'percentage-list-chart',
        config : {
            type: 'doughnut',
            data: {
                datasets: [{
                    backgroundColor: ['rgb(0, 0, 0)', 'rgba(255, 255, 255,0)'],
                    borderWidth: [0, 0]
                }],
            },
            options: {
                plugins: {
                    legend: {
                        display: false,
                    },
                    tooltip: {
                        enabled: false,
                    }
                },
                layout: {
                    padding: 0
                },
                cutout: '86.6%',
                animation: {
                    duration: 2500
                }
            }
        },
        color: index => {
            return 'rgb(254, 202, 48)';
        }
    }
}

// adds or removes the chart animation
let chartsInitialized = false;
const manageCharts = (type,chart) => {

    const canvasElements = Array.from(document.querySelectorAll(charts[chart].selector));
    if( canvasElements.length > 0){

        if( type == 'add' && chartsInitialized == false){
            let delay = charts[chart].delay;
            canvasElements.forEach((canvas,index) => {     
                const canvasWrapper = canvas.parentElement; 
                const canvasItem = canvasWrapper.parentElement;           
                setTimeout(()=>{
                    const thisChartValue = canvas.dataset.value;
                    const adjIndex = index + 1;
                    const itemColor = charts[chart].color(adjIndex);
                    charts[chart].config.data.datasets[0].data = [thisChartValue, 100 - thisChartValue];
                    charts[chart].config.data.datasets[0].backgroundColor[0] = itemColor;                    
                    const thisChart = new Chart(canvas,charts[chart].config);
                    canvasItem.classList.add('animate');
                },delay);
                delay += charts[chart].interval;
            });
            chartsInitialized = true; 
        }

        if( type == 'remove'){
            canvasElements.forEach((canvas,index) => { 
                const canvasWrapper = canvas.parentElement;
                const canvasValue = canvas.dataset.value;
                const canvasKey = canvas.dataset.key;
                if(canvasWrapper){
                    const canvasItem = canvasWrapper.parentElement;
                    canvasItem.classList.remove('animate');
                    canvasWrapper.removeChild(canvas);
                    let newCanvas = document.createElement('canvas');
                    newCanvas.id = charts[chart].canvasSelector+'--'+canvasKey;
                    newCanvas.className = charts[chart].canvasSelector+'-canvas';
                    newCanvas.dataset.value = canvasValue;
                    newCanvas.dataset.key = canvasKey;
                    canvasWrapper.appendChild(newCanvas);
                }
            });
            chartsInitialized = false; 
        }
    }

}

// init percentages-list charts when they come into view
var percentageLists = Array.from(document.querySelectorAll('.percentages-list'));
if(percentageLists.length > 0){
	percentageLists.forEach(function(percentageList){
		var listId = percentageList.id;
		var downWaypoint = new Waypoint({
			element: document.getElementById(listId),
			handler: function(direction) {
				if (direction == 'down') {
					// console.log('Scrolled down to: ' + listId);
					manageCharts('add','percentage');
				}
			},
			offset: '85%'
		})	
		var upWaypoint = new Waypoint({
			element: document.getElementById(listId),
			handler: function(direction) {
				if (direction == 'up') {
					// console.log('Scrolled up to: ' + listId);
					manageCharts('remove','percentage');
				}
			},
			offset: '100%'
		})	
	});
}
/* VALUE CARDS SLIDER */
var valueCardsSlider = document.querySelector('.swiper.scroll-cards.mobile');

var init = false;

function initValueCardSlider() {
	if (window.innerWidth < 768) {
		console.log('value card slider ON');
	  if (!init) {
		init = true;
		valueSlider = new Swiper(".swiper.scroll-cards.mobile", {
		  direction: "horizontal",
		  slidesPerView: "auto",
		  autoHeight: false,
		  navigation: {
			  nextEl: ".swiper-button-next",
			  prevEl: ".swiper-button-prev",
		  },
		});
	  }
	} else if (init) {
		// valueCardsSlider.destroy();
	  	init = false;
	}
  }
  
  if(valueCardsSlider){
	  initValueCardSlider();
  }
  window.addEventListener("resize", initValueCardSlider);


/* DYNAMIC JUMP LINK MENU */

var jumpMenu = document.querySelector('#quick-links-menu');

var init = false;

function initJumpLinkMenu() {
	if (!init) {
		init = true;

		var sections = document.querySelectorAll('section[data-quicklink-name]');
		var menu = jumpMenu.querySelector('.menu');
		var mobile_menu = jumpMenu.querySelector('.mobile-quick-menu');
		var menu_links = '';
		var mobile_links = '';
		var section_name;
		
		sections.forEach( function (section, index) {

			var display = section.dataset.quicklinkOn;
			
			if(display && display == true){
				
				if(section.dataset.quicklinkName){
					section_name = section.dataset.quicklinkName;
				} else {
					section_name = section.id.replace(/[^a-zA-Z ]/g, " ");
				}
				var menu_item = '<li class="menu-item" id="' + section.id + "-" + (index + 1) + '"><a href="#' + section.id + '" class="menu-item-anchor nav__link">' + section_name + '</a></li>';
				var mobile_menu_item = '<li class="mdc-list-item mdc-ripple-upgraded" data-value="' + section.id + '"><a class="mdc-list-item__text" href="#' + section.id + '">' + section_name + '</a></li>';
				
				menu_links += menu_item;
				mobile_links += mobile_menu_item;
				
			}


		});

		menu.innerHTML = menu_links;
		mobile_menu.innerHTML = mobile_links;
	}
}

if (jumpMenu) {
	initJumpLinkMenu();
}


/* OVERLAYS */

// overlay links
var overlayLinks = Array.from(document.querySelectorAll('[data-overlay-link]'));
if(overlayLinks.length > 0){
	
	overlayLinks.forEach(function(overlayLink){
		overlayLink.addEventListener('click',function(event){
			event.preventDefault();
			loadOverlay(overlayLink);
		});
	});
}

// overlay functions
function openOverlay(){
	document.body.classList.add('open-overlay');
}
function closeOverlay() {
	document.body.classList.remove('open-overlay');
	jQuery('#overlay-content').html('');
}
function initOverlayClose(){
	var overlayClose = document.getElementById('overlay-close');
	if(overlayClose){
		overlayClose.addEventListener('click',function(){
			closeOverlay();
		});
	}
}
function loadOverlay(overlayLink){
	var overlayType = overlayLink.dataset.overlayType;
	switch(overlayType){
		case 'person':
			overlayHtml = loadPersonData(overlayLink);
		break;
		case 'video':
			overlayHtml = setOverlayHtml('video',overlayLink);
		break;
	}
}
function setOverlayHtml(type,data) {
	var overlayContent = document.getElementById('overlay-content');
	var overlayHtml = '';
	switch(type){
		case 'person':
			overlayHtml = getPersonHtml(data);
		break;
		case 'video':
			overlayHtml = getVideoHtml(data);
		break;
	}
	overlayContent.innerHTML = overlayHtml;
	initOverlayClose();
	openOverlay();
}

// person overlays
function loadPersonData(overlayLink) {
	var overlayPostType = overlayLink.dataset.overlayPostType;
	var overlayPostId = overlayLink.dataset.overlayPostId;	
	jQuery.ajax({
		method: "POST",
		url: siteUrl + '/wp-json/endpoints/person',
		dataType: 'json',
		data: {
			'type' : overlayPostType,
			'id' : overlayPostId
		},
		complete: function (data) {
			setOverlayHtml('person',JSON.parse(data.responseText));
		}
	});
}
function getPersonHtml(data){
	return 	`
	<div class="overlay__box overlay__box--content">
		<div class="overlay__header">
			<button id="overlay-close" class="overlay__close">
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 34 34" style="enable-background:new 0 0 34 34;" xml:space="preserve"><path class="st0" d="M19.2,17L33.7,2.5c0.4-0.4,0.4-1,0-1.4l-0.8-0.8c0,0,0,0,0,0c-0.4-0.4-1-0.4-1.4,0L17,14.8L2.5,0.3c0,0,0,0,0,0c-0.4-0.4-1-0.4-1.4,0L0.3,1.1c-0.4,0.4-0.4,1,0,1.4L14.8,17L0.3,31.5c-0.4,0.4-0.4,1,0,1.4l0.8,0.8c0,0,0,0,0,0c0.4,0.4,1,0.4,1.4,0L17,19.2l14.5,14.5c0,0,0,0,0,0c0.4,0.4,1,0.4,1.4,0l0.8-0.8c0.4-0.4,0.4-1,0-1.4L19.2,17z"/></svg>
			</button>
		</div>
		<div class="overlay__profile">
			${ data.image ? `<img  class="overlay__image"src="${data.image.medium}" alt="${data.image.alt}"/>` : ``}
			${ data.title ? `<h3 class="overlay__title"><strong>${data.title}</strong></h3>` : ``}
			${ data.custom_fields.title ? `<h4 class="overlay__position">${data.custom_fields.title}</h4>` : ``}
			${ data.custom_fields.linkedin || data.custom_fields.twitter ? `
			<ul class="social-media-list">
				${ data.custom_fields.linkedin ? `
				<li class="social-media-list-item">
            		<a class="social-media-link" href="${data.custom_fields.linkedin}" target="_blank">
						<img class="social-media-icon" src="${siteUrl}/wp-content/themes/one-mind-at-work/assets/img/linkedIn.svg" alt="">
					</a>
				</li>` : `` }
				${ data.custom_fields.twitter ? `
				<li class="social-media-list-item">
            		<a class="social-media-link" href="${data.custom_fields.twitter}" target="_blank">
						<img class="social-media-icon" src="${siteUrl}/wp-content/themes/one-mind-at-work/assets/img/twitter.svg" alt="">
					</a>
				</li>` : `` }
			</ul>
			` : ``}
		</div>
		<div class="overlay__bio">
			${ data.custom_fields.quote ? `<h4 class="overlay__quote quote">${data.custom_fields.quote}</h4>` : ``}
			${ data.custom_fields.description ? `<h5 class="overlay__description">${data.custom_fields.description}</h5>` : ``}
			${ data.content ? `<div class="overlay__content">${data.content}</div>` : ``}
		</div>
	</div>
	`;
}


function getVideoHtml(overlayLink){
	var videoType = overlayLink.dataset.videoType;
	var videoYoutubeId = overlayLink.dataset.youtubeId;
	var videoMp4 = overlayLink.dataset.videoMp4;
	return 	`
	<div class="overlay__box overlay__box--video">
		<div class="overlay__header">
			<button id="overlay-close" class="overlay__close">
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 34 34" style="enable-background:new 0 0 34 34;" xml:space="preserve"><path class="st0" d="M19.2,17L33.7,2.5c0.4-0.4,0.4-1,0-1.4l-0.8-0.8c0,0,0,0,0,0c-0.4-0.4-1-0.4-1.4,0L17,14.8L2.5,0.3c0,0,0,0,0,0c-0.4-0.4-1-0.4-1.4,0L0.3,1.1c-0.4,0.4-0.4,1,0,1.4L14.8,17L0.3,31.5c-0.4,0.4-0.4,1,0,1.4l0.8,0.8c0,0,0,0,0,0c0.4,0.4,1,0.4,1.4,0L17,19.2l14.5,14.5c0,0,0,0,0,0c0.4,0.4,1,0.4,1.4,0l0.8-0.8c0.4-0.4,0.4-1,0-1.4L19.2,17z"/></svg>
			</button>
		</div>
		<div class="overlay__main">
			<div class="responsive-video-wrapper">
				${videoType == 'youtube' && videoYoutubeId ? `<iframe src="https://www.youtube.com/embed/${videoYoutubeId}?autoplay=1&controls=2&modestbranding=1&rel=0" frameborder="0" allowfullscreen></iframe>` : ``}
				${videoType == 'upload' ? `
				<video class="overlay__video" controls autoplay="autoplay">
                	${videoMp4 ? `<source src="${videoMp4}" type="video/mp4">` : ``}
            	</video>
				` : ``}
			</div>	
		<div>
	</div>
	`;
}




/* TABS */

var tabbedSections = Array.from(document.querySelectorAll('.tabs'));
if(tabbedSections.length > 0){
	tabbedSections.forEach(function(tabbedSection){
		// setup nav
		initTabbedSectionNav(tabbedSection);
	});
}

function initTabbedSectionNav(tabbedSection) {
	var tabbedSectionId = tabbedSection.id;
	var tabbedSectionButtons = Array.from(tabbedSection.querySelectorAll('.tabs__nav-tab-button, .tabs__nav-prev-button, .tabs__nav-next-button'));
	if(tabbedSectionButtons.length > 0){
		tabbedSectionButtons.forEach(function(tabbedSectionButton){
			tabbedSectionButton.addEventListener('click',function(event){
				setTabbedSectionIndex(tabbedSection,tabbedSectionButton.dataset.index);
			});
		});
	}
}

function setTabbedSectionIndex(section,index){
	var currentIndex = Number(section.dataset.index);
	var maxIndex = Number(section.dataset.maxIndex);
	if( index == 'prev'){
		index = currentIndex > 0 ? currentIndex - 1 : 0;
	} else if ( index == 'next'){
		index = currentIndex < maxIndex ? currentIndex + 1 : maxIndex;
	}
	section.dataset.index = index;
	setTabbedSectionTabs(section);
	setTabbedSectionButtons(section);
}

function setTabbedSectionTabs(section){
	var currentIndex = Number(section.dataset.index);
	var tabbedSectionsTabs =  Array.from(section.querySelectorAll('.tabs__tab'));
	if(tabbedSectionsTabs.length > 0){
		tabbedSectionsTabs.forEach(function(tab,index){
			if(index == currentIndex){
				tab.classList.add('tabs__tab--active');
			} else {
				tab.classList.remove('tabs__tab--active');
			}
		});
	}
}

function setTabbedSectionButtons(section){
	var currentIndex = Number(section.dataset.index);
	var maxIndex = Number(section.dataset.maxIndex);
	var tabbedSectionsButtons =  Array.from(section.querySelectorAll('.tabs__nav-tab-button'));
	if(tabbedSectionsButtons.length > 0){
		tabbedSectionsButtons.forEach(function(button,index){
			if(button.dataset.index == currentIndex){
				button.classList.add('tabs__nav-tab-button--active');
			} else {
				button.classList.remove('tabs__nav-tab-button--active');
			}
		});
	}
	var prevButton = section.querySelector('.tabs__nav-prev-button');
	var nextButton = section.querySelector('.tabs__nav-next-button');
	if(prevButton){
		currentIndex == 0 ? prevButton.classList.add('disabled') : prevButton.classList.remove('disabled') ;
	}
	if(nextButton){
		currentIndex == maxIndex ? nextButton.classList.add('disabled') : nextButton.classList.remove('disabled') ;
	}
}