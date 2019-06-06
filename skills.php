<?php

?>


<!DOCTYPE html>
<html>
<head>
	<title>My Skills</title>
	
	<style type="text/css">
		*{
			box-sizing: border-box;
			font-family: Arial;
		}
		p{
			text-align:center;
			font-size: 55px;
			position: relative;
			top: 50px;
			color: white;


		}
		div{
			background-color: grey;
			margin: 100px 22vw 50px 22vw;
			height: 50px;

			border-radius: 23px;
		}
		
		 .topic{
			
			   
			     font-style: bold;
			     font-size: 30px;
			     position: relative;
			     right:  90px;
			     top:10px;

			    
		}
		.per{
			 font-style: bold;
			 font-size: 30px;
			 position: relative;
			 left: 57vw;
			 bottom: 45px;

			   
			    
		}
		
	</style>
</head>
<body style="background-color:  rgba(0,0,0,0.9); ;">
	<?php include('header.php'); ?>

	<p>MY SKILLS</p>
 
	<div  style="background-image: linear-gradient(to right,green,black 10%);">
		<h1 style="color: green;" class="topic">CSS </h1>
		<h1 style="color: green;" class="per">10%</h1>
		
	</div>
	<div  style="background-image: linear-gradient(to right,blue,black 5%);">
		<h1 style="color: blue;" class="topic">JS</h1>
		<h1 style="color: blue;" class="per">5%</h1>
		
	</div>
	<div  style="background-image: linear-gradient(to right,yellow,black 15%);">
		<h1 style="color: yellow;" class="topic">PHP</h1>
		<h1  style="color: yellow;" class="per">15%</h1>
		
	</div>



</body>
</html>