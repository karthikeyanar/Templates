function Application() {

    var self=this;

    // IE mode
    this._IsIE8=false;
    this._IsIE9=false;
    this._IsIE10=false;

    this.isIE8=function() {
        return self._IsIE8;
    };

    this.isIE9=function() {
        return self._IsIE9;
    };

    this.isIE10=function() {
        return self._IsIE10;
    };

    this._TouchDevice=false;
    // check for device touch support
    this.isTouchDevice=function() {
        return this._TouchDevice;
    };


    this.isExtraSmallDevice=function() {
        return ($(window).width()<768);
    };

    this.isSmallDevice=function() {
        return ($(window).width()>=768&&$(window).width()<992);
    };

    this.isMediumDevice=function() {
        return ($(window).width()>=992&&$(window).width()<1200);
    };

    this.isLargeDevice=function() {
        return ($(window).width()>=1200);
    };

    this.scrollTo=function(el,offeset) {
        pos=el?el.offset().top:0;
        $('html,body').animate({
            scrollTop: pos+(offeset?offeset:0)
        },'slow');
    };

    this.scrollTop=function() {
        self.scrollTo();
    }

    this.responsiveHandlers=[];
    this.runResponsiveHandlers=function() {
        // reinitialize other subscribed elements
        for(var i in self.responsiveHandlers) {
            var each=self.responsiveHandlers[i];
            each.call();
        }
    };

    this.addResponsiveHandler=function(func) {
        this.responsiveHandlers.push(func);
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

    this.handleMetroCheck=function(filter) {
        var $elements;
        if(filter)
            $elements=$('.metro-checkbox,.metro-radio',filter);
        else
            $elements=$('.metro-checkbox,.metro-radio');

        $elements.each(function() {
            var $this=$(this);
            var $check=$(".check",$this);
            if(!$check.get(0))
                $("input",$this).after("<span class='check'></span>");
        });
    };


    this.handleBreadcrumb=function() {
        // dismiss breadcrumb
        $(document).on('click.breadcrumb.data-api',"[data-dismiss='breadcrumb']",function() {
            var $breadcrumb=$(this).parents(".breadcrumb:first");
            $breadcrumb.fadeOut();
        });
    };

    this.handleFormValidation=function() {
        if($.fn.validate) {
            $(".form-validate").validate({
                ignore: "input[type='text']:hidden"
            });
        }
    };

    this.handleToolTip=function() {
        $("[data-toggle='tooltip']").tooltip();
        $("[rel='tooltip']").tooltip();
    };

    this.handlePopover=function() {
        $("[data-toggle='popover']").popover();
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
        if($.fn.selectpicker) {
            var $filter=$('.selectpicker')
            if($target) {
                $filter=$('.selectpicker',$target);
            }
            $filter.selectpicker();
        }
    };

    this.handleSwitch=function($target) {
        if($.fn.bootstrapSwitch) {
            var $filter=$('.switch')
            if($target) {
                $filter=$('.switch',$target);
            }
            $filter.bootstrapSwitch();
        }
    };

    this.handleSlider=function($target) {
        if($.fn.slider) {
            var $filter=$('.slider')
            if($target) {
                $filter=$('.slider',$target);
            }
            $filter.slider();
        }
    };

    this.handleFixedSideBar=function() {
        var $body=$("body");
        var $leftSidebar=$(".page-sidebar-left");
        var $sidebarContent=$(".sidebar-content",$leftSidebar);
        var $menu=$('.page-sidebar-menu',$leftSidebar);
        var $header=$(".header");
        var $pageContent=$(".page-content");

        if($body.hasClass("page-sidebar-fixed")&&$body.hasClass("header-fixed")==false) {
            $leftSidebar.autofix_anything({ "onlyInContainer": false,"manualCSS": true });
        } else {
            $leftSidebar.removeClass("autofix_sb").removeClass("fixed");
        }

        if($.fn.slimScroll) {
            var windowHeight=$(window).height();
            if($sidebarContent.parent('.slimScrollDiv').size()===1) { // destroy existing instance before updating the height
                $sidebarContent
                .slimScroll({
                    destroy: true
                });
                $sidebarContent.css({
                    'height': '','overflow': '','width': ''
                });
            }
            if($body.hasClass("page-sidebar-fixed")&&$body.hasClass("page-sidebar-collapse")==false) {
                var height=windowHeight-$header.outerHeight(true)+1;
                $sidebarContent
                .slimScroll({
                    size: '5px',
                    color: '#fff',
                    opacity: .3,
                    position: 'right',
                    height: height,
                    allowPageScroll: false,
                    disableFadeOut: false,
                    alwaysVisible: true
                });
            }
        }
        self.resizeContentHeight();
    };

    this.resizeContentHeight=function() {
        var $body=$('body');

        var $header=$('.header');
        var $footer=$('.footer');
        var $pageContainer=$('.page-container');
        var $pageContent=$('.page-content',$pageContainer);
        var $pageSidebar=$('.page-sidebar-left',$pageContainer);
        var $menu=$('.page-sidebar-menu',$pageContainer);

        var windowHeight=$(window).height();
        var headerHeight=$header.outerHeight(true);
        var footerHeight=$footer.outerHeight(true);
        var pageContentHeight=$pageContent.outerHeight(true);
        var pageSidebarHeight=$pageSidebar.outerHeight(true);
        var menuHeight=$menu.outerHeight(true);

        var height=windowHeight-headerHeight-footerHeight;
        pageSidebarHeight=pageSidebarHeight-footerHeight;
        if(pageSidebarHeight>height)
            height=pageSidebarHeight;
        $pageContent.css({ 'min-height': height+'px' });
    };

    this.responsive=function() {
        self.resizeContentHeight();
        self.handleFixedSideBar();
        self.runResponsiveHandlers();
    };



    this.openSidebar=function() {
        var $body=$("body");
        var $sideBar=$('.page-sidebar-left')
        var $pageContent=$(".page-container");
        var $header=$(".header");
        var duration=300;
        var width=$sideBar.outerWidth(true);
        if($body.hasClass("page-sidebar-left-open")) {
            $sideBar.animate({
                "left": "-"+width+"px"
            },{ "duration": duration });
            $body.animate({
                "padding-left": 0
            },{ "duration": duration,"complete": function() {
                $body.removeClass("page-sidebar-left-open");
            }
            });
        } else {
            $sideBar.css({ "left": "-"+width+"px" }).show().animate({
                "left": 0
            },{ "duration": duration });
            $body.animate({
                "padding-left": width
            },{ "duration": duration,"complete": function() {
                $body.addClass("page-sidebar-left-open");
            }
            });
        }
    };

    this.handleSidebarMenu=function() {
        $('.page-sidebar-toggle')
        .on('touchend',function(e) {
            self.openSidebar();
            e.preventDefault();
        })
        .click(function(e) {
            self.openSidebar();
            e.preventDefault();
            e.stopPropagation();
        });
    };

    this.jqValidationSetDefaults=function() {
        if($.validator) {
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
                    if(element.closest('.input-group').size()===1) {
                        error.insertAfter(element.closest('.input-group'));
                    } else if(element.closest('.input-icon').size()===1) {
                        error.insertAfter(element.closest('.input-icon'));
                    } else if(element.closest('.select-group').size()===1) {
                        error.insertAfter(element.closest('.select-group'));
                    } else {
                        error.insertAfter(element);
                    }
                }
            });
        }
    };

    this.handleSettings=function() {
        var $body=$("body");
        var $header=$(".header");
        $header.removeClass("navbar-fixed-top");
        if($body.hasClass("header-fixed")) {
            $header.addClass("navbar-fixed-top");
        }
        self.responsive();
    };

    this.init=function() {

        var $body=$("body");
        var $header=$(".header");
        var $frmPepperSettings=$("#frmPepperSettings");
        var $selectHeader=$("#header",$frmPepperSettings);
        var $selectSidebar=$("#sidebar",$frmPepperSettings);
        var $selectLayout=$("#layout",$frmPepperSettings);

        $header.removeClass("navbar-fixed-top");
        if($body.hasClass("header-fixed")) {
            $selectHeader.val("fixed");
            $header.addClass("navbar-fixed-top");
        }
        if($body.hasClass("page-sidebar-fixed")) {
            $selectSidebar.val("fixed");
        }
        if($body.hasClass("page-fluid")) {
            $selectLayout.val("default");
        } else {
            $selectLayout.val("fixed");
        }

        $selectLayout
        .change(function() {
            var clsName="page-fluid";
            if(this.value=="default")
                $body.addClass(clsName);
            else
                $body.removeClass(clsName);

            self.handleSettings();
        });


        $selectHeader
        .change(function() {
            var clsName="header-fixed";
            if(this.value=="fixed")
                $body.addClass(clsName);
            else
                $body.removeClass(clsName);

            $header.removeClass("navbar-fixed-top");
            if($body.hasClass("header-fixed"))
                $header.addClass("navbar-fixed-top");

            self.handleSettings();
        });

        $selectSidebar
        .change(function() {
            var clsName="page-sidebar-fixed";
            if(this.value=="fixed")
                $body.addClass(clsName);
            else
                $body.removeClass(clsName);
            self.handleSettings();
        });

        self._IsIE8=!!navigator.userAgent.match(/MSIE 8.0/);
        self._IsIE9=!!navigator.userAgent.match(/MSIE 9.0/);
        self._IsIE10=!!navigator.userAgent.match(/MSIE 10.0/);

        if($.fn.sidebarMenu) {
            $('.page-sidebar-menu').sidebarMenu();
        }
        var $pageSidebarMenu=$(".page-sidebar-menu")

        $(".sidebar-toggler",$pageSidebarMenu)
        .on("click",function() {
            $("body").toggleClass("page-sidebar-collapse");
            self.responsive();
        });

        var $pageSidebarSearch=$(".page-sidebar-search");

        $("#open-search",$pageSidebarSearch)
        .on("click",function() {
            $pageSidebarSearch.addClass("open");
        });
        $("#close-search",$pageSidebarSearch)
        .on("click",function() {
            $pageSidebarSearch.removeClass("open");
        });

        self.handleSidebarMenu();
        self.resizeContentHeight();
        self.handleFixedSideBar();

        self.jqValidationSetDefaults();
        self.handleFormValidation();
        self.handleToolTip();
        self.handlePopover();
        self.handleChosen();

        self.handlePanelTools();
        self.handleDropdowns();
        self.handleBootstrapSelect();
        self.handleSwitch();
        self.handleSlider();
        self.handleMetroCheck();

    };

}

var APP=new Application();

$(function() {
    APP.init();
    $(document.body).one('touchstart',function(e) { APP._TouchDevice=true; });
});

$(window).resize(function() {
    APP.responsive();
});