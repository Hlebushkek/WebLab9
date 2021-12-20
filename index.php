<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="charts1.js"></script>
	<script>
		var loadDocInterval = window.setInterval(loadDocWithInterval, 1000);
		function loadDocWithInterval() {
			loadDoc();
		}
	</script>
</head>
<body>
	<div id="container">
		
	</div>
	<button onclick = "addRandom()">Add Random</button>
	
	<form>
    <input type="number" name="Number" id="Number">
    <input type="submit" name="" value="submit" onclick="return clickButton();">
	</form>
	<script type="text/javascript">
	function clickButton(){
		var number=document.getElementById('Number').value;
		$.ajax({
			type:"post",
			url:"addChartCustom.php",
			data: 
			{  
				'Number' : number,
			},
			cache:false
		});
		return false;
	}
	</script>

</body>
</html>
