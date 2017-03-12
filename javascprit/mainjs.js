var clicked;
var acount= new ArrarCounter();
//alert("here");
$("a").click(function(){
  clicked = $(this).data('id');
  switch(clicked){
    case "home":{
      displaynow("#homecont",["#codecont","#contactcont"]);
      switchactive($(this).parent()[0]);
      break;
    }case "codes":{
      displaynow("#codecont",["#homecont","#contactcont"]);
      switchactive($(this).parent()[0]);
      break;
    }case "contacts":{
      displaynow("#contactcont",["#homecont","#codecont"]);
      switchactive($(this).parent()[0]);
      break;
    }
  }
})
var d = {"g":9,"y":[]};
console.log(acount.count);
function displaynow(clas,a=[]){
  $(clas).removeAttr('class',"clo");
  $(clas).attr('class',"cont");
  for(var i=0; i<a.length; i++){
    $(a[i]).attr('class',"clo");
  }
}
function switchactive(aobj){
  $(aobj).attr('class',"active");
      
  for(var i =0; i < $ ('li').length; i++ ){
    if($($('li').get(i)).data('id') != $(aobj).data('id')){
      $($('li').get(i)).removeAttr('class',"active");
    }
  }
}
function displaycurrent(clas, val){
  $(clas).removeAttr('class',"clo");
  console.log($(clas));
  for(var i=0; i < $(".pages")[0].childElementCount; i++){
    if($(".pages").children(i).get(i).id != val){   
      $("#"+$(".pages").children(i).get(i).id).attr('class',"clo"); 
    }
  }
}

