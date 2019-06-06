<?php 

$conn= mysqli_connect('localhost','vasanth','1234','kintch');

/*


if (!$conn) {

	echo "connection error :".mysqli_connect_error();
}

$sql = 'SELECT Firstname,Email FROM kintchtb';

$result= mysqli_query($conn,$sql);

$data= mysqli_fetch_all($result,MYSQLI_ASSOC);

mysqli_free_result($result);

mysqli_close($conn);    */







?>
 
<!DOCTYPE html>
<html>
<head>
	<title>Vasanth's Blog</title>
	 <link rel="icon" type="image" href="Blog.png">
	<script src="https://www.w3schools.com/lib/w3.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<style type="text/css">
		*{
			box-sizing: border-box;
			font-family: Arial;
		}
		#main{
			  background-image:  radial-gradient(circle,rgba(0,0,0,1),rgba(0,0,0,0.6));
			  margin:180px 20vw  50px 20vw;
			  width: 60vw;
			  height: 300px;
			  text-align:center;
			  box-shadow: 1px 1px 6px rgba(255,255,255,0.5) ;

			 
		}
		#h1{ 
			color: white;
			position: relative;
			top: 20px;
			font-size: 40px;

		}
		#h2{ 
			color: white;
			margin-top: -10px;
			font-size: 60px;

		}
		#mail{
			position: absolute;
			top: 25px;
			right: 30px;
			color:white;
			padding-right: 20px;
			font-style: italic;
			font-size: 22px;

		}
		#mobile{
			position: absolute;
			top: 25px;
			left: 60px;
			color:white;
			padding-right: 20px;
			font-style: italic;
			font-size: 22px;

		}
		#indiv{
			     background-color: black;	
			     height: 60px;
			     margin-left: 13vw;
			      margin-right:  13vw;
			      margin-top: -15px;
			     
		}
		.sshow{
			  color: white;
		}
		

		
	</style>
</head>

<body style="background-color:  rgba(0,0,0,0.9); ;">
	<?php include('header.php'); ?>

	<i class="fas fa-phone" id="mobile">9381225042</i>
	<i class="far fa-envelope" id="mail">yvr10@iitbbs.ac.in</i>


	<div id="main"> 
                      <p id="h1"> Welcome to my site!</p>
                      <p id="h2">I'm Vasanth</p>

               <div id="indiv" >
               	                 <p class="sshow" style="font-size: 40px;">CSE,IIT BHUBANESWAR</p>
               	                 <p class="sshow" style="font-size: 33px;">CORE TEAM,WISSENAIRE'20</p>
               	                 <p class="sshow" style="font-size: 40px;">FROM VIZAG</p>

               	                 
               </div>



	</div>

<?php include('header.php'); ?>
<script >
	w3.slideshow(".sshow",2000);
</script> 
</body>
</html>