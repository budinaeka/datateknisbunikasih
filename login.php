
<?php
session_start();
include 'database.php';
 
if(!empty($_POST)){
     
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $sql = "select * from user where username='".$username."' and password='".$password."'";
    #echo $sql."<br />";
    $query = mysql_query($sql) or die (mysql_error());
 
    // pengecekan query valid atau tidak
    if($query){
        $row = mysql_num_rows($query);
         
        // jika $row > 0 atau username dan password ditemukan
        if($row > 0){
            $_SESSION['isLoggedIn']=1;
            $_SESSION['username']=$username;
            header('Location: index.php');
        }else{ ?>
            <div class="alert alert-warning" role="alert" style="center">username atau password salah</div>
        <?php
        }
    }
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
    <link href="css/signin.css" rel="stylesheet">
    
  </head>
  <body>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
       <h3 class="text-center">DATA TEKNIS BPPIB-TSP BUNIKASIH</h3> 
      
      <form class="form-signin" action="" method="post">
        <h4 class="form-signin-heading">Sign In untuk masuk </h4>
        <label for="inputUsername" class="sr-only">Username</label>
        <input id="inputUsername" class="form-control" placeholder="Username" required="" autofocus="" type="text" name="username">
        <label for="inputPassword" class="sr-only">Password</label>
        <input id="inputPassword" class="form-control" placeholder="Password" required="" type="password" name="password">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
</body>
</html>