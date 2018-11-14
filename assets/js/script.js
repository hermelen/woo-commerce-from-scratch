$(document).ready(function(){
  $("section.slider-section div.div-slider:nth-of-type(1)").addClass('active')
  counter = 1000;
  setInterval(function(){
    counter += 1;
    slideShow();
  }, 3000);

  $('#slider-left').click(function(){
    counter -= 1;
    slideShow();
  });

  $('#slider-right').click(function(){
    counter += 1;
    slideShow();
  });

  function slideShow(){
    if (counter%3 == 1) {
      $("section.slider-section div.div-slider:nth-of-type(1)").addClass('active')
      $("section.slider-section div.div-slider:nth-of-type(2)").removeClass('active')
      $("section.slider-section div.div-slider:nth-of-type(3)").removeClass('active')
    } else if (counter%3 == 0) {
      $("section.slider-section div.div-slider:nth-of-type(2)").addClass('active')
      $("section.slider-section div.div-slider:nth-of-type(3)").removeClass('active')
      $("section.slider-section div.div-slider:nth-of-type(1)").removeClass('active')
    } else {
      $("section.slider-section div.div-slider:nth-of-type(3)").addClass('active')
      $("section.slider-section div.div-slider:nth-of-type(1)").removeClass('active')
      $("section.slider-section div.div-slider:nth-of-type(2)").removeClass('active')
    }
  };


  setTimeout(function(){
    containerHeight = $("div.div-slider").height();
    $('section.slider-section').height(containerHeight);
  }, 0);

  $( window ).resize(function() {
    containerHeight = $("div.div-slider").height();
    $('section.slider-section').height(containerHeight);
  });
})
