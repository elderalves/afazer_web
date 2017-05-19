document.addEventListener('DOMContentLoaded', function(){

  console.log('animations loaded');

  // Fornecedores Animation
  var fornecControl = new ScrollMagic.Controller();

  var fornecScene = new ScrollMagic.Scene({
    triggerElement: ".title-box",
    duration: '100',
    reverse: false
  }).on('start', function(){

    var formFornecAnimate = TweenMax.to('.content-form', 1, {y: '0px', ease: Elastic.easeOut.config(0.7, 0.5)});

  })
  .addTo(fornecControl);

});
