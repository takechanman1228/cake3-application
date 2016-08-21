var changeTab = function(currentPage){

  $('.tabBtns li').removeClass('active')
  $('.tabContent section').removeClass('active')

  if(currentPage==0){ //score
    $('#scoreBtn').addClass('active')
    $('#scoreContent').addClass('active')
  }else if (currentPage==1) { //story
    $('#storyBtn').addClass('active')
    $('#storyContent').addClass('active')
  }else{ //goods
    $('#goodsBtn').addClass('active')
    $('#goodsContent').addClass('active')
  }

}



$(document).ready(function(){

  var currentPage = 1;

  $('.tabBtns li').click(function(){

    if($(this).attr('id')=='scoreBtn'){
      currentPage = 0;
    }else if($(this).attr('id')=='storyBtn'){
      currentPage = 1;
    }else{
      currentPage = 2;
    }

    changeTab(currentPage)

  });




});

