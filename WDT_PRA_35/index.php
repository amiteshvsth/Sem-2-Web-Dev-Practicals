<html>
<head>
<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</script>
<script>
$(document).ready(function(){
$("button").click(function(){
$("#div_content").load("test.txt", function(response,
status, http){
if(status == "success")
alert("Content loaded successfully!");
if(status == "error")
alert("Error: " + http.status + ": "
+ http.statusText);
});
});
});
</script>
<style>
body {
text-align: center;
}
.gfg {
font-size:40px;
font-weight: bold;
color: green;
}
.geeks {
font-size:17px;
color: black;
}
#div_content {
font-size: 40px;
font-weight: bold;
color: green;}
</style>
</head>
<body>
<div id="div_content">
<div class = "gfg">L.D. College of Engineering.</div>
<div class = "geeks">Ahmedabad</div>
</div>
<button>Change Content</button>
</body>
</html>