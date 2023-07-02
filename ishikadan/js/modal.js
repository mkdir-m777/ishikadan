
$('.js-modal').click(function() {
    $('.modal-inner').toggle();
})


$('.js-modal').click(function() {
    $('.modal-mask').toggle();
})


$(function () {
    const height = $(".js-main").height();
    $(".modal-mask").css("height", height);
  });
  