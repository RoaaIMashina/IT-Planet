//java script code to view the picture in accordion

var timesClicked = 0;
$(document).ready(function(){
   $("#img1").hide();
  
$("#acc1").click(function() {
timesClicked++;

if (timesClicked%2==0) {
  
  $("#img1").hide();
  $("#img2").hide();
  $("#img3").hide();
  $("#img4").hide();
  $("#img").show();
} else {
 

$("#img").hide();

$("#img1").show();}

});});

var timesClicked1 = 0;
$(document).ready(function(){
  $("#img2").hide();
$("#acc2").click(function() {
timesClicked++;

if (timesClicked%2==0) {
  
  $("#img1").hide();
  $("#img2").hide();
  $("#img3").hide();
  $("#img4").hide();
  $("#img").show();
} else {
 

$("#img").hide();

$("#img2").show();}

});});

var timesClicked1 = 0;
$(document).ready(function(){
  $("#img3").hide();
$("#acc3").click(function() {
timesClicked++;

if (timesClicked%2==0) {
  
  $("#img1").hide();
  $("#img2").hide();
  $("#img3").hide();
  $("#img4").hide();
  $("#img").show();
} else {
 

$("#img").hide();

$("#img3").show();}

});});

var timesClicked1 = 0;
$(document).ready(function(){
  $("#img4").hide();
$("#acc4").click(function() {
timesClicked++;

if (timesClicked%2==0) {
  
  $("#img1").hide();
  $("#img2").hide();
  $("#img3").hide();
  $("#img4").hide();
  $("#img").show();
} else {
 

$("#img").hide();

$("#img4").show();}

});});
