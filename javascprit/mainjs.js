var clicked;
var ObjectIcons = function(){
  this.createElem = function(arg){
    return document.createElement(arg);
  }
  this.tr = this.createElem('tr');
  this.td = this.createElem('td');
  this.img = this.createElem('img');
  this.atag = this.createElem('a');
  this.trs = new Array();
  
  this.atag.appendChild(this.img);
  this.td.appendChild(this.atag);
  this.tr.appendChild(this.td);
  
  this.addtd =function(){
    if(this.tr != undefined){
    
    }
  }
  
  this.appendItem =  function(){
    return this.tr;
  }
}

var objs = new ObjectIcons();

$('.iconss').append(objs.appendItem());

//alert("here");
$("a").click(function(){
  clicked = $(this).data('id');
  switch(clicked){
    case "home":{
      displaynow("#homecont",["#codecont","#gallerycont","#contactcont","#aboutcont"]);
      switchactive($(this).parent()[0]);
      break;
    }case "gallery":{
      displaynow("#gallerycont",["#homecont","#contactcont","#codecont","#aboutcont"]);
      switchactive($(this).parent()[0]);
      break;
    }case "codes":{
      displaynow("#codecont",["#homecont","#gallerycont","#contactcont","#aboutcont"]);
      switchactive($(this).parent()[0]);
      break;
    }case "about":{
      displaynow("#aboutcont",["#homecont","#contactcont","#gallerycont","#codecont"]);
      switchactive($(this).parent()[0]);
      break;
    }case "contacts":{
      displaynow("#contactcont",["#homecont","#codecont","#gallerycont","#aboutcont"]);
      switchactive($(this).parent()[0]);
      break;
    }
  }
})
var d = {"g":9,"y":[]};
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

