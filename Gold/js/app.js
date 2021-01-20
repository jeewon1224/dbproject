$(function(){

  $('.appBoxes').masonry({
    // options
    itemSelector: '.appBox',
    columnWidth: '.appBox-sizer',
    percentPosition: true //이렇게 적어줘야 퍼센티지로 사용 가능하다.

  });
  $.getJSON("/Gold/data/json/app.json", function(data){
    // console.log(data[0].appclient);
    let items = [];
    $.each(data, function(i, item){
      // console.log(item);
      let itemHTML = `<div class="appBox">
                        <div>
                          <img src="/Gold/data/app_page/app_thumb/${item.appthumb}" alt="">
                          <h2>${item.apptitle}</h2>
                          <a href="#">View Details</a>
                        </div>
                      </div>`
      items.push($(itemHTML).get(0));
    });

    $(".appBoxes").append(items);

    $(".appBoxes").imagesLoaded(function(){
      $(items).removeClass("is-loading");
      $(".appBoxes").masonry("appended", items);
    });
  });

});
