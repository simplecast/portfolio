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
