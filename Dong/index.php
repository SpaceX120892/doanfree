<!DOCTYPE html>
<html>
<head>
	<title>Fashion - Store</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
		$("#btnX").click(function(){
			var screenWidth = $(".slider").width();
			var tab1Width = $(".tab1").width();
			var posXOfTab1 = (screenWidth/2) + (tab1Width/2);
			$(".tab1").animate({left: posXOfTab1},"slow");
		});
	});
</script>
</head>
<body data-spy="scroll" data-target=".header-top">
	<div class="container-fluid">
		<?php
		include 'view/header.php';
		include 'view/menu.php';
		include 'view/container.php';
		include 'view/footer.php';
		?>
	</div><!--End container-fluid-->
</body>
</html>