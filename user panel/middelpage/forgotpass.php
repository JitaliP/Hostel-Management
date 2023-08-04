<!DOCTYPE html>
<html>
    <link rel="stylesheet" type="text/css" href="..\User penal\assets-design\frontend\llh\css\logcss.css">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body class="main-bg">
        <div class="login-container text-c animated flipInX">
                <div>
                    
                </div>
                <div class="container-content">
                    <form class="margin-t" action="registration_action.php" method="post">
                            <input type="hidden" name="action" value="">
                            <input type="hidden" name="id" value="">
        
                    	<div>
                    		<h1 class="logo-badge"><i class="fas fa-user-circle text-white" ></i></h1>
                    		<h2 class="text-whitesmoke">Forgot Password </h2>
                    		<hr class="bg-info">
                    		<!-- <p class="text-whitesmoke"></p> -->
                    	</div>
                        <div class="row">
                            <div class="col-md-12 ">    
                            <input type="text" class="form-control float-left" name=""  placeholder="ID" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email" required="">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="" placeholder="Enter New Password" required="">
                        </div>
                        <button type="submit" class="form-button button-l margin-b" name="submit">Change Password</button>
        
                        <p class="text-whitesmoke text-center"><small>Login into another account.</small><br>
                        <a class="text-info" href="index.php?page=login"><small>Login</small></a>
                    </form>
                    <p class="margin-t text-whitesmoke"><small> LLH &copy; 2018</small> </p>
                </div>
            </div>
</body>

</html>