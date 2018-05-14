// findMax.js

var int1 = window.prompt("Please enter the first integer: \n", "");
var int2 = window.prompt("Please enter the second integer: \n", "");
var int3 = window.prompt("Please enter the third integer: \n", "");
var int4 = window.prompt("Please enter the fourth integer: \n", "");
var int5 = window.prompt("Please enter the fifth integer: \n", "");

var max1 = Math.max(int1, int2, int3, int4, int5);

function findmax(int1, int2, int3, int4, int5) {
  var temp = int1;

  if (int2>temp){
    temp = int2;
  }
  if (int3>temp){
    temp = int3;
  }
  if (int4>temp){
    temp = int4;
  }
  if (int5>temp){
    temp = int5;
  }

  return temp;
}

var max2 = findmax(int1, int2, int3, int4, int5);


window.alert("The max of your integers using math.max is " + max1 + ".\n The max of your integers using my own function is " + max2 + ".");
