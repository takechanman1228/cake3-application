var getData = function(){
  return Math.floor( Math.random() * 5 ) ;
}

var id = 1;
var action = function(){
 console.log(getData());
 
   var $allPlayer = $('.player');
     $allPlayer.removeClass('active');
 
       //var id = getData();
         id += 1;
           if(id>=10){id = 1}
             var comment = 'ほげほげほげ'
               var $activeObj = $('#p'+id);
                 var $activeCommentObj = $('#p'+id+' .comment');
                   $activeCommentObj.text('今バッターボックスにいます。')
 
                     $activeObj.addClass('active')
 
                       console.log($activeObj)
 
                         return $activeObj
 
                         }
 
 
 
                         $(document).ready(function(){
 
                           setInterval(action,6000);
 
                           });
                           
