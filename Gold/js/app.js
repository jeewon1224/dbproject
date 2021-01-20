$(function(){

  $('.appBoxes').masonry({
    // options
    itemSelector: '.appBox',
    columnWidth: '.appBox-sizer',
    percentPosition: true //이렇게 적어줘야 퍼센티지로 사용 가능하다.

  });


});
