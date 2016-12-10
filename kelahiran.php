<?php
session_start();
$username = $_SESSION['username'];
$isLoggedIn = $_SESSION['isLoggedIn'];
 
if($isLoggedIn != '1'){
    session_destroy();
    header('Location: login.php');
}
mysql_connect("localhost", "indone16", "sukabumi84");
  mysql_select_db("indone16_bunikasih");
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
                <td>No Eartag Induk</td>
                <td>No Eartag Anak</td>
                <td>BB</td>
                <td>TB</td>
                <td>PB</td>
                <td>Ket.</td>
            </tr>
          </thead>
          <tbody>
            <?php 
                $query = mysql_query("select * from kelahiran");
                $no = 1;
                if ($query === FALSE) {
                    die(mysql_error());
                    }
                while ($data = mysql_fetch_array ($query))  {
            ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data['tgl_lahir']; ?></td>
                        <td><?php echo $data['no_eartag_indk']; ?></td>
                        <td><?php echo $data['no_eartag_anak']; ?></td>
                        <td><?php echo $data['berat_badan']; ?></td>
                        <td><?php echo $data['tinggi_badan']; ?></td>
                        <td><?php echo $data['panjang_badan']; ?></td>
                        <td><?php echo $data['keteranagan_lahir']; ?></td>
                    </tr>
            <?php 
                $no++;  
                  } 
            ?>
    </tbody>
	    </div>
	</body>
	</html>
