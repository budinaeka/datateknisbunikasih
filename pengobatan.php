<?php
session_start();
$username = $_SESSION['username'];
$isLoggedIn = $_SESSION['isLoggedIn'];
 
if($isLoggedIn != '1'){
    session_destroy();
    header('Location: login.php');
}
include 'koneksi.php';

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
    <style>
    .btn{
        width: 200px;
        color: black;
        background-color: lightgrey;
        text-align: center;
        padding: 10px;
        text-decoration: none;
        margin-bottom: 40px;
        border-radius: 20px;
        }
    </style>
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
	    	<h3 class="judul">Pengobatan dan Penggunaan Obat</h3> <div class="judul">
        <a href="input_obat.php" class="btn">Input Data Pengobatan</a>
			<table class="table">
				<thead>
    				<tr>
        				<td>No.</td>
						<td>Tanggal</td>
        				<td>No Eartag</td>
        				<td>Gejala/Diagnosa</td>
						<td>Obat yang digunakan</td>
						<td>Jumlah (ml)</td>
						<td>Petugas</td>
					</tr>
    			</thead>
                <tbody>
            <?php 
                $query = mysql_query("select * from pengobatan");
                $no = 1;
                if ($query === FALSE) {
                    die(mysql_error());
                    }
                while ($data = mysql_fetch_array ($query))  {
            ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data['tgl_pengobatan']; ?></td>
                        <td><?php echo $data['no_eartag_obat']; ?></td>
                        <td><?php echo $data['gjl_diag']; ?></td>
                        <td><?php echo $data['obat']; ?></td>
                        <td><?php echo $data['jml_obat']; ?></td>
                        <td><?php echo $data['petugas_obat']; ?></td>
                    </tr>
            <?php 
                $no++;  
                  } 
            ?>
    </tbody>
    <a href="index.php" class="btn">Kembali</a>
	    </div>

	</body>
	</html>
