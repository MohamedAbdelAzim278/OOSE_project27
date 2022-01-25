


var rich = document.getElementById("Rich");
var poor = document.getElementById("Poor");
var h_monitor = document.getElementById("HR");
var p_warmers = document.getElementById("PW");
var h = document.getElementById("ID");
var i  = 0;

var services = [];

 function Add(x)
 {
    services.push(x);
    alert(services);
 }
function submitJArray()
   {
      alert("es");
    var src = "RoomAdd.php?services="+services;
    window.location.href = src;
   
   }
