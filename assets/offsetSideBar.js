function checkOffset() {
  var a=$(document).scrollTop()+window.innerHeight;
  var b=$('#footer').offset().top;
  if (a<b) {
    $('#social-float').css('bottom', '10px');
  } else {
    $('#social-float').css('bottom', (10+(a-b))+'px');
  }
}
$(document).ready(checkOffset);
$(document).scroll(checkOffset);