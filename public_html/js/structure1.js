jQuery(document).ready(function($) {

    /*~~~~~~~ * 01. Mobile Menu   ~~~~~~~~*/
  $(".menuIcon").click(function () {
    $(this).toggleClass("menu-close");
    $(".menuMain").slideToggle("slow");
  });
  $(".menuMain ul li:has(ul)").prepend('<span class="arrow"></span>');
  $(".arrow").click(function () {
    $(this).parents().toggleClass("show");
    $(this).siblings("ul.sub-menu").slideToggle("slow");
    $(this).toggleClass("minus");
  });

  $("canvas.text-to-canvas").each(function (index) {
    var text;

    if( $(this).hasClass( "address line1" )) text = "";
    if( $(this).hasClass( "address line2" )) text = "";
    if( $(this).hasClass( "phone" )) text = "0-000-000-0000";
    if( $(this).hasClass( "email" )) text = "contact@ketocidergummies.com";

    var ctx = this.getContext("2d"); // initiate first time to get real width of text and to set width and height of canvas
    $(this).parent().append("<span class='after-canvas'></span>"); // adding new element so we can get actual height of parent div
    var canvas_height = $(this).parent().find('span.after-canvas').height(); // getting height of that element

    //$(this).css('vertical-align', valign); //pulling down for lower letters
    $(this).css('font-size', 'normal'); //resetting default value

    var font_size = $(this).parent().css('font-size');
    var font_weight = $(this).parent().css('font-weight');
    var font_family = $(this).parent().css('font-family');
    var font_color = $(this).parent().css('color');

    window.devicePixelRatio = 2; //fixing blur text

    ctx.font = " " + font_weight +" "+ font_size  +" "+ font_family;
    var canvas_width = ctx.measureText(text).width;

    this.style.width = canvas_width + "px"; //fixing blur text
    this.style.height = canvas_height + "px"; //fixing blur text
    var scale = window.devicePixelRatio; //fixing blur text

    this.width = (canvas_width * scale); //fixing blur text
    this.height = (canvas_height * scale); //fixing blur text

    ctx = this.getContext("2d"); // initiate second time for actual info
    ctx.scale(scale, scale); //fixing blur text

    ctx.font = font_weight +" "+ font_size  +" "+ font_family;
    ctx.textBaseline = "ideographic";
    ctx.fillStyle = font_color;

    ctx.fillText(text, 0, canvas_height);
  });
});