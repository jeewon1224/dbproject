$(function(){


  let count = 4;
  let addData = 0;
  let allData = [];
  
  
  
  
  $('.appBoxes').masonry({
    // options
    itemSelector: '.appBox',
    columnWidth: '.appBox-sizer',
    percentPosition: true //이렇게 적어줘야 퍼센티지로 사용 가능하다.
    
  });



  $.getJSON("/Gold/data/json/app.json", initAppData);

  function initAppData(data){
    allData = data;
    addAppData();

    $(".appLoadMore").on("click", addAppData);
  }

  function addAppData(e){

    // console.log(data[0].appclient);
    let items = [];
     //json의 정보를 받은 data를 allData에 저장
    let slicedData = allData.slice(addData, addData+count);

    $.each(slicedData, function(i, item){
      // console.log(item);
      let itemHTML = `<div class="appBox">
                        <div>
                          <img src="/Gold/data/app_page/app_thumb/${item.appthumb}" alt="">
                          <h2>${item.apptitle}</h2>
                          <a href="/Gold/pages/app/app_detail.php?num=${item.appnum}">View Details</a>
                        </div>
                      </div>`
      items.push($(itemHTML).get(0));
    });

    $(".appBoxes").append(items);

    $(".appBoxes").imagesLoaded(function(){
      $(items).removeClass("is-loading");
      $(".appBoxes").masonry("appended", items);
    });

    addData += slicedData.length;

  }

});
