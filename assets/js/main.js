// optional
$('#Carousel').carousel({
    interval: 5000
});

$(document).on("scroll", function() {
    if($(document).scrollTop()>100) {
      $("#menu").removeClass("expand").addClass("retract");
    } else {
      $("#menu").removeClass("retract").addClass("expand");
    }
  });
