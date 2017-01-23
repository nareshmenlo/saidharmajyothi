// JavaScript Document
jQuery(function () {

    jQuery('.headerScroll').click(function (event) {
        event.stopPropagation();
    });
    //TOP HEADER CLICK FUNCTION
    jQuery('.headerNav a.navigate').click(function (event) {
        event.stopPropagation();
        var getID = jQuery(this).attr('id');
        jQuery('#home_topbar .home_midAlign').stop().slideUp("fast");
        jQuery('.' + getID + '').stop().slideToggle("fast");
        jQuery(this).siblings().removeClass('active');
        jQuery(this).toggleClass('active');
    });
    jQuery('#home_topbar a.topbar_close').click(function (event) {
        event.stopPropagation();
        jQuery(this).parent().parent().slideToggle("fast");
        jQuery('.navigate').removeClass('active');
    });

    jQuery('#productAvail > ul:last > li').css({
        'margin-right': '0'
    });



    //NETWORK GALLERY FUNCTION

    var getLeft = parseInt(jQuery('.gall_logos').css('left'), 10); //GET GALLERY'S LEFT POSITION
    var minVal = -598; //SET MIN. VALUE DEPENDS ON THE GALLERY WIDTH
    var maxVal = 20;
    var t = null,
        tr = null;

    function right() {
        if (getLeft > minVal) {
            getLeft -= 2;
            jQuery('.gall_logos').css({
                left: getLeft + "px"
            });
        }
    }

    function left() {
        if (getLeft < maxVal) {
            getLeft += 2;
            jQuery('.gall_logos').css({
                left: getLeft + "px"
            });
        }
    }
    jQuery('#arrow_right').hover(function () {
        t = setInterval(right, 10);
    }, function () {
        clearInterval(t);
    });
    jQuery('#arrow_left').hover(function () {
        tr = setInterval(left, 10);
    }, function () {
        clearInterval(tr);
    });

    jQuery('.queryBtn').click(function () {
        var getRight = jQuery('#feedbackFrm').css('right');
        if (getRight != '-98px') {
            jQuery('#feedbackFrm').css({
                'z-index': '999'
            });
            jQuery('#feedbackFrm').stop().animate({
                right: '-98px'
            }, 'fast');
            jQuery('#offers').stop().animate({
                right: '-362px'
            }, 'fast').queue(function () {
                jQuery('#offers').css({
                    'z-index': '0'
                });
            });
        } else {
            jQuery('#feedbackFrm').stop().animate({
                right: '-368px'
            }, 'fast').queue(function () {
                jQuery('#feedbackFrm').css({
                    'z-index': '0'
                });
                removeQryConfirmDiv();
            });
        }
    });

    //HOVER EFFECT ON OFFERS BLOCKS BUTTON
    jQuery('.offersBG').hover(function () {
        jQuery(this).find('.offesBtn').addClass('blue');

    }, function () {
        jQuery(this).find('.offesBtn').removeClass('blue');
    });

    function getFunc() {
        if (jQuery('.queryConfirm').is(':visible')) {
            jQuery('#feedbackFrm').stop().animate({
                right: '-368px'
            }, 'fast').queue(function () {
                jQuery('#feedbackFrm').css({
                    'z-index': '0'
                });
                removeQryConfirmDiv();
            });
        } else {
            return false;
        }
    }

    jQuery('#contactForm #button').click(function () {
        setTimeout(getFunc, 5000);
    });

    jQuery('.offerBtn').click(function () {
        var getRight = jQuery('#offers').css('right');
        if (getRight != '-98px') {
            jQuery('#offers').css({
                'z-index': '999'
            });
            jQuery('#offers').stop().animate({
                right: '-98px'
            }, 'fast');
            jQuery('#feedbackFrm').stop().animate({
                right: '-368px'
            }, 'fast').queue(function () {
                jQuery('#feedbackFrm').css({
                    'z-index': '0'
                });
            });
        } else {
            jQuery('#offers').stop().animate({
                right: '-362px'
            }, 'fast').queue(function () {
                jQuery('#offers').css({
                    'z-index': '0'
                });
            });
        }
    });

    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 500) {
            jQuery('#scrollup').fadeIn();
        } else {
            jQuery('#scrollup').fadeOut();
        }

    });

    jQuery('#scrollup').click(function () {
        jQuery('html, body').stop().animate({
            scrollTop: 0
        }, 'slow');
    });

