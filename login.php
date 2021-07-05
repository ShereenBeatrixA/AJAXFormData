<!DOCTYPE html>
<html lang="en">
<head>
  <title>Perancangan Sistem 4</title>
  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initialscale=1">
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>


<div class="container col-5">
  <div class="card-text">
    <div class="card" style="width:500px">
      <div class="card-body text-center">
        <h3 class="card-title">Login</h3>
        <?php
        error_reporting(E_ALL ^ E_NOTICE);
        include 'koneksi.php';
        if (isset($_POST['login']))
        {
          $uname = $_POST['username'];
          $pass = $_POST['password'];
          $query = mysqli_query($connect, "SELECT * from tabel_anggota WHERE username='$uname' and password='$pass'");
          $cek = mysqli_num_rows($query);
          if ($cek > 0)
          {
            setcookie("username", $uname, time()+3600 );
            setcookie("password", $pass, time()+3600 );
            header("Location: input.php");
          }
          else
          {
            echo "Username dan Password Tidak Tepat";
          }
        }
?>
        <form method="post" action="login.php" autocomplete='off'>
            <div class="formgroup">
                <label class="control-label col-sm-12" for="username">Username:</label>
                <div class="col-sm-12">
                <input type="text" class="form-control" name="username" placeholder="Input Username" name="username" autofocus>
          </div>
          <div class="formgroup">
                <label class="control-label col-sm-12" for="password">Password:</label>
                <div class="col-sm-12"> 
                <input type="password" class="form-control" name="password" placeholder="Input Password" name="password">
                </div>
          </div>
          <br>
            <button type="submit" name="login" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> Login</button>
          </form>

          

      </div>
    </div>
  </div>
</div>
</div>

 <Link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
  
<script src="js/bootstrap.min.js"></script>
</body>
</html>