<?php
    
    $form =  array();
    $form['fname']=$form['lname']=$form['email']=$form['phone']=$form['msg']='';
    $fname=$lname=$email=$phone='';
         
$conn= mysqli_connect('localhost','vasanth','1234','kintch');
         
         	
            if (isset($_POST['submit'])) {
            {
         	if(empty($_POST['fname'])){
                     
                     $form['fname']="Enter your First name";
         	   }
               else {
               	       $fname= $_POST['fname'];
               	       if (!preg_match('/^[a-zA-Z\s]+$/', $fname)) {
               	             $form['fname']="Enter a valid First name";
               	              $fname='';
               	       }

                   }

            }
         	

         	{if(empty($_POST['lname'])){
                     
                     $form['lname']="Enter your Last name";
         	}
                  else{     $lname=$_POST['lname'];
                  	       if(!preg_match('/^[a-zA-Z\s]+$/', $lname))
                  	       {
                  	       	$form['lname']="Enter a valid Last name";
                  	       	$lname='';
                  	       }
                     }
                 

            }
         	
         	{	if(empty($_POST['email'])){
                     
                     $form['phone']="Enter your E-mail";

         	}
         	    else{    $email=$_POST['email'];
         	    	   if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
         	    	   {
                                 $form['phone']="Enter a valid E-mail";
                                 $email='';
         	    	   }
         	    }


         }

         	if(empty($_POST['phone'])){
                     
                     $form['phone']="Enter your Phone  Number";
         	}
         	if(empty($_POST['msg'])){
                     
                     $form['msg']="Enter your Message";
         	}
         	

         	{ if (!array_filter($form)) {

         		$email= mysqli_real_escape_string($conn,$_POST['email']);
         		$fname= mysqli_real_escape_string($conn,$_POST['fname']);
         		$lname= mysqli_real_escape_string($conn,$_POST['lname']);
         		$phone= mysqli_real_escape_string($conn,$_POST['phone']);
         		$msg  = mysqli_real_escape_string($conn,$_POST['msg']);


         		$sql = "INSERT INTO kintchtb(Firstname,Lastname,Email,Phone,Message) VALUES('$fname','$lname','$email','$phone','$msg')";

                 $query= mysqli_query($conn,$sql);
                }
         		 if(!array_filter($form)){
         		 	 header('Location:project.php');
         		 }
         	   
         	   
             }
            
            }
    


?>



<!DOCTYPE html>
<html>
<head>
	<title>Keep in Touch</title>
   
	<style type="text/css">
		*{
			box-sizing: border-box;
            font-family: Arial;
           
		}
		#title{
			
			margin-top: 40px;
			text-align: center;
			font-size: 55px;
			margin-bottom: 10px;
            font-family: Arial;
            color: white;
			
		}
		#title2{text-align: center;
			font-size: 30px;
            font-family: Arial;
            color: white;

		}
		#formgrid{
			  margin: 0px 19.2vw 10px 19.2vw ; 
	          display: grid;
			  grid-template-columns: repeat(2,1fr);
			  grid-auto-rows: minmax(70px,auto);
			  grid-column-gap: 15px;
			  align-items: start;

		}
		
	
          
		input{
			     width: 27.86vw;
			    
		}
		input[type=text],input[type=email]{
			               padding: 10px 20px 10px 10px;
		}
		textarea{ margin-left: 19.2vw;
			      width:60vw;
			      resize:none;
			      height: 200px;
                  color: black;
		}
		input[type=submit]{
			        width: 15vw;
			        margin:20px  42.5vw  30px 42.5vw;
		}
		}
		
		
	</style>
</head>
<body style="background-color: rgba(0,0,0,0.9);">
	
	<br />

	<p id="title">Nice To Meet You!</p>
	<p id="title2">Have a question or just want to Get in Touch</p>
	
	 <form method="POST" action="test1.php" target="_self">
        	<div id="formgrid">
        		<div > 
        			<label for="fname" style="color: white;">First Name</label>
                    <input type="text" name="fname" value="<?php echo htmlspecialchars($fname);?>" style="margin-right: 39px;">
                    <p style="color: red;margin-top: 0px;"><?php  echo $form['fname']; ?></p>
                </div>
        		
        		<div>
        			 <label for="lname" style="color: white;">Last Name</label>
                      <input type="text" name="lname" value="<?php echo htmlspecialchars($lname);?>">
                    <p style="color: red;margin-top:0px;">   <?php  echo $form['lname']; ?> </p> 
        		</div>
        		
        		<div >
        			  <label for="email" style="color: white;">E-mail</label>
                       <input type="email" name="email" value="<?php echo htmlspecialchars($email);?>" style="margin-right: 39px;">
        		</div>
        		
        		<div >
        			   <label for="phone" style="color: white;">Phone Number</label>
                       <input type="text" name="phone" value="<?php echo htmlspecialchars($phone);?>">
                     <p style="color: red;margin-top: 0px;">    <?php  echo $form['phone']; ?></p>
        		</div>
        		
        		
        	</div>
        	<div>
        			
	    	<textarea name="msg" >Your Message</textarea>
	    	 <p style="color: red;margin-left: 22vw">  <?php  echo $form['msg']; ?></p>

        		</div>

        	<input type="submit" name="submit" value="SEND MESSAGE" style="color: black;">
        </form>
</body>
</html>

	    	