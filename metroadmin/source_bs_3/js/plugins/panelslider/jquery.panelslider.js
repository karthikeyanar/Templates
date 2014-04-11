(function($) {
    'use strict';

    var _sliding=false;

    function _slideIn(panel,options) {

        var panelWidth=panel.outerWidth(true),
        bodyAnimation={},
        panelAnimation={};

        options.width=panelWidth;

        var duration=options.duration;

        if(options.onShow)
            options.onShow(panel);

        panel.data(options);

        if(panel.is(':visible')||_sliding) {
            _slideOut(panel);
            return;
        }

        _sliding=true;

        panel
		.addClass('ps-active-panel')
		.css({});


        switch(options.side) {
            case 'left':
                panel.css({
                    left: '-'+panelWidth+'px'
                });
                panelAnimation.left='+='+panelWidth;
                break;

            case 'right':
                panel.css({
                    right: '-'+panelWidth+'px'
                });
                panelAnimation.right='+='+panelWidth;
                break;
        }



        $.each(panel.data('containers'),function(i,cnt) {
            $.each(cnt.css,function(i,cs) {
                cs.value=panelWidth;
            });
        });

        $.each(panel.data('containers'),function(i,cnt) {
            var animation={};
            $.each(cnt.css,function(i,cs) {
                animation[cs.name]=cs.value;
            });
            var obj=(typeof cnt.object=='function'?cnt.object.call():cnt.object);
            obj.animate(animation,{ "duration": duration  });
        });

        panel.show().animate(panelAnimation,{ "duration": duration ,"complete": function() {
            _sliding=false;

            var otherPanel=$('.ps-active-panel').not(panel);
            if(otherPanel.get(0))
                _slideOut(otherPanel,true);

            if(options.onShown)
                options.onShown(panel);
        }
        });
    }

    function _slideOut(panel,isDisableContainer) {
        var duration=panel.data('duration'),
        panelWidth=panel.data('width'), // panel.outerWidth(true),
        bodyAnimation={},
        panelAnimation={};

        panelWidth=panel.outerWidth(true);

        if(panel.data('onHide'))
            panel.data('onHide')(panel);

        _sliding=true;

        switch(panel.data('side')) {
            case 'left':
                panelAnimation.left='-='+panelWidth;
                break;

            case 'right':
                panelAnimation.right='-='+panelWidth;
                break;
        }

        $.each(panel.data('containers'),function(i,cnt) {
            $.each(cnt.css,function(i,cs) {
                cs.value='-='+panelWidth;
            });
        });


        panel.animate(panelAnimation,{ "duration": duration ,"complete": function() {
            panel.hide();
            panel.removeClass('ps-active-panel');

            _sliding=false;

            if(panel.data('onHidden')) {
                panel.data('onHidden')(panel);
            }
        }
        });

        if(isDisableContainer) {
            return;
        }
        $.each(panel.data('containers'),function(i,cnt) {
            var animation={};
            $.each(cnt.css,function(i,cs) {
                animation[cs.name]=cs.value;
            });
            var obj=(typeof cnt.object=='function'?cnt.object.call():cnt.object);
            obj.animate(animation,{ "duration": duration  });
        });

        $('.ps-panel-toggle').removeClass('open');

    }

    $.panelSlider=function(element,options) {
        var active=$('.ps-active-panel');
        var defaults={
            side: 'left', // panel side: left or right
            duration: 200, // Transition duration in miliseconds
            clickClose: true, // If true closes panel when clicking outside it
            containers: [{ "object": $('body'),"css": [{ "name": "margin-left","value": ""}]}],
            width: 0,
            zIndexStart: 9998,
            otherPanelClose: false,
            onShow: null,
            onShown: null,
            onHide: null,
            onHiden: null
        };

        options=$.extend({},defaults,options);

        _slideIn(element,options);

    };


    // Bind click outside panel and ESC key to close panel if clickClose is true
    $(document).bind('click keyup',function(e) {
        var active=$('.ps-active-panel');

        if(e.type=='keyup'&&e.keyCode!=27) {
            return;
        }



        if(active.is(':visible')&&active.data('clickClose')) {
            _slideOut(active);
        }
    });

    // Prevent click on panel to close it
    $(document).on('click','.ps-active-panel',function(e) {
        e.stopPropagation();
    });

    $.fn.panelSliderClose=function(options) {
        _slideOut($(this));
    };


    $.fn.panelSlider=function(options) {

        var $this=$(this);

        $this
        .on('click.panelSlider',function(e) {

            var active=$('.ps-active-panel'),
			panel=$($this.attr('data-target')||(href=$this.attr('href'))&&href.replace(/.*(?=#[^\s]+$)/,'')); //strip for ie7


            $('.ps-panel-toggle').removeClass('open');

            $this.addClass('open');

            if(panel.hasClass('ps-active-panel')) {
                $this.removeClass('open');
                panel.panelSliderClose();
            } else {
                $.panelSlider(panel,options);
            }

            e.preventDefault();
            e.stopPropagation();
        });

        $this.on('touchend',function(e) {
            $this.trigger('click.panelSlider');
            e.preventDefault();
        });

        return this;
    };
})(jQuery);
