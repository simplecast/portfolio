
//if(!firststarted){
//  window.location.href = "#home";
//  firststarted = true;
//}
var logincoord = new loginseq();
logincoord.getmousecoord(document);

var clicked;
window.scrollTo(0,document.body.scrollHeight);



var objs = new ObjectIcons('.iconss');
var cobjs = new ObjectIcons('.iconscode');
objs.newRow();
objs.addtd('button',{text:"Art",index:0});
objs.addtd('button',{text:"Arduino",index:0});


objs.addtd('button',{text:"Raspberry Pi",index:0});
objs.addtd('button',{text:"LattePanda",index:0});

cobjs.newRow();
cobjs.addtd('button',{text:"Android",index:0});
cobjs.addtd('button',{text:"C++",index:0});
cobjs.addtd('button',{text:"C#",index:0});
cobjs.addtd('button',{text:"java",index:0});


cobjs.addtd('button',{text:"Html",index:0});
cobjs.addtd('button',{text:"Javascript",index:0});
cobjs.addtd('button',{text:"PHP",index:0});
cobjs.addtd('button',{text:"Python",index:0});


$('.iconss').append(objs.appendItem());
$('.iconscode').append(cobjs.appendItem());

objs.setRow(1,1);
cobjs.setRow(2,1);


//alert("here");
$(".navtags").on('click touchstart',function(){
  clicked = $(this).data('id');
  switch(clicked){
    case "home":{
      displaynow("#homecont",["#codecont","#projectcont","#contactcont","#aboutcont","#resumecont"]);
      switchactive($(this).parent()[0]);
      resetclasses();
      break;
    }case "projects":{
      displaynow("#projectcont",["#homecont","#contactcont","#codecont","#aboutcont","#resumecont"]);
      switchactive($(this).parent()[0]);
      resetclasses();
      break;
    }case "codes":{
      displaynow("#codecont",["#homecont","#projectcont","#contactcont","#aboutcont","#resumecont"]);
      switchactive($(this).parent()[0]);
      resetclasses();
      break;
    }case "about":{
      displaynow("#aboutcont",["#homecont","#contactcont","#projectcont","#codecont","#resumecont"]);
      switchactive($(this).parent()[0]);
      resetclasses();
      break;
    }case "contacts":{
      displaynow("#contactcont",["#homecont","#codecont","#projectcont","#aboutcont","#resumecont"]);
      switchactive($(this).parent()[0]);
      resetclasses();
      break;
    }
    case "resume":{
      displaynow("#resumecont",["#homecont","#codecont","#projectcont","#aboutcont", "#contactcont"]);
      switchactive($(this).parent()[0]);
      resetclasses();
      break;
    }
  }
})

$(".contact_click").on('click touchstart',function(){
  var conclick =  $(this).data('id');
  switch(conclick){
    case "gmail":{
      $("#messagezone").removeClass('clo');
      $("#messagezone").addClass('message_area');
      $("#contactinf").addClass('linkcount span clo');
      /*$(".linkcont").attr('class','linkcount span clo');
      $(".linkcont").attr('class','linkcount');
      //$(".message_area").removeAttr('class','clo');
      $(".message_area").attr('class','message_area');
      //console.log($(this).parent(0).parent(0).parent(0).parent(0));*/
      $(".contpage").css('overflow',"hidden");
      break;
    }
   
  }
  
});
$("#myemail").on("touchstart click ",function(){
  $("#contactinf").removeClass('.linkcont span clo');
  $(".message_area").addClass('message_area clo');
  $("#contactinf").addClass('linkcount span');
  copyToClipboard("#myemail");
  
  //$(".linkcont").removeAttr('class','linkcount');
});

/*$(".btnclass").on("touchstart click",function(){
  document.location = "./pages/display.php";
});*/

$(".btnclass").on('click',function(e){
  console.log(e.target.innerHTML);
});
var d = {"g":9,"y":[]};
function displaynow(clas,a){
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
  //console.log($(clas));
  for(var i=0; i < $(".pages")[0].childElementCount; i++){
    if($(".pages").children(i).get(i).id != val){   
      $("#"+$(".pages").children(i).get(i).id).attr('class',"clo"); 
    }
  }
}
/*https://codepen.io/shaikmaqsood/pen/XmydxJ/*/
function copyToClipboard(element) {
  //alert($(element).text());
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}

function resetclasses(){
  $("#contactinf").removeClass('.linkcont span clo');
  $(".message_area").addClass('message_area clo');
  $("#contactinf").addClass('linkcount span');
} 
if(window.location.href.includes("projectsw")){
  $('#projectsw').trigger('click');
}else if(window.location.href.includes("codes")){
  $('#Codes').trigger('click');
}else if(window.location.href.includes("about")){
  $('#About').trigger('click');
}

