<html>
<head>
<script>
	function swap1()
	{
		var txt1 = document.getElementById("img1");
		var txt2 = document.getElementById("img2");
		var txt = txt1.src;
		txt1.src = txt2.src;
		txt2.src = txt;
	}
</script>
</head>

<body>
<img src="img1.jpg" id="img1" height="255" />
<img src="img2.jpg" id="img2" height="255" />
<br /><input type="button" value="Swap images" onclick="swap1()" />
</body>
</html>