var colorarry = [];
var da = JSON.parse('[]');

fillarry(colorarry,{"red":"black","blue":"blue","color3":"pink"});
//backgroundColors(colorarry);
//arrayinarray(colorarry,"blue");
//arrayinarray(colorarry,"red");

function fillarry(array,item){
  array = item;
  console.log(da)
  for(var i in array){
    colorarry.push(array[i]);
    //console.log(i);
  }
  
  return colorarry;
}
function backgroundColors(colors,items=""){
  if(items !="")
    colors.push(items);
  for(var i in colors){
    console.log(colors[i]);   
  }
  $("#backgroundCanvas").css("background","linear-gradient("+colors+")");
  
}

//console.log(d.fill);
function arrayinarray(arrgs=[],items){
  console.log(items);
  colorarry.push(items);
  for(var i in arrgs){ 
    //console.log(arrgs[i]);
    backgroundColors(arrgs,items);
  }

}