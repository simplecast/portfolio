var clicked;
//alert("here");
$("a").click(function(){
  clicked = $(this).data('id');
  switch(clicked){
    case "home":{
      //$(this).attr("class",".page");
      $("#code").attr("class",".closed");
      break;
    }
  }
})

