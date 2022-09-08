jQuery(function() {
	var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		// var links = this.el.find('.link');
        var links = this.el.find('.menu-item-has-children .menu-item-link');
		// Evento
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = jQuery(this),
			$next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open');

		if (!e.data.multiple) {
			$el.find('.sub-menu-wrapper').not($next).slideUp().parent().removeClass('open');
		};
        // console.log($this.parent());
        // console.log($this);
	}	

	// var accordion = new Accordion($('#accordion'), false);
    var accordion = new Accordion(jQuery('.footer__nav .menu'), false);
});