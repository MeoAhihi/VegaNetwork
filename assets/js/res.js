function sticky_relocate() {
  var window_top = $(window).scrollTop();
  var footer_top = $("#footer").offset().top;
  var div_top = $("#sticky-anchor").offset().top;
  var div_height = $("#aside").height();

  if (window_top + div_height > footer_top) $("#aside").removeClass("stick");
  else if (window_top > div_top) {
    $("#aside").addClass("stick");
  } else {
    $("#aside").removeClass("stick");
  }
}

$(function () {
  $(window).scroll(sticky_relocate);
  sticky_relocate();
});
