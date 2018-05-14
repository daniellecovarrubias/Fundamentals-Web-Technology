// name.js
var name = window.prompt("Please enter your first name here: \n", "");
var length = name.length;
var state = "";

if (length<=15){
  state = "legal name";
} else{
  state = "illegal name";
}

window.alert(state);
