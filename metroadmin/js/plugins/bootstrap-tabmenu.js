!function ($) {

  "use strict"; // jshint ;_;


 /* TABMENU CLASS DEFINITION
  * ========================= */

  var toggle = '[data-toggle=tabmenu]'
    , Tabmenu = function (element) {
        var $el = $(element).on('click.tabmenu.data-api', this.toggle)
        $('html').on('click.tabmenu.data-api', function () {
          $el.parent().removeClass('open')
        })
      }

  Tabmenu.prototype = {

    constructor: Tabmenu

  , toggle: function (e) {
      var $this = $(this)
        , $parent
        , isActive

      if ($this.is('.disabled, :disabled')) return

      $parent = getParent($this)

      isActive = $parent.hasClass('open')

      clearMenus()

      if (!isActive) {
        $parent.toggleClass('open')
      }

      $this.focus()

      return false
    }

  , keydown: function (e) {
      var $this
        , $items
        , $active
        , $parent
        , isActive
        , index

      if (!/(38|40|27)/.test(e.keyCode)) return

      $this = $(this)

      e.preventDefault()
      e.stopPropagation()

      if ($this.is('.disabled, :disabled')) return

      $parent = getParent($this)

      isActive = $parent.hasClass('open')

      if (!isActive || (isActive && e.keyCode == 27)) {
        if (e.which == 27) $parent.find(toggle).focus()
        return $this.click()
      }

      $items = $('[role=menu] li:not(.divider):visible a', $parent)

      if (!$items.length) return

      index = $items.index($items.filter(':focus'))

      if (e.keyCode == 38 && index > 0) index--                                        // up
      if (e.keyCode == 40 && index < $items.length - 1) index++                        // down
      if (!~index) index = 0

      $items
        .eq(index)
        .focus()
    }

  }

  function clearMenus() {
    $(toggle).each(function () {
      getParent($(this)).removeClass('open')
    })
  }

  function getParent($this) {
    var selector = $this.attr('data-target')
      , $parent

    if (!selector) {
      selector = $this.attr('href')
      selector = selector && /#/.test(selector) && selector.replace(/.*(?=#[^\s]*$)/, '') //strip for ie7
    }

    $parent = selector && $(selector)

    if (!$parent || !$parent.length) $parent = $this.parent()

    return $parent
  }


  /* TABMENU PLUGIN DEFINITION
   * ========================== */

  var old = $.fn.tabmenu

  $.fn.tabmenu = function (option) {
    return this.each(function () {
      var $this = $(this)
        , data = $this.data('tabmenu')
      if (!data) $this.data('tabmenu', (data = new Tabmenu(this)))
      if (typeof option == 'string') data[option].call($this)
    })
  }

  $.fn.tabmenu.Constructor = Tabmenu


 /* TABMENU NO CONFLICT
  * ==================== */

  $.fn.tabmenu.noConflict = function () {
    $.fn.tabmenu = old
    return this
  }


  /* APPLY TO STANDARD TABMENU ELEMENTS
   * =================================== */

  $(document)
    //.on('click.tabmenu.data-api', clearMenus)
    .on('click.tabmenu.data-api', '.tabmenu form', function (e) { e.stopPropagation() })
    .on('click.tabmenu-menu', function (e) { e.stopPropagation() })
    .on('click.tabmenu.data-api'  , toggle, Tabmenu.prototype.toggle)
    .on('keydown.tabmenu.data-api', toggle + ', [role=menu]' , Tabmenu.prototype.keydown)

}(window.jQuery);
