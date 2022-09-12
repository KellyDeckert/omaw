var ready = (callback) => {
	if (document.readyState != "loading") callback();
	else document.addEventListener("DOMContentLoaded", callback);
}

ready(() => { 
	console.log('hello from scripts.js!');
	initMobileFooterAccordions();
});

function initMobileFooterAccordions(){
	var accordion = document.querySelectorAll('footer .menu li');
	
	for (var i = 0; i<accordion.length; i++){
        accordion[i].addEventListener("click", (e) => { accordionClick(e) });
    }

	var accordionClick = (eventHappened) => {
		eventHappened.preventDefault();
		var targetClicked = event.currentTarget;
			if(!targetClicked.classList.contains('open')){
				targetClicked.classList.add('open');
			} else {
				targetClicked.classList.remove('open');
			}
		var submenu = targetClicked.children[1];
		if ( submenu.style.maxHeight ){
			console.log( "current height: " + submenu.style.maxHeight );
			submenu.style.maxHeight = null;
		} else {
			var allSubMenus = document.querySelectorAll('footer .menu .sub-menu-wrapper');
			console.log( allSubMenus );
			for (var i = 0; i < allSubMenus.length; i++){
				console.log("current menu: " + allSubMenus[i]);
				var toggle = document.querySelectorAll('footer .menu .menu-item-has-children');
				if (allSubMenus[i].style.maxHeight){
						console.log("there is a menu already open");
					allSubMenus[i].style.maxHeight = null;
					toggle[i].classList.remove('open');
				}
			}
			submenu.style.maxHeight = submenu.scrollHeight + "px";
		}
	}
}