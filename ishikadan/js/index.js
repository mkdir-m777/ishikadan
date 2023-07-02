// スクロールするとロゴの色変更
$(function () {
    $(window).on("scroll", function () {
      const sliderHeight = $(".mainvisurl").height();
      if (sliderHeight - 30 < $(this).scrollTop()) {
        $(".header-menu-item").addClass("headerColorScroll");
      } else {
        $(".header-menu-item").removeClass("headerColorScroll");
      }
    });
  });


// スクロールすると三本線色変更
$(function () {
    $(window).on("scroll", function () {
      const sliderHeight = $(".mainvisurl").height();
      if (sliderHeight - 30 < $(this).scrollTop()) {
        $(".openbtn1 span").addClass("line-color");
      } else {
        $(".openbtn1 span").removeClass("line-color");
      }
    });
  });





// スクロールするとヘッダーの背景色変更


  $(function () {
    $(window).on("scroll", function () {
      const sliderHeight = $(".mainvisurl").height();
      if (sliderHeight - 30 < $(this).scrollTop()) {
        $(".header").addClass("headerLogoScroll");
      } else {
        $(".header").removeClass("headerLogoScroll");
      }
    });
  });


// スクロールするとロゴの画像変更

  $(function () {
    $(window).on("scroll", function () {
      const sliderHeight = $(".mainvisurl").height();
      if (sliderHeight - 30 < $(this).scrollTop()) {
        $('.header-logo-warp').children('img').attr('src', 'http://ishikadan.local/wp-content/themes/ishikadan/img/sub-header-logo.png');
    } else {
        $('.header-logo-warp').children('img').attr('src', 'http://ishikadan.local/wp-content/themes/ishikadan/img/top-header-logo.png');
      }
    });
  });






