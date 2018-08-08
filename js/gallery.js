function Gallery(configuration) {
	var self = this;
	self.currentSlide = {
		source: null,
		caption: null
	};
	
	self.construct = function() {
		self.startSlideshowFromHash();
		self.bindEvents();
	};
	
	self.startSlideshowFromHash = function() {
		if (document.location.hash) {
			var slide = $(configuration.elements.thumbnailAnchor)[document.location.hash.slice(1) - 1];
			if (slide) {
				self.startSlideshow(slide);
			}
		}
	};
	
	self.bindEvents = function() {
		$(configuration.elements.thumbnailAnchor).click(function(event) {
			self.startSlideshow(this);
			event.preventDefault();
		});
		$(configuration.elements.previousAnchor).click(function(event) {
			self.showPreviousSlide();
			event.preventDefault();
		});
		$(configuration.elements.nextAnchor).click(function(event) {
			self.showNextSlide();
			event.preventDefault();
		});
		$(configuration.elements.closeAnchor).click(function(event) {
			self.endSlideshow();
			event.preventDefault();
		});
		
		$(document).keydown(function(event) {
			switch (event.which) {
				case 13:
					self.startSlideshow(null);
					break;
				case 37:
					self.showPreviousSlide();
					break;
				case 39:
					self.showNextSlide();
					break;
				case 27:
					self.endSlideshow();
					break;
				default:
					return;
			}
		});
	};
	
	self.startSlideshow = function(firstSlide) {
		self.changeSlide(firstSlide);
		$(configuration.elements.slideshow).show();
	};
	
	self.changeSlide = function(slide) {
		if (slide == null) {
			slide = $(configuration.elements.thumbnailAnchor).first();
		}		
		self.currentSlide.source = $(slide).attr('href');
		self.currentSlide.caption = $(slide).attr('title');
		var image = $('<img>').attr('src', self.currentSlide.source).attr('title', self.currentSlide.caption).attr('alt', self.currentSlide.caption);
		$(configuration.elements.currentImage).html(image);
		$(configuration.elements.currentCaption).html(self.currentSlide.caption);
		self.changeHash($('a[href="' + self.currentSlide.source + '"]').parent().index() + 1);
	};
	
	self.changeHash = function(hash) {
		if (hash == null) {
			history.pushState('', document.title, window.location.pathname);
		} else {
			document.location.hash = hash;
		}
	};
	
	self.showPreviousSlide = function() {
		var currentSlide = $(configuration.elements.thumbnailAnchor + '[href="' + self.currentSlide.source + '"]');
		var previousSlide = currentSlide.parent().prev().children().first();
		if ($(previousSlide).length == 0) {
			previousSlide = currentSlide.parent().siblings().last().children().first();
		}
		self.changeSlide(previousSlide);
	};
	
	self.showNextSlide = function() {
		var currentSlide = $(configuration.elements.thumbnailAnchor + '[href="' + self.currentSlide.source + '"]');
		var nextSlide = currentSlide.parent().next().children().first();
		if ($(nextSlide).length == 0) {
			nextSlide = currentSlide.parent().siblings().first().children().first();
		}
		self.changeSlide(nextSlide);
	};
	
	self.endSlideshow = function() {
		$(configuration.elements.slideshow).hide();
		self.changeHash(null);
	};
	
	self.construct();
}