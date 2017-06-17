var firststarted = false;
var loggedon = 0;
var loginseq = function () {
  this.boolpatter1 = false;
  this.boolpatter2 = false;
  this.counter1 = 0;
  this.counter2 = 0;
  this.getmousecoord = function (doc) {
    
    window.addEventListener('mouseover',function(e){
      
      if(e.clientX ==0 && e.clientY <= e.clientY){
        if(!isNaN(this.counter1) || this.counter1 != undefined){
          this.counter1++;
          console.log(this.counter1);
        }
        this.boolpatter1 = true;
      }
     if(e.clientX >= e.clientX && e.clientY == 0){
        this.boolpatter2 = true;
      }
      if(this.boolpatter1 != undefined ||this.boolpatter2 != undefined){
        if(this.boolpatter1 && this.boolpatter2){
          //alert('do work');
          var admode = doc.getElementById('admode');
          var adlogsubmit = doc.getElementById('adlogsubmit');
          admode.style.visibility = "visible";
          adlogsubmit.style.visibility = "visible";
        }
      }
    });
    
  }
  
};
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
    this.tr.style.cssText = "height:20vmin; padding:10px;";
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