//--------------TESTIMONIALS NAVIGATION-----------------
    var testList = 1;
    var testWidth = 255;
    var testCount = jQuery('#testimonial_slider ul').length;
    
    var TotaltestCount = Math.ceil(testCount / testList);

    jQuery('.testi_rightNav').click(function () {
        var getLeftPos = parseInt(jQuery('#testimonial_slider').css('left'));
        getLeftPos = getLeftPos - 255;
        if (getLeftPos > (-testWidth * TotaltestCount)) {
            jQuery('#testimonial_slider').stop().animate({
                left: getLeftPos + 'px'
            }, 'fast');
        }

    });

    jQuery('.testi_leftNav').click(function () {
        var getLeftPos = parseInt(jQuery('#testimonial_slider').css('left'));
        getLeftPos = getLeftPos + 255;
        if (getLeftPos <= 0) {
            jQuery('#testimonial_slider').stop().animate({
                left: getLeftPos + 'px'
            }, 'fast');
        }
    });

//-------------MENUBAR DIV BLOCK HEIGHT----------
    jQuery('.ssnav').each(function () {
        var getHeight = jQuery(this).height();
        jQuery(this).find('ul').css({
            height: getHeight
        });        
    });


//--------TOOLTIP POSITION - CAREER ADVICE GOOGLE BOOKS-------
    window.bookTip_pos = function () {
        var win_width = jQuery('body').width() - 100;
        jQuery('.career_ebooks li').hover(function (e) {
            $this = jQuery(this).find('.ebook_details');
            var pos = $this.offset();
            var tooltip_width = parseInt($this.width());
            if (pos.left) {
                var posLeft = parseInt(pos.left) + tooltip_width;
                if (posLeft > win_width) {
                    $this.addClass('rightTip').removeClass('leftTip');
                }
            }
        });
    };



//---------Content Area secondary Tabs----------
    jQuery('.contentTabs li:first').addClass('active');
    jQuery('.contentTabBlk').find("div[class^='blk']").hide();
    jQuery("div[class^='blk']:first").show();
    jQuery('.contentTabs a').click(function (e) {
        e.preventDefault();
        var getID = jQuery(this).attr('id');
        jQuery('.' + getID + '').show().siblings().hide();
        jQuery(this).parent().addClass('active').siblings().removeClass('active');
    });
//------NAVIGATION VIEW ALL SEPERATOR------------
    jQuery('.ssnav').each(function () {
        jQuery(this).find('.viewAll:first').css({
            'border-top': '1px dashed #ccc'
        });
    });
    
    jQuery('.viewAll').click(function () {
        if (jQuery('.catRightBlk')) {
            jQuery('.catRightBlk').addClass('blkHlte');
        }
    });
    

    //LAST NAV DROPDOWN SCREEN POSITION 
    var screenWidth = jQuery(window).width();
    //alert(screenWidth);
    jQuery('#home_nav > ul >  li').each(function () {
        var position = jQuery(this).offset();
        var Screen_diff = screenWidth - position.left;
        if (Screen_diff < 420) {
            jQuery(this).find('.ssnav').addClass('nav_leftMR');
        }
    });

    //DISCLAIMER and SUBMIT QUERY AUTO POPUP
    /*jQuery('.disclaimer_bottom').delay(1000).animate({bottom:'0px'},200).animate({bottom:'-10px'},100).delay(5000).animate({bottom:'0px'}, 100).animate({bottom:'-95px'}, 'fast').queue(function(){
		actButton();
	});*/

    /*if (typeof (contextClearFeedbackFrm) != 'undefined' && contextClearFeedbackFrm == 'false') {
        jQuery('#feedbackFrm').stop().delay(2000).animate({
            right: '-98px'
        }, 'fast').delay(8000).animate({
            right: '-368px'
        }, 'fast');
    }

    jQuery('.FeedbackTxt').keyup(function () {
        jQuery('#feedbackFrm').stop(true, false);
    });*/
    jQuery('.disclaimer_bottom').animate({
        bottom: '-95px'
    }, 'fast').queue(function () {
        actButton();
    });

    /*if(typeof(contextClearFeedbackFrm)!='undefined' && contextClearFeedbackFrm=='false'){
		jQuery('#feedbackFrm').stop().delay(5000).animate({right:'-98px'}, 'fast');
	}*/
    //DISCLAIMER POSITIONS TARGET
    function actButton() {
        if (parseInt(jQuery('.disclaimer_bottom').css('bottom')) <= -50) {
            jQuery('#discToggle').addClass('discArrow_up');
        } else {
            jQuery('#discToggle').removeClass('discArrow_up');
        }
    }

    //DISCLAIMER BUTTON ACTION
    jQuery('#discToggle').click(function (e) {
        jQuery('.disclaimer_bottom').stop(true, true);
        if (parseInt(jQuery('.disclaimer_bottom').css('bottom')) >= -50) {
            jQuery(this).parents('.disclaimer_bottom').animate({
                bottom: '0px'
            }, 100).animate({
                bottom: '-95px'
            }, 'fast');
            setTimeout(actButton, 300);
        } else {
            jQuery(this).parents('.disclaimer_bottom').animate({
                bottom: '0px'
            }, 200).animate({
                bottom: '-10px'
            }, 100);
            setTimeout(actButton, 300);
        }
    });

    jQuery('.disclaimer_close').click(function () {
        jQuery(this).parents('.disclaimer_bottom').stop(true, true).animate({
            bottom: '-180px'
        }, 'fast');
    });


