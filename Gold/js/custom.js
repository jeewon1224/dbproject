$(function(){
  //header top fix when scrolling down
  const offTop = $(".gnb").offset().top; //전역변수!


  let fixHeader = function(){
    
    $(window).scroll(function(){
      let scroll = $(window).scrollTop(); //윈도우창의 현재 스크롤의 꼭대기 값을 scroll이라는 변수에 저장하자.
      let winWidth = $(window).width(); //화면의 현재 가로값 
      if(winWidth <= 480 && offTop <= scroll){  //가로값이 480보다 작거나 같고
        $(".gnb").css({"position":"fixed"});
      } else {
        $(".gnb").css({"position":"relative"});

      }
    });

  }

  fixHeader();


  $(window).resize(function(){
    fixHeader();
    
  });


  //mobile menu click and show/hide when clicking
  $(".mobileMenu").click(function(){
    $(this).toggleClass("on"); 
    if($(this).hasClass("on")){  //on이라는 클래스가 붙을 때 :메뉴 아이콘이 X모양으로 바뀌어야 한다
      $(this).find("i").attr("class", "fa fa-times");
      $(this).prev("ul").slideDown();
    }else{ //on이라는 클래스가 붙지 않을 때
      $(this).find("i").attr("class", "fa fa-bars");
      $(this).prev("ul").slideUp("fast");

    }
  }) 






  // if (matchMedia("screen and (max-width: 480px)").matches) {
    //최대 480일 경우에만 적용할 것이다!

  //   $(window).resize(function(){
  //       let winWidth = $(window).width();

  //       if(winWidth <= 480){
  //         let offTop = $(".gnb").offset().top;
  //         console.log(offTop);
        
  //       $(window).scroll(function(){
  //         let scroll = $(window).scrollTop();
  //         if(offTop <= scroll){
  //           $(".gnb").css({"position":"fixed"});
  //         } else {
  //           $(".gnb").css({"position":"static"});
  //           }
  
  //       });
  //     }

        
  //   });

  // // }


  let fitHeight = function(){
    $(window).resize(function(){
      let imgHeight = $(".arrivalCon>img").height();
      // console.log(imgHeight);
      $(".arrivalCon").height(imgHeight);

    });
  }
  
  
  fitHeight();






  $(".productImg").click(function(){
    let index = $(this).index();

    $(".productTxt").hide();
    $(".productTxt").eq(index).show();
  });

  //첫번째 탭 강제 클릭 이벤트를 발생시킨다!! @@@@@@@@@
 $(".productImg").eq(0).trigger("click"); 

});