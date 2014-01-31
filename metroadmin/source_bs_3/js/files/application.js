function Application() {

	var self=this;

	// IE mode
	this.isIE8=false;
	this.isIE9=false;
	this.isIE10=false;

	this.sidebarWidth = 225;
    this.sidebarCollapsedWidth = 50;

	this.responsiveHandlers=[];

	this.scrollTo=function(el,offeset) {
		pos=el?el.offset().top:0;
		$('html,body').animate({
			scrollTop: pos+(offeset?offeset:0)
		},'slow');
	};

	this.scrollTop=function() {
		self.scrollTo();
	}

	this.runResponsiveHandlers=function() {
		// reinitialize other subscribed elements
		for(var i in self.responsiveHandlers) {
			var each=self.responsiveHandlers[i];
			each.call();
		}
	};

	this.sidebarAndContentHeight=function() {
		var content=$('.page-content');
		var sidebar=$('.page-sidebar');
		var body=$('body');
		var height;

		if(body.hasClass("page-footer-fixed")===true&&body.hasClass("page-sidebar-fixed")===false) {
			var available_height=$(window).height()-$('.footer').height();
			if(content.height()<available_height) {
				content.attr('style','min-height:'+available_height+'px !important');
			}
		} else {
			if(body.hasClass('page-sidebar-fixed')) {
				height=this.calculateFixedSidebarViewportHeight();
			} else {
				height=sidebar.height()+20;
			}
			if(height>=content.height()) {
				content.attr('style','min-height:'+height+'px !important');
			}
		}
	};

	this.sidebarMenu=function() {
		$('.page-sidebar').on('click','li > a',function(e) {
			if($(this).next().hasClass('sub-menu')==false) {
				if($('.btn-navbar').hasClass('collapsed')==false) {
					$('.btn-navbar').click();
				}
				return;
			}

			var parent=$(this).parent().parent();
			var the=$(this);

			parent.children('li.open').children('a').children('.arrow').removeClass('open');
			parent.children('li.open').children('.sub-menu').slideUp(200);
			parent.children('li.open').removeClass('open');

			var sub=$(this).next();
			var slideOffeset= -200;
			var slideSpeed=200;

			if(sub.is(":visible")) {
				$('.arrow',$(this)).removeClass("open");
				$(this).parent().removeClass("open");
				sub.slideUp(slideSpeed,function() {
					if($('body').hasClass('page-sidebar-fixed')==false&&$('body').hasClass('page-sidebar-closed')==false) {
						self.scrollTo(the,slideOffeset);
					}
					self.sidebarAndContentHeight();
				});
			} else {
				$('.arrow',$(this)).addClass("open");
				$(this).parent().addClass("open");
				sub.slideDown(slideSpeed,function() {
					if($('body').hasClass('page-sidebar-fixed')==false&&$('body').hasClass('page-sidebar-closed')==false) {
						self.scrollTo(the,slideOffeset);
					}
					self.sidebarAndContentHeight();
				});
			}

			e.preventDefault();
		});


	};


	this.sidebarToggler=function() {
		// handle sidebar show/hide
		$('.page-sidebar').on('click','.sidebar-toggler',function(e) {
			var body=$('body');
			var sidebar=$('.page-sidebar');
			var $icon=$("i",this);

			if((body.hasClass("page-sidebar-hover-on")&&body.hasClass('page-sidebar-fixed'))||sidebar.hasClass('page-sidebar-hovering')) {
				body.removeClass('page-sidebar-hover-on');
				sidebar.css('width','').hide().show();
				e.stopPropagation();
				self.runResponsiveHandlers();
				return;
			}

			$(".sidebar-search",sidebar).removeClass("open");

			if(body.hasClass("page-sidebar-closed")) {
				body.removeClass("page-sidebar-closed");
				$icon.removeClass("icon-next").addClass("icon-back");
				if(body.hasClass('page-sidebar-fixed')) {
					sidebar.css('width','');
				}
			} else {
				body.addClass("page-sidebar-closed");
				$icon.removeClass("icon-back").addClass("icon-next");
			}
			self.runResponsiveHandlers();
		});

		// handle the search bar close
		$('.page-sidebar').on('click','.sidebar-search .remove',function(e) {
			e.preventDefault();
			$('.sidebar-search').removeClass("open");
		});

		// handle the search query submit on enter press
		$('.page-sidebar').on('keypress','.sidebar-search input',function(e) {
			if(e.which==13) {
				window.location.href="extra_search.html";
				return false; //<---- Add this line
			}
		});

		// handle the search submit
		$('.sidebar-search .submit').on('click',function(e) {
			e.preventDefault();

			if($('body').hasClass("page-sidebar-closed")) {
				if($('.sidebar-search').hasClass('open')==false) {
					if($('.page-sidebar-fixed').size()===1) {
						$('.page-sidebar .sidebar-toggler').click(); //trigger sidebar toggle button
					}
					$('.sidebar-search').addClass("open");
				} else {
					window.location.href="extra_search.html";
				}
			} else {
				window.location.href="extra_search.html";
			}
		});
		var $body=$('body');
		var $icon=$("i",'.sidebar-toggler');
		if($body.hasClass("page-sidebar-closed")) {
			$icon.removeClass("icon-back").addClass("icon-next");
		} else {
			$icon.removeClass("icon-next").addClass("icon-back");
		}
	};

	this.handleFixedSidebar=function() {
		var menu=$('.page-sidebar-menu');

		if(menu.parent('.slimScrollDiv').size()===1) { // destroy existing instance before updating the height
			menu.slimScroll({
				destroy: true
			});
			menu.removeAttr('style');
			$('.page-sidebar').removeAttr('style');
		}

		if($('.page-sidebar-fixed').size()===0) {
			this.handleSidebarAndContentHeight();
			return;
		}

		if($(window).width()>=980) {
			var sidebarHeight=this.calculateFixedSidebarViewportHeight();

			menu.slimScroll({
				size: '7px',
				color: '#a1b2bd',
				opacity: .3,
				position: 'right',
				height: sidebarHeight,
				allowPageScroll: false,
				disableFadeOut: false
			});
			this.handleSidebarAndContentHeight();
		}
	};

	this.calculateFixedSidebarViewportHeight=function() {
		var sidebarHeight=$(window).height()-$('.header').height()+1;
		if($('body').hasClass("page-footer-fixed")) {
			sidebarHeight=sidebarHeight-$('.footer').height();
		}
		return sidebarHeight;
	}

	this.handleSidebarAndContentHeight=function() {
		var content=$('.page-content');
		var sidebar=$('.page-sidebar');
		var body=$('body');
		var height;

		if(body.hasClass("page-footer-fixed")===true&&body.hasClass("page-sidebar-fixed")===false) {
			var available_height=$(window).height()-$('.footer').height();
			if(content.height()<available_height) {
				content.attr('style','min-height:'+available_height+'px !important');
			}
		} else {
			if(body.hasClass('page-sidebar-fixed')) {
				height=this.calculateFixedSidebarViewportHeight();
			} else {
				height=sidebar.height()+20;
			}
			if(height>=content.height()) {
				content.attr('style','min-height:'+height+'px !important');
			}
		}
	};

	this.handleFixedSidebarHoverable=function() {
		if($('body').hasClass('page-sidebar-fixed')===false) {
			return;
		}

		$('.page-sidebar').off('mouseenter').on('mouseenter',function() {
			var body=$('body');

			if((body.hasClass('page-sidebar-closed')===false||body.hasClass('page-sidebar-fixed')===false)||$(this).hasClass('page-sidebar-hovering')) {
				return;
			}

			body.removeClass('page-sidebar-closed').addClass('page-sidebar-hover-on');
			$(this).addClass('page-sidebar-hovering');
			$(this).animate({
				width: self.sidebarWidth
			},400,'',function() {
				$(this).removeClass('page-sidebar-hovering');
			});
		});

		$('.page-sidebar').off('mouseleave').on('mouseleave',function() {
			var body=$('body');

			if((body.hasClass('page-sidebar-hover-on')===false||body.hasClass('page-sidebar-fixed')===false)||$(this).hasClass('page-sidebar-hovering')) {
				return;
			}

			$(this).addClass('page-sidebar-hovering');
			$(this).animate({
				width: self.sidebarCollapsedWidth
			},400,'',function() {
				$('body').addClass('page-sidebar-closed').removeClass('page-sidebar-hover-on');
				$(this).removeClass('page-sidebar-hovering');
			});
		});
	};

	this.sidebarState=function() {
		if($(window).width()<980) {
			$('body').removeClass("page-sidebar-closed");
		}
	};

	this.chartToolTip=function(x,y,contents) {
		$('<div id="tooltip" class="chart-tooltip tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner">'+contents+'</div></div>').css({
			top: y-43,
			left: x-15
		}).appendTo("body").fadeIn(200);
	};

	this.handleChosen=function($target) {
		var $filter=$('.chosen-select')
		if($target) {
			$filter=$('.chosen-select',$target);
		}
		$filter.each(function() {
			var $this=$(this);
			var allow_single_deselect=$this.data("allowsingledeselect")||true;
			var disable_search_threshold=$this.data("disablesearchthreshold")||10;
			var no_results_text=$this.data("noresultstext")||'Oops, nothing found!';
			var width=$this.data("width")||"100%";
			$this.chosen({
				"width": width
				,"allow_single_deselect": allow_single_deselect
				,"disable_search_threshold": disable_search_threshold
				,"no_results_text": no_results_text
			});
		});
	};

	this.handleUniform=function($target) {
		var $filter=$('.uniform');
		if($target) {
			$filter=$('.uniform',$target);
		}
		$filter.uniform();
	};

	this.handleBreadcrumb=function() {
		// dismiss breadcrumb
		$(document).on('click.breadcrumb.data-api',"[data-dismiss='breadcrumb']",function() {
			var $breadcrumb=$(this).parents(".breadcrumb:first");
			$breadcrumb.fadeOut();
		});
	};

	this.handleFormValidation=function() {
		$(".form-validate").validate({
			ignore: "input[type='text']:hidden"
		});
	};

	this.handleToolTip=function() {
		$("[data-toggle='tooltip']").tooltip();
	};

	this.handlePanelTools=function() {

		$('body').on('click.panel > .btn-group > a',"[data-action='collapse']",function(e) {
			e.preventDefault();
			var el=$(this).closest(".panel").children(".panel-body");
			if($(this).hasClass("expand")==false) {
				$(this).addClass("expand");
				el.slideUp(200);
			} else {
				$(this).removeClass("expand");
				el.slideDown(200);
			}
		});

		$('body').on('click.panel > .btn-group > a',"[data-action='remove']",function(e) {
			e.preventDefault();
			jQuery(this).closest(".panel").remove();
		});

	};

	this.handleDropdowns=function() {
		$('body').on('click','.dropdown-menu.hold-on-click',function(e) {
			e.stopPropagation();
		})
	};

	this.handleBootstrapSelect=function($target) {
		var $filter=$('.selectpicker')
		if($target) {
			$filter=$('.selectpicker',$target);
		}
		$filter.selectpicker();
	};

	this.handleSwitch=function($target) {
		var $filter=$('.switch')
		if($target) {
			$filter=$('.switch',$target);
		}
		$filter.bootstrapSwitch();
	};

	this.initScrollTop=function() {
		$('.footer').on('click','.go-top',function(e) {
			APP.scrollTo();
			e.preventDefault();
		});
	};

	this.resetSettings=function() {
		var $body=$("body");
		$body
        .removeClass("page-boxed")
		.removeClass("page-fluid")
        .removeClass("page-footer-fixed")
        .removeClass("page-sidebar-fixed")
        .addClass("page-header-fixed")
		;

		$(".header",$body)
		.addClass("navbar-fixed-top")
		.removeClass("navbar-static-top")
		;
	};

	this.initSettings=function() {
		var $body=$("body");
		var $settings=$(".dropdown-menu.settings");
		var $fixedlayout=$("#fixedlayout",$settings);
		var $fixedheader=$("#fixedheader",$settings);
		var $fixedfooter=$("#fixedfooter",$settings);
		var $fixedsidebar=$("#fixedsidebar",$settings);

		if($body.hasClass("page-boxed"))
			$fixedlayout.get(0).checked=true;

		if($body.hasClass("page-header-fixed"))
			$fixedheader.get(0).checked=true;

		if($body.hasClass("page-footer-fixed"))
			$fixedfooter.get(0).checked=true;

		if($body.hasClass("page-sidebar-fixed"))
			$fixedsidebar.get(0).checked=true;

		var $body=$("body");
		var $settings=$(".dropdown-menu.settings");
		$(":checkbox",$settings)
		.change(function() {
			self.handleSettings();
		});
	};

	this.handleSettings=function() {
		var $body=$("body");
		var $settings=$(".dropdown-menu.settings");
		var $fixedlayout=$("#fixedlayout",$settings);
		var $fixedheader=$("#fixedheader",$settings);
		var $fixedfooter=$("#fixedfooter",$settings);
		var $fixedsidebar=$("#fixedsidebar",$settings);

		var isFixedLayout=$fixedlayout.get(0).checked;
		var isHeaderFixed=$fixedheader.get(0).checked;
		var isFooterFixed=$fixedfooter.get(0).checked;
		var isSidebarFixed=$fixedsidebar.get(0).checked;

		this.resetSettings();

		if(isFixedLayout)
			$body.addClass("page-boxed");
		else
			$body.addClass("page-fluid");


		if(isHeaderFixed) {
			$body.addClass("page-header-fixed");
			$(".header",$body).addClass("navbar-fixed-top");
		} else {
			$(".header",$body).addClass("navbar-static-top");
		}

		if(isFooterFixed)
			$body.addClass("page-footer-fixed");

		if(isSidebarFixed)
			$body.addClass("page-sidebar-fixed");

		var $pageContainer = $(".page-container");
		var $footer = $(".footer");
		if(isSidebarFixed && isFixedLayout && isFooterFixed==false){
			$(".footer-content",$footer).removeClass("container");
			$pageContainer.append($footer);
		} else {
			$(".footer-content",$footer).addClass("container");
			$body.append($footer);
		}

		this.handleSidebarAndContentHeight(); // fix content height            
		this.handleFixedSidebar(); // reinitialize fixed sidebar
		this.handleFixedSidebarHoverable(); // reinitialize fixed sidebar hover effect
	};

	this.responsive=function() {
		self.sidebarState();
		self.runResponsiveHandlers();
	};

	this.isIE8=function() {
		return self.isIE8;
	};

	this.isIE9=function() {
		return self.isIE9;
	};

	this.isIE10=function() {
		return self.isIE10;
	};

	// check for device touch support
	this.isTouchDevice=function() {
		try {
			document.createEvent("TouchEvent");
			return true;
		} catch(e) {
			return false;
		}
	};


 

	this.init=function() {

		self.isIE8=!!navigator.userAgent.match(/MSIE 8.0/);
		self.isIE9=!!navigator.userAgent.match(/MSIE 9.0/);
		self.isIE10=!!navigator.userAgent.match(/MSIE 10.0/);



		self.initSettings();
		self.handleSettings();
		self.initScrollTop();
		self.sidebarMenu();
		self.sidebarToggler();


		self.handleFormValidation();
		self.handleToolTip();
		self.handleChosen();

		self.handlePanelTools();
		self.handleDropdowns();
		self.handleBootstrapSelect();
		self.handleSwitch();
		self.handleUniform();

		self.sidebarAndContentHeight();

	};

}

$.validator.setDefaults({
	highlight: function(element) {
		$(element).closest('.form-group').addClass('has-error');
	},
	unhighlight: function(element) {
		$(element).closest('.form-group').removeClass('has-error');
	},
	errorElement: 'span',
	errorClass: 'help-block',
	errorPlacement: function(error,element) {
		if(element.parent('.input-group').length) {
			error.insertAfter(element.parent());
		} else {
			error.insertAfter(element);
		}
	}
});

var APP=new Application();

$(function() {
	APP.init();
});

$(window).resize(function() {
	APP.responsive();
});