//WHAT IS STEPAHEAD GYAN ON HOMEPAGE
    jQuery('.saEvnt').click(function () {
        var getLeftpos = jQuery('.saGyan').css('left');
        if (getLeftpos != '0px') {
            jQuery('.saGyan').stop().animate({
                left: '0px'
            }, "fast");
        } else {
            jQuery('.saGyan').stop().animate({
                left: '-384px'
            }, "fast");
        }
    });

    //RELATED QUESTIONS
    /*var rq_url = window.location.href;
	var rq_value = url.substring(url.lastIndexOf('#') + 1);
	function getLocation(){
		if(rq_value=='prdAvail'){			
			jQuery('.catRightBlk').addClass('blkHlte');
			}
	}*/


    jQuery('.questBlk li a').click(function (e) {
        e.preventDefault();
        jQuery(this).parent('li').addClass('active');
        jQuery(this).next().slideToggle('fast').parent('li').siblings().removeClass('active').find('p').slideUp('fast');

    });
    jQuery('.tjLogo').hover(function () {
        jQuery('.tj_dropdown').show();
    }, function () {
        jQuery('.tj_dropdown').hide();
        jQuery(this).find('ul').hide();
    });
    jQuery('.tj_dropdown').click(function () {
        jQuery(this).find('ul').toggle();
    });


    //LATEST HOMEPAGE SLIDE SCRIPT

    jQuery(".galleryList li:first").show();
    var speed = 8000;
    var interval = setInterval(slider, speed);
    var currentSlide = 0;
    jQuery('.galleryEvnt li').eq(currentSlide).addClass("active").siblings().removeClass("active");

    function slider() {
        if (currentSlide < jQuery('.galleryList li:last').index()) {
            currentSlide++;
        } else {
            currentSlide = 0;
        }
        jQuery('.galleryList li').eq(currentSlide).fadeIn().siblings().fadeOut();
        jQuery('.galleryEvnt li').eq(currentSlide).addClass("active").siblings().removeClass("active");
    }
    jQuery('.galleryEvnt li').click(function () {
        clearInterval(interval);
        currentSlide = jQuery(this).index();
        //console.log(currentSlide);
        jQuery('.galleryList li').eq(currentSlide).fadeIn().siblings().fadeOut();
        jQuery('.galleryEvnt li').eq(currentSlide).addClass("active").siblings().removeClass("active");
        interval = setInterval(slider, speed);
    });
    jQuery(".galleryList").hover(function (e) {
        clearInterval(interval);
    }, function () {
        interval = setInterval(slider, speed);
    });    
    //LATEST HOMEPAGE SLIDE SCRIPT

    jQuery('html').click(function () {
        jQuery('.home_support, .login_lnk').slideUp('fast');
        jQuery('.navigate').removeClass('active');
        jQuery('.queryPop')
            .animate({
                opacity: '0',
                top: '10px'
            }, 'fast')
            .fadeOut('fast');
        setTimeout(removeQryConfirmDiv_header,500);
    });
    jQuery('.query').click(function (event) {    	
        event.stopPropagation();
        jQuery(this).find('.queryPop')
            .show()
            .animate({
                opacity: '1',
                top: '30px'
            }, 'fast');
        
    });
    jQuery('.hideQuery').click(function () {
        jQuery('.queryPop')
            .animate({
                opacity: '0',
                top: '10px'
            }, 'fast')
            .fadeOut('fast');
        setTimeout(removeQryConfirmDiv_header,500);
        	
    });

    jQuery('.orderID').hover(function () {
        jQuery(this).parents('td').find('.orderData').show();
    }, function () {
        jQuery('.orderData').hide();
    });

    function getFunc_header() {
        if (jQuery('#qryConfirm_header').is(':visible')){
        	jQuery('.queryPop')
            .animate({
                opacity: '0',
                top: '10px'
            }, 'fast').fadeOut();
        	setTimeout(removeQryConfirmDiv_header,500);
        	
        } else {
            return false;
        }
    }

    jQuery('#button_header').click(function () {
        setTimeout(getFunc_header, 5000);
    });
    
    
    

});