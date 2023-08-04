<?php
	include "dbconnection.php";
  
  error_reporting(0);
  if (@$_REQUEST['c_id']=="")
  {
    $action="insert";
  }
  else
  {
    $action="update";
    
  }


?>
<!DOCTYPE html>
<head>
<title> Registration </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>

<div class="w3layouts-main">
	<h2>Add category</h2>
		<form action="index.php?page=cat_action" method="post">
			<input type="hidden" name="action" value="<?php echo $action; ?>">
			<input type="hidden" name="c_id" value="<?php echo $_REQUEST['c_id']  ?>"> 
			<input type="text" class="ggg" name="c_name" placeholder="NAME" >
			
				<input type="submit" value="submit" name="category">
		</form>
		
</div>
<!---728x90--->
</div>

</body>

</html>
