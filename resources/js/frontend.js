
/* 01. Handle Home Content Height
------------------------------------------------ */
var handleHomeContentHeight = function() {
    $('#home').height($(window).height());
    
    $(window).on('resize', function() {
   		$('#home').height($(window).height());

    });
};


/* 02. Handle Header Navigation State
------------------------------------------------ */
var handleHeaderNavigationState = function() {
    $(window).on('scroll load', function() {
        if ($('#header').attr('data-state-change') != 'disabled') {
            var totalScroll = $(window).scrollTop();
            var headerHeight = $('#header').height();
            if (totalScroll >= headerHeight) {
                $('#header').addClass('navbar-small');
            } else {
                $('#header').removeClass('navbar-small');
            }
        }
    });
};


/* 03. Handle Commas to Number
------------------------------------------------ */
var handleAddCommasToNumber = function(value) {
    return value.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
};


/* 04. Handle Page Container Show
------------------------------------------------ */
var handlePageContainerShow = function() {
    var bootstrapVersion = handleCheckBootstrapVersion();
    var showClass = '';
    
    if (bootstrapVersion >= 3 && bootstrapVersion < 4) {
    	showClass = 'in';
	} else if (bootstrapVersion >= 4 && bootstrapVersion < 5) {
    	showClass = 'show';
	}
    $('#page-container').addClass(showClass);
};


/* 05. Handle Pace Page Loading Plugins
------------------------------------------------ */
var handlePaceLoadingPlugins = function() {
    Pace.on('hide', function(){
        $('.pace').addClass('hide');
    });
};


/* 06. Handle Page Scroll Content Animation
------------------------------------------------ */
var handlePageScrollContentAnimation = function() {
    $('[data-scrollview="true"]').each(function() {
        var myElement = $(this);
        var elementWatcher = scrollMonitor.create( myElement, 60 );

        elementWatcher.enterViewport(function() {
            $(myElement).find('[data-animation=true]').each(function() {
                var targetAnimation = $(this).attr('data-animation-type');
                var targetElement = $(this);
                if (!$(targetElement).hasClass('contentAnimated')) {
                    if (targetAnimation == 'number') {
                        var finalNumber = parseInt($(targetElement).attr('data-final-number')   );
                        $({animateNumber: 0}).animate({animateNumber: finalNumber}, {
                            duration: 1000,
                            easing:'swing',
                            step: function() {
                                var displayNumber = handleAddCommasToNumber(Math.ceil(this.animateNumber));
                                $(targetElement).text(displayNumber).addClass('contentAnimated');
                            }
                        });
                    } else {
                        $(this).addClass(targetAnimation + ' contentAnimated');
                        setTimeout(function() {
                            $(targetElement).addClass('finishAnimated');
                        }, 1500);
                    }
                }
            });
        });
    });
};


/* 07. Handle Header Scroll To Action
------------------------------------------------ */
var handleHeaderScrollToAction = function() {
    $(document).on('click', '[data-click=scroll-to-target]', function(e) {
        //e.preventDefault();
        //e.stopPropagation();
        var target = ($(this).attr('data-scroll-target')) ? $(this).attr('data-scroll-target') : '';
        var target = (!target && $(this).attr('data-target')) ? $(this).attr('data-target') : target;
        var headerHeight = 0;       // WAS 50!
        $('html, body').animate({
            scrollTop: $(target).offset().top - headerHeight
        }, 500);
        
        if ($(this).attr('data-toggle') == 'dropdown') {
            var targetLi = $(this).closest('li.dropdown');
            if ($(targetLi).hasClass('open')) {
                $(targetLi).removeClass('open');
            } else {
                $(targetLi).addClass('open');
            }
        }
    });
    $(document).click(function(e) {
        if (!e.isPropagationStopped()) {
            $('.dropdown.open').removeClass('open'); 
        }
    });
};


/* 08. Handle Tooltip Activation
------------------------------------------------ */
var handleTooltipActivation = function() {
    if ($('[data-toggle=tooltip]').length !== 0) {
        $('[data-toggle=tooltip]').tooltip();
    }
};

/* 11. Handle Paroller
------------------------------------------------ */

var handleParoller = function() {
	if (typeof $.fn.paroller !== 'undefined') {
		if ($('[data-paroller="true"]').length !== 0) {
			$('[data-paroller="true"]').paroller();
		}
	}
};


/* 12. Handle Check Bootstrap Version
------------------------------------------------ */
var handleCheckBootstrapVersion = function() {
	return parseInt($.fn.tooltip.Constructor.VERSION);
};

/* 14. Handle Product Image
------------------------------------------------ */
var handleProductImage = function() {
    $(document).on('click', '[data-click="show-main-image"]', function(e) {
        e.preventDefault();

        var targetContainer = '[data-id="main-image"]';
        var targetImage = '<img src="'+ $(this).attr('data-url') +'" />';
        var targetLi = $(this).closest('li');

        $(targetContainer).html(targetImage);
        $(targetLi).addClass('active');
        $('[data-click="show-main-image"]').closest('li').not(targetLi).removeClass('active');
    });
};

/* Application Controller
------------------------------------------------ */
var Frontend = function () {
	"use strict";
	
	return {
		//main function
		init: function () {
		    handleHomeContentHeight();
		    handleHeaderNavigationState();
		    handlePageContainerShow();
		    handlePaceLoadingPlugins();
		    handlePageScrollContentAnimation();
		    handleHeaderScrollToAction();
            handleTooltipActivation();
            handleParoller();
            handleProductImage();
		}
  };
}();


