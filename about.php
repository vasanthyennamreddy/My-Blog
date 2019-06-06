<?php

?>

<!DOCTYPE html>
<html>
<head>

	<title>About Me</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<style type="text/css">
        *{
            font-family: Arial;
        }
		#para{
			margin: 50px 22vw;
		}
		#cols{
			display: grid;
			margin: 0vw 8.8vw;
			grid-template-columns: repeat(3,1fr);
			text-align: center;
			grid-auto-rows:  minmax(10px,auto);
            		    
		}
		#content{
			display: grid;
			grid-template-columns: repeat(3,1fr);
            margin: 0px 8.8vw;
			grid-auto-rows:  minmax(400px,auto);
			

            		    
		}
		.bs{
			box-shadow: 5px 5px 5px rgba(0,0,0,0.2);
		}
	</style>
</head>
<body>
         <?php include('header.php'); ?>
      
        <div style="margin-top: 80px;"><h1 style="color: red;text-align: center;">PROFILE</h1></div>
        

        <div id="para" ><p style="text-align: center;margin-top: -20px;font-size: 20px;">My name is Y VASANTH KUMAR REEDY, currently studying in IIT Bhubaneswar,B.Tech in Computer Science. My favourite subjects are physics,computers and mathematics.I am from Visakhapatnam. </p></div>

        <div id="cols">
        	<div style="background-color: orange;"></div>
        	<div style="background-color: blue;"></div>
        	<div style="background-color: green;"></div>
       
        </div>
         <div id ="content">	
        	<div  class="bs" style="background-color: rgba(0,0,0,0);">
        		 <i style="margin: 20px 0px 0px 10px;color: orange;" class="fas fa-graduation-cap"></i>
                 <h2 style="color: orange; margin-left: 10px">Education</h2>

        	</div>
        	
            <div class="bs"  style="background-color: rgba(0,0,0,0);">
        		<i class="fas fa-code" style="margin:20px 0px 0px 10px;color: blue;"></i>
        		<h2 style="color:blue;margin-left: 10px">Expertise</h2>
        	</div>
        	
            <div class="bs"  style="background-color: rgba(0,0,0,0);">
        		<i class="fas fa-award" style="margin:20px 0px 0px 10px;color:green;"></i>
        		<h2 style="color: green; margin-left: 10px"> Achievements</h2>
        	</div>
        </div>

</body>
</html>