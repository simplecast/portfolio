var colorarry = []

backgroundColors(colorarry);

function backgroundColors(colors){
  for(var i=0 ; i < colors.length; i++){
    $("#backgroundCanvas").css("background","linear-gradient(white,blue)");
  }
}