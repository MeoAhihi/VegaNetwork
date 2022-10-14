function sticky_relocate() {
  var window_top = $(window).scrollTop();
  var footer_top = $("#footer").offset().top;
  var div_top = $("#sticky-anchor").offset().top;
  var div_height = $("#aside").height();

  var padding = 20; // tweak here or get from margins etc

  if (window_top + div_height > footer_top - padding)
    $("#aside").css({
      top: (window_top + div_height - footer_top + padding) * -1,
    });
  else if (window_top > div_top) {
    $("#aside").addClass("stick");
    $("#aside").css({ top: 0 });
  } else {
    $("#aside").removeClass("stick");
  }
}

$(function () {
  $(window).scroll(sticky_relocate);
  sticky_relocate();
});
