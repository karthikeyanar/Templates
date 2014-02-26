function Application() {

    var self=this;

    // IE mode
    this.isIE8=false;
    this.isIE9=false;
    this.isIE10=false;

    this.sidebarWidth=225;
    this.sidebarCollapsedWidth=50;

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

    this.handleFixedSideBar=function() {
        var $pageSidebar=$(".page-sidebar");
        var $menu=$('#pageSidebarmenu',$pageSidebar);
        var sidebarHeight=$(window).height();

        if($menu.parent('.slimScrollDiv').size()===1) { // destroy existing instance before updating the height
            $menu.slimScroll({
                destroy: true
            });
            $menu.removeAttr('style');
        }

        $menu
       .slimScroll({
           size: '5px',
           color: '#fff',
           opacity: .3,
           position: 'right',
           height: sidebarHeight,
           allowPageScroll: false,
           disableFadeOut: false,
           alwaysVisible: true
       });
    };

    this.resizeContentHeight=function() {
        var content=$('.page-content');
        var $body=$('body');

        var contentHeight=content.outerHeight(true);
        var calcHeight=$(window).height();
        if($body.hasClass("header-fixed"))
            calcHeight-=$(".header").outerHeight(true);

        calcHeight-=$(".footer").outerHeight(true);

        if(contentHeight<calcHeight) {
            content.css({ 'min-height': calcHeight+'px' });
        }
    };

    this.initSettings=function() {
        var $body=$("body");
    };


    this.responsive=function() {
        self.resizeContentHeight();
        self.handleFixedSideBar();
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

    this.handleLeftSidebarMenu=function() {

        $('#left-sidebar-toggle')
	    .panelslider({
	        containers: [
		    {
		        "object": function() {
		            return $('.page-wrapper');
		        }
			    ,"css": [{ "name": "margin-left"}]
		    },
		    {
		        "object": function() {
		            return $('.page-content');
		        }
			    ,"css": [{ "name": "margin-left"}]
		    },
		    {
		        "object": function() {
		            return $('.footer');
		        }
			    ,"css": [{ "name": "margin-left"}]
		    }
	    ]
	    ,side: 'left'
	    ,duration: 200
	    ,clickClose: false
	    ,onShow: function(panel) { }
	    ,onShown: function(panel) { $("body").removeClass("page-sidebar-collapse"); }
	    ,onHide: function() { }
	    ,onHidden: function() {
	        $("body").addClass("page-sidebar-collapse");
	    }
	    });
    };



    this.init=function() {

        self.isIE8=!!navigator.userAgent.match(/MSIE 8.0/);
        self.isIE9=!!navigator.userAgent.match(/MSIE 9.0/);
        self.isIE10=!!navigator.userAgent.match(/MSIE 10.0/);

        $('#pageSidebarmenu').metisMenu();

        self.handleFixedSideBar();

        self.resizeContentHeight();
        self.initSettings();
        self.initScrollTop();

        self.handleLeftSidebarMenu();

        self.handleFormValidation();
        self.handleToolTip();
        self.handleChosen();

        self.handlePanelTools();
        self.handleDropdowns();
        self.handleBootstrapSelect();
        self.handleSwitch();
        self.handleUniform();

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