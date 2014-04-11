(function($) {
    var ColorPicker=function(element) {
        var self=this;
        this.element=element;
        this.$element=$(element);
        this.$element.addClass("form-control");
        this.colors=[
            '#00FFFF','#000000','#0000FF','#FF00FF',
            '#808080','#008000','#00FF00','#800000',
            '#000080','#808000','#800080','#FF0000',
            '#C0C0C0','#008080','#FFFFFF','#FFFF00'];

        this.template='<div class="input-group color-picker"> \
                            <span class="input-group-btn"> \
                                <button class="btn btn-default" type="button">&nbsp;</button> \
                            </span> \
                        </div>';
        this.$container=$(this.template);
        this.$element.after(this.$container);
        this.$container.prepend(this.$element);
        this.dropdownTemplate='<div class="dropdown-menu" role="menu"> \
                                  <div class="standard-colors colors-list"> \
                                    <h5>Standard Colors</h5> \
                                    <ul></ul> \
                                  </div> \
                                  <div class="colors-list"> \
                                    <h5>Custom Colors</h5> \
                                    <ul></ul> \
                                  </div> \
                                 </div>';
        this.$dropdown=$(this.dropdownTemplate);
        this.$container.append(this.$dropdown);
        this.$standardColors=$(".standard-colors",this.$dropdown);
        var $ul=$("ul",this.$standardColors);
        this.appendColors($ul,this.colors);

    }
    ColorPicker.prototype.appendColors=function($ul,colors) {
        $.each(colors,function(i,color) {
            $ul.append("<li><a href='javascript:;' style='background:"+ color+" !important;'>&nbsp;</a></li>");
        });
    };
    var old=$.fn.colorpicker;
    $.fn.colorpicker=function(option) {
        return this.each(function() {
            var $this=$(this)
            var data=$this.data('colorpicker')

            if(!data) $this.data('colorpicker',(data=new ColorPicker(this)))
            if(typeof option=='string') data[option]()
        })
    };

    /* ColorPicker NO CONFLICT
    * =================== */

    $.fn.colorpicker.noConflict=function() {
        $.fn.colorpicker=old;
        return this;
    };

    $(function() {
        $('[data-provide="colorpicker"]').colorpicker();
    });

} (window.jQuery));
