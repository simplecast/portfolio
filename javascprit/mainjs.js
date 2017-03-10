var clicked;
//alert("here");
$("a").click(function(){
  clicked = $(this).data('id');
  switch(clicked){
    case "home":{
      displaycurrent("#home","home");  
      break;
    }case "codes":{
      displaycurrent("#code","code");
      break;
    }case "contacts":{
      displaycurrent("#contact","contact");
      break;
    }
  }
})

function displaycurrent(clas, val){
  $(clas).removeAttr('class',"clo");
  console.log($(clas));
  for(var i=0; i < $(".pages")[0].childElementCount; i++){
    if($(".pages").children(i).get(i).id != val){
      
      $("#"+$(".pages").children(i).get(i).id).attr('class',"clo"); 
    }
  }
}

