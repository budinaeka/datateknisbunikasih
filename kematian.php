<?php
session_start();
$username = $_SESSION['username'];
$isLoggedIn = $_SESSION['isLoggedIn'];
 
if($isLoggedIn != '1'){
    session_destroy();
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <title>Database Bunikasih</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  	<body style="background-color: #eee;">   
	 	<nav class="navbar navbar-inverse navbar-fixed-top">
	      <div class="container-fluid">
	        <div class="navbar-header">
	          <a class="navbar-brand" href="#">Data Teknis </a>
	        </div>
	        </div>
	    </nav>
        
	    <div class="container">
	    <h3 class="judul">Kelahiran Pedet</h3>
      <table class="table">
        <thead>
            <tr>
                <td>No.</td>
                <td>Tanggal</td>
                <td>No Eartag</td>
                <td>Penyebab</td>
            </tr>
          </thead>
      </div>
	</body>
	</<!DOCTYPE html>
	</html>
