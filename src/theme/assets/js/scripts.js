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