<?php 
        if ( !isset($_SESSION) ) session_start();

        if(isset($_SESSION["user"]))
        {
            header("Location: customerhome.php");
        }


?>

<html>
<head>
	

<title>customer-feedback-management</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>  
<body>  


		

		
		
		<br><br>

        

		<div class="container">

	    	<div class="d-flex justify-content-center align-items-center ">
	    		<div class="row">
	    			<div class="col-sm-4">
	    				<h3><b>CUSTOMER LOGIN</b></h3>
	    			    <hr>
	    			</div>
	    		</div>
	    		<div class="row">
	    		
	    			<div class="col-sm-4">
                    <?php 

                            if(isset($_SESSION["error"]))
                            {
                                echo "<p class=\"text-danger\">",$_SESSION["error"],"</p>" ;
                                unset($_SESSION["error"]);
                            }
                            


                    ?>

	    				
	    				<form action = "authentication.php"  method = "POST">
							Username : <input autocomplete="off" class="form-control" type="text" name="user" required="">
							<br><br>

							Password  : <input autocomplete="off" class="form-control" type="password" name="pass" required="">
							<br><br>
							
							<button class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> Login</button>
				        </form>
						<br>
						new user? <a href="index.php"> Signup</a>
	    			</div>
	    		
	    	    </div>
	    		
	    	</div>
    	
        </div>

       
		



	
 
</body>  
</html>  