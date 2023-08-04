<?php

  // include "database/dbconnect.php";
  
  ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body class="main-bg">
        <div class="login-container text-c animated flipInX">
                <div class="container-content">
                    <form class="margin-t" action="..\User penal\middelpage\login_action.php" method="post">
                
                    	<div>
                    		<h1 class="logo-badge"><i class="fas fa-user-circle text-white" ></i></h1>
                    		<hr class="bg-info">
                    		<h1 class="text-whitesmoke">LogIn</h1>
                    		<!-- <p class="text-whitesmoke"></p> -->
                    	</div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="pwd" placeholder="*****" >
                        </div>
                        <button type="submit" class="form-button button-l margin-b" name="login">Login</button>

                        <a class="text-info" href="index.php?page=forgotpass"><small>Forgot your password?</small></a>
                        <p class="text-whitesmoke text-center"><small>Do not have an account?</small>

                        <a href="index.php?page=registration">Create an account</a></p>
                        <!-- <a class="text-info" href="registration.php"><small>Sign Up</small></a> -->

                    </form>

                    <?php 
                                if(isset($_SESSION['errorMsg']))
                                {
                                ?>
                                <div class="alert-danger">
                                    <?php echo $_SESSION['errorMsg']; 
                                    unset($_SESSION['errorMsg']); ?>
                                </div>  
                                    
                                <?php } ?>


                     <?php 
                                if(isset($_SESSION['succMsg']))
                                {
                                ?>
                                <div class="alert-success">
                                    <?php echo $_SESSION['succMsg']; 
                                    unset($_SESSION['succMsg']); 
                                ?>
                                </div>  
                                                            
                                 <?php } ?>

                            <p class="margin-t text-whitesmoke"><small> Live like home<img src="assets-design/frontend/llh/img/logo2.png" style="height:20px; width: 20px;"> </small> </p>
                </div>
            </div>
</body>

</html>