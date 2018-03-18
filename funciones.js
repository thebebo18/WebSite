var myIndex = 0;
var myIndex2 = 0;
carouse();
carouse2();

function carouse() {
var i;
var x = document.getElementsByClassName("mySlides");
for (i = 0; i < x.length; i++) {
x[i].style.display = "none";  
}
myIndex++;
if (myIndex > x.length) {myIndex = 1}    
x[myIndex-1].style.display = "block";  
setTimeout(carouse, 3000);
}
function carouse2() {
var i2;
var x = document.getElementsByClassName("mySlides2");
for (i2 = 0; i2 < x.length; i2++) {
x[i2].style.display = "none";  
}
myIndex2++;
if (myIndex2 > x.length) {myIndex2 = 1}    
x[myIndex2-1].style.display = "block";  
setTimeout(carouse2, 3000);
}