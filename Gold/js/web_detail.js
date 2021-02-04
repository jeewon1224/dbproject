$(function(){

  //cut right side text
  const cutTxtBox = $(".webLinks, .appLinks");
  for(let i=0; i<cutTxtBox.length; i++){
    let allTxt=cutTxtBox.eq(i).find("em").text();
    console.log(allTxt);
    cutTxtBox.eq(i).find("em").text(allTxt.substr(0, 60) + '...');
  }




  
  // fit height display frame function
  function fitDisplay(we_fr, we_img, we_box, img_h, box_h_1, box_h_2){
    let frameWidth = $(we_fr).outerWidth();
    let contentWidth = $(".detailCon").outerWidth();
    let winWidth = $(window).width();
    $(we_img).outerHeight(frameWidth * img_h);
    

    if(winWidth > 800){
      $(we_box).outerHeight(contentWidth * box_h_1);          
    } else {
      $(we_box).outerHeight(contentWidth * box_h_2);
    }
  }



  $(window).resize(function(){
    fitDisplay(".webPcFrame", ".webMainImg", ".webBox", 0.60, 0.65, 0.92);
    fitDisplay(".webMobileFrame", ".webMainImg_m", ".webBox_m", 0.92, 0.8, 1.1);

  });


  fitDisplay(".webPcFrame", ".webMainImg", ".webBox", 0.60, 0.65, 0.92);
  fitDisplay(".webMobileFrame", ".webMainImg_m", ".webBox_m", 0.92, 0.8, 1.1);


  // fit height mobile frame
  // $(window).resize(function(){
  //   let frameWidth_m = $(".webMobileFrame").outerWidth();
  //   let contentWidth = $(".detailCon").outerWidth();
  //   let winWidth = $(window).width();
  //   $(".webMainImg_m").outerHeight(frameWidth_m * 0.92);
  //   if(winWidth > 800){
  //     $(".webBox_m").outerHeight(contentWidth * 0.8);
  //   } else {
  //     $(".webBox_m").outerHeight(contentWidth * 1.1);
  //   }


  // });
  // let frameWidth_m = $(".webMobileFrame").outerWidth();
  // $(".webMobileFrame .webMainImg_m").outerHeight(frameWidth_m * 0.92);





//portfolio display scroll up  function

  function pfScrollUP(wf, img_h, fr_h, duration){
    $(wf).on("mouseenter", function(){
      const imgHeight =$(img_h).height();
      const frameHeight = $(fr_h).height();
  
      $(img_h).stop().animate({top:-imgHeight+frameHeight}, duration)
      //stop은 이벤트 반복 실행 방지
    });

    
    $(wf).on("mouseleave", function(){
      $(img_h).stop().animate({top:0}, duration)
    });


  }


  //pc display scroll up
  pfScrollUP(".webPcFrame", "img.scrollUp", ".webMainImg", 2500)
  //mobile display scroll up
  pfScrollUP(".webMobileFrame", "img.scrollUp_m", ".webMainImg_m", 5000)
  



  // pc mobile tab
  $(".webTabBtns button").click(function(){
   let tabIndex = $(this).index();
   $(".webTab").hide();
   $(".webTab").eq(tabIndex).show();
   $(".webTabBtns button").removeClass("active");
   $(".webTabBtns button").eq(tabIndex).addClass("active");

    let frameWidth = $(".webPcFrame").outerWidth();
    let frameWidth_m = $(".webMobileFrame").outerWidth();
    $(".webMainImg").outerHeight(frameWidth * 0.60);
    $(".webMobileFrame .webMainImg_m").outerHeight(frameWidth_m * 0.92);



  });

  $(".webTabBtns button").eq(0).trigger("click");



});