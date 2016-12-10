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
	    <h4>Selamat Datang <?php echo $username; ;?>   <a href="logout.php">Logout</a></h4>
	      <div class="row">
	          <div class="row placeholders">
	            <div class="col-xs-6 col-sm-3 placeholder">
	              <a href="pengobatan.php"><img src="pengobatan.gif" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
	              <h4>Pengobatan</h4>
	              <span class="text-muted">Tanggal, Gejala dan Obat yang diberikan</span></a>
	            </div>
	            <div class="col-xs-6 col-sm-3 placeholder">
	              <a href="ib.php"><img src="ib.gif" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
	              <h4>Inseminasi Buatan</h4></a>
	              <span class="text-muted">Tanggal dan kode semen</span>
	            </div>
	            <div class="col-xs-6 col-sm-3 placeholder">
	              <a href="kelahiran.php"><img src="lahir.gif" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
	              <h4>Kelahiran</h4></a>
	              <span class="text-muted">Tanggal eartag induk & anak</span>
	            </div>
	            <div class="col-xs-6 col-sm-3 placeholder">
	              <a href="kematian.php"><img src="mati.gif" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
	              <h4>Kematian</h4></a>
	              <span class="text-muted">Tanggal dan penyebab</span>
	            </div> 
	          </div>
	        </div>
	      </div>
   

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
	</body> 
</html>