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
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script type="text/javascript" src="tinymce/tinymce.min.js"></script>
    <script>
    var lampiran = "";
      $(function() {
        $( "#datepicker" ).datepicker({
          changeMonth: true,
          changeYear: true,
          dateFormat: 'yy-mm-dd'
        });
      });
        tinymce.init({
        selector: "textarea",
        plugins : "table, preview, print",
        });
    </script>
    <style type="text/css">
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
	    	<h3 class="judul">Input Data Pengobatan</h3> 
        
        <form action="simpan_obat.php" name="input_data" method="post" role="form">
        <div class="form-group">
           
            <div class="row">
                    <div class="col-md-3"> Tanggal </div>
                    <div class="col-md-7"><input name="tgl_obat" type="text" required="required" id="datepicker" class="form-control"></div>
            </div> 
            <div class="row">
                    <div class="col-md-3"> No eartag</div>
                    <div class="col-md-7"><input name="no_eartag" type="text" required="required" class="form-control"></div>
            </div>
            <div class="row">
                    <div class="col-md-3"> Gejala/Diagnosa</div>
                    <div class="col-md-7"><input name="gejala_diag" type="text" required="required" class="form-control"></div>
            </div>         
            <div class="row">
                    <div class="col-md-3"> Obat yang diberikan </div>
                    <div class="col-md-7"><input name="nama_obat" type="text" required="required" class="form-control"></div>
            </div>
            <div class="row">
                    <div class="col-md-3"> Jumlah (ml) </div>
                    <div class="col-md-7"><input name="jml_obat" type="text" required="required" class="form-control"></div>
            </div>
            <div class="row">
                    <div class="col-md-3"> Petugas</div>
                    <div class="col-md-7"><input name="nama_petugas" type="text" required="required" class="form-control"></div>
            </div>
            </div>
            <div class="row"><div class="tengah">
            <div class="col-md-1"><input class="tombol" type="submit" name="submit" value="Simpan"></div></div></div>
    </form>
        <div class="col-md-1"><form action="pengobatan.php"  method="post">
        <input class="tombol" type="submit" value="kembali"></form></div>
    
			
	    </div>
	</body>
	</html>
