<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="cool.css">
  <title>FE ACTIVITY 5,6,7 </title>
</head>
<body>
<style>
table, td {
  border: 2px solid black;
  background:white;
  color:black;
}
</style>

<center><h2>ACTIVITY 5,6,7</h2></center>


<center><div style="padding: 15px 15px 15px 15px;" id="container-input"></div>
  
<button class="btn" onclick="AddInputBox()">ADD MORE + </button>

<button class="btn" onclick="GetData()"> SUBMIT </button>

</center>
<table id="table">
</table>



<script>
var count = 1;

  function AddInputBox() {
  var inputBox = document.createElement("INPUT");
  inputBox.setAttribute("id", "input_id"); 
  inputBox.setAttribute("type", "text");
  inputBox.setAttribute("name", "input_name");
  inputBox.setAttribute("placeholder", "Fullname");
  document.getElementById("container-input").appendChild(inputBox);


  var x = document.createElement("LABEL");
  var t = document.createTextNode("Siblings " + count.toString());
  count++;
  x.setAttribute("for", "labels");
  x.appendChild(t);
  document.getElementById("container-input").insertBefore(x,document.getElementById("labels"));

        var br = document.createElement("br");
        var breaker = document.getElementById("container-input");
        breaker.appendChild(br);

}


function GetData() {
  const full = document.querySelectorAll('[name="input_name"]');
  
  var arr = [...full].map(input => name+input.value);
  var newObject = new Object();
  var stringMode = "";

 for (var i = 0; i < arr.length; i++) {
  newObject.fullname = arr[i];
  stringMode += "name" + [i] + "=" + arr[i] +"&";
 }
console.log(arr);
console.log(stringMode);

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     var newFormat = JSON.parse(this.responseText);
      
      for (var i = 0; i < arr.length; i++) {
        var stringName = "name" + i;
        //document.getElementById("demo").innerHTML += newFormat[stringName];
            var table = document.getElementById("table");
            var row = table.insertRow(0);
            var cell1 = row.insertCell(0);
            cell1.innerHTML = newFormat[stringName];

      }

    }
  };
  xhttp.open("POST", "echo.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(stringMode);
}

</script>
  
</body>
</html>