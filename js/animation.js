// Apparition des sections au scroll
(function ($) {
  $(window).scroll(function () {
    $(".toAnim").each(function () {
      var _win = $(window),
        _ths = $(this),
        _pos = _ths.offset().top,
        _scroll = _win.scrollTop(),
        _height = _win.height();

      _scroll > _pos - _height * 0.85 ? _ths.addClass("anim") : _ths.removeClass("anim");
    });
  });
})(jQuery);

//Animation premier mot des titres au scroll
(function ($) {
  $(window).scroll(function () {
    $(".toAnimTitle").each(function () {
      var _win = $(window),
        _ths = $(this),
        _pos = _ths.offset().top,
        _scroll = _win.scrollTop(),
        _height = _win.height();

      _scroll > _pos - _height * 1.05 ? _ths.addClass("animTitle") : _ths.removeClass("animTitle");
    });
  });
})(jQuery);

//Animation deuxième mot des titres au scroll
(function ($) {
  $(window).scroll(function () {
    $(".toAnimTitle2").each(function () {
      var _win = $(window),
        _ths = $(this),
        _pos = _ths.offset().top,
        _scroll = _win.scrollTop(),
        _height = _win.height();

      _scroll > _pos - _height * 1.05 ? _ths.addClass("animTitle2") : _ths.removeClass("animTitle2");
    });
  });
})(jQuery);

// Initialisation de la librairie Skrollr
window.onload = function () {
  skrollr.init();
};
