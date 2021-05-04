<?php
  include "database.php";
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>School Management System</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body class="back">
    <?php include"navbar.php";?>
    
    
    <div class="login">
      <h1 class="heading">Admin Login</h1>
      <div class="log">


<?php
        if(isset($_POST["login"]))
        {
          $sql="select * from admin where ANAME='{$_POST["aname"]}' and APASS='{$_POST["apass"]}'";
          $res=$db->query($sql);
          if($res->num_rows>0)
          {
            $ro=$res->fetch_assoc();
            $_SESSION["AID"]=$ro["AID"];
            $_SESSION["ANAME"]=$ro["ANAME"];
            echo "<script>window.open('admin_home.php','_self');</script>";
          }
          else
          {
            echo "<div class='error'>Invalid Username or Password</div>";
          }
          
        }
        if(isset($_GET["mes"]))
        {
          echo "<div class='error'>{$_GET["mes"]}</div>";
        }
        ?>



        <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
          <label>User Name</label><br>
          <input type="text" name="aname" id="username" placeholder="Enter username" onkeyup="checkName()" onblur="checkName()"><br><br>
          
          <label>Password </label><br>
          <input type="password" name="apass" placeholder="Enter Password" onkeyup="checkPass()" onblur="checkPass()"><br>

          <input type="checkbox" checked="checked" name="remember"> Remember me

          <button type="submit" class="btn" name="login">Login Here</button>
        </form>

        </div>
    </div>
    
<script src="js/jquery.js"></script>
     <script>
    $(document).ready(function(){
      $(".error").fadeTo(1000, 100).slideUp(1000, function(){
          $(".error").slideUp(1000);
      });
      
      $(".success").fadeTo(1000, 100).slideUp(1000, function(){
          $(".success").slideUp(1000);
      });
    });
  </script>


  </body>
</html>