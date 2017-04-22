var colorarry = []

backgroundColors(colorarry);

function backgroundColors(colors,sizecomp=0){
  if(sizecomp > colors.length)
  for(var i=0 ; i < colors.length; i++){
    $("#backgroundCanvas").css("background","linear-gradient(white,blue)");
  }
}