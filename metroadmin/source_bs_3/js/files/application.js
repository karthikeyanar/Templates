function Application() {

	var self=this;

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
				height=_calculateFixedSidebarViewportHeight();
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
				if(body.hasClass('page-sidebar-fixed')) {
					sidebar.css('width','');
				}
			} else {
				body.addClass("page-sidebar-closed");
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

	this.handleDatePicker=function($target) {
		//http://eternicode.github.io/bootstrap-datepicker/
		var $filter=$('[data-plugin="datepicker"]')
		if($target) {
			$filter=$('[data-plugin="datepicker"]',$target);
		}
		$filter.each(function() {
			var $this=$(this);
			var autoClose=$this.data("autoClose");
			var calendarWeeks=$this.data("calendarWeeks");
			var todayHighlight=$this.data("todayHighlight");
			var keyboardNavigation=$this.data("keyboardNavigation");
			var forceParse=$this.data("force-parse");
			var daysOfWeekDisabled=$this.data("daysof-week-disabled");
			var startView=$this.data("start-view");
			var minViewMode=$this.data("min-view-mode");
			var todayBtn=$this.data("today-btn");
			var language=$this.data("language");
			var startDate=$this.data("start-date");
			var endDate=$this.data("end-date");
			var format=$this.data("format");
			var weekStart=$this.data("week-start");
			$this.datepicker({
				"autoclose": autoClose
				,"calendarWeeks": calendarWeeks
				,"todayHighlight": todayHighlight
				,"keyboardNavigation": keyboardNavigation
				,"forceParse": forceParse
				,"daysOfWeekDisabled": daysOfWeekDisabled
				,"startView": startView
				,"minViewMode": minViewMode
				,"todayBtn": todayBtn
				,"language": language
				,"startDate": startDate
				,"endDate": endDate
				,"format": format
				,"weekStart": weekStart
			});
		});
	};

	this.handleChosen=function($target) {
		//http://harvesthq.github.io/chosen/
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

	this.init=function() {
		 
		$(".form-validate").validate({
			ignore: "input[type='text']:hidden"
		});

		$("[data-toggle='tooltip']").tooltip();

		// dismiss breadcrumb
		$(document).on('click.breadcrumb.data-api',"[data-dismiss='breadcrumb']",function() {
			var $breadcrumb=$(this).parents(".breadcrumb:first");
			$breadcrumb.fadeOut();
		});

		$('.footer').on('click','.go-top',function(e) {
			APP.scrollTo();
			e.preventDefault();
		});

		//handle datepicker
		self.handleDatePicker();

		//handle chosen
		self.handleChosen();

		self.sidebarMenu();
		self.sidebarToggler();

	};

	this.responsive=function() {
		self.sidebarState();
	};
}

var APP=new Application();

$(function() {
	APP.init();
});


$(window).resize(function() {
	APP.responsive();
});