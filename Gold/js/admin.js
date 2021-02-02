$(function(){
  // admin page main tabs
  const adminTab = function(){ //함수의 기능을 변수 adminTab에 저장함
    $(".adminTabs button").click(function(){

      let tabIndex=$(this).index();

      $(".adminTabs button").removeClass("active");
      $(this).addClass("active");

      $(".adminPanel").hide();
      $(".adminPanel").eq(tabIndex).show();
    });
    $(".adminTabs button").eq(2).trigger("click");
  };
  adminTab();
});