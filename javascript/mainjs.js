
if(!firststarted){
  window.location.href = "#home";
  firststarted = true;
}

var clicked;

var ObjectIcons = function(){
  this.createElem = function(arg){
    return document.createElement(arg);
  }
//  this.tr = this.createElem('tr');
////  this.td = this.createElem('td');
////  this.img = this.createElem('img');
////  this.atag = this.createElem('a');
  this.trs = new Array();
  this.tds = new Array();
  
//  this.atag.appendChild(this.img);
//  this.td.appendChild(this.atag);
//  this.tds.push(this.td);
  
  this.newRow = function(){
    this.tr = this.createElem('tr');
    this.tr.setAttribute('class',"iconRows");
    this.tr.style.cssText = "height:20vmin;";
    this.trs.push(this.tr);
  }
  this.createnewObj = function(type,jlist){
    
    this.td = this.createElem('td');
    this.atag = this.createElem('a');
    switch(type){
        case "text":{
          this.ob = this.createElem('div');
          //this.ob.setAttribute("class", "iconText");
          if(jlist.text != null)
            this.ob.textContent =  jlist.text;
          else
            this.ob.textContent =  "T";
          
          this.ob.style.cssText = "font-size:30px;";
          
          break;
        }case "button":{
         
          this.atag = this.createElem('button');
          this.atag.setAttribute('class','btnclass');
          if(jlist.text != null)
            this.atag.textContent =  jlist.text;
          else
            this.atag.textContent =  "T";

          this.atag.style.cssText = "font-size:5vmin;";

          
          break;
        }case "img":{
          
          this.td.style.cssText = "position: relative;"
          +"padding-left: 3vmin;padding-right: 3vmin;";
          this.ob = this.createElem('img');
          this.ob.setAttribute('class','iconimgs btnclass');
          
          if(jlist.src != null){
            this.ob.setAttribute('src', jlist.src);
          }
          if(jlist.alt != null)
            this.ob.alt =  jlist.alt;
          
          break;
        }
        default:{
          
          break;
        }
    
    }
    
    if(this.ob != null || this.ob != undefined){
      //console.log(this.ob);
      this.atag.appendChild(this.ob);
    }
    this.td.appendChild(this.atag);
    return this.td;
  }
  
  
  this.addcount = 0;
  this.addtd =function(type,olist){
    this.tds[this.addcount] = this.createnewObj(type,olist);
    for(var i=0; i < this.trs.length; i++){
      if(this.trs[i] != undefined){
          if(olist.index != null)
            this.trs[olist.index].appendChild(this.tds[this.addcount]);
      }
    }
   
    
      

    this.addcount++;
  }
  
  
  this.appendItem =  function(){
    return this.trs;
  }
}

var objs = new ObjectIcons();
var cobjs = new ObjectIcons();
objs.newRow();
objs.addtd('button',{text:"Art",index:0});
objs.addtd('button',{text:"Arduino",index:0});
objs.newRow();
objs.addtd('button',{text:"Raspberry Pi",index:1});
objs.addtd('button',{text:"LattePanda",index:1});

cobjs.newRow();
cobjs.addtd('img',{src:"assets/images/Android_robot.png",alt:"android",index:0});
cobjs.addtd('img',{src:"assets/images/C_plus_plus.png",alt:"android",index:0});
cobjs.addtd('img',{src:"assets/images/C_Sharp.png",alt:"android",index:0});
cobjs.addtd('img',{src:"assets/images/java-logo.png",alt:"android",index:0});
cobjs.addtd('img',{src:"assets/images/CSS3_and_HTML5_logos_and_wordmarks.svg.png",alt:"android",index:0});
cobjs.newRow();
cobjs.addtd('img',{src:"assets/images/JavaScript_logo.png",alt:"android",index:1});
cobjs.addtd('img',{src:"assets/images/PHP-logo.svg.png",alt:"android",index:1});
cobjs.addtd('img',{src:"assets/images/Python-logo-notext.svg.png",alt:"android",index:1});

$('.iconss').append(objs.appendItem());
$('.iconscode').append(cobjs.appendItem());


//alert("here");
$(".navtags").on('click touchstart',function(){
  clicked = $(this).data('id');
  switch(clicked){
    case "home":{
      displaynow("#homecont",["#codecont","#projectcont","#contactcont","#aboutcont"]);
      switchactive($(this).parent()[0]);
      resetclasses();
      break;
    }case "projects":{
      displaynow("#projectcont",["#homecont","#contactcont","#codecont","#aboutcont"]);
      switchactive($(this).parent()[0]);
      resetclasses();
      break;
    }case "codes":{
      displaynow("#codecont",["#homecont","#projectcont","#contactcont","#aboutcont"]);
      switchactive($(this).parent()[0]);
      resetclasses();
      break;
    }case "about":{
      displaynow("#aboutcont",["#homecont","#contactcont","#projectcont","#codecont"]);
      switchactive($(this).parent()[0]);
      resetclasses();
      break;
    }case "contacts":{
      displaynow("#contactcont",["#homecont","#codecont","#projectcont","#aboutcont"]);
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

$(".btnclass").attr('onclick','<?php echo "here" ?>')
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


