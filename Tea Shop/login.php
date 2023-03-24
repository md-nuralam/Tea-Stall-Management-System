<?php
  // define variables and set to empty values
   $unameErr =  "";
   $uname =  "";

     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["uname"])) {
           $unameErr = "Name is required!";
         } else {
           $uname = test_input($_POST["uname"]);

    // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$uname)) {
        $unameErr = "Only letters and white space allowed!";
        }
     }    
      
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  ?>
  
  <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "TeaShop";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST["submit"])){

     $uname= $_POST ["uname"];
	   $password= $_POST ["password"];
     
     
	

   $sql = "select * from registration where name='$uname' and password='$password' ";
   
   $check = mysqli_query($conn, $sql);

  
	   if(mysqli_num_rows($check)>0){
		   echo"<script> alert('You are successfully logged in!');
		   window.location.href='customer.php';
		   </script>";

		  

	
   }else{

	if($uname=="nuralam" && $password=="01737"){

		echo"<script> alert('You are successfully logged in!');
		   window.location.href='admin.php';
		   </script>";
			   
	} else if ($uname=="polash" && $password=="01521"){
    echo"<script> alert('You are successfully logged in!');
    window.location.href='manager.php';
    </script>";
	}
  else{
    echo"<script> alert('You are not registred yet!');
	window.location.href='registration.php';
	</script>";
  }
   }
}

?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8" />
    <title></title>
   

    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="css/hello.css" />
    <link rel="icon" href="images/favicon.png" type="image/png" />

    <style>
    .error {color: #FF0000;}
    </style>

  </head>
  <body>

    <div id="wrapper">
      <header>
        <div id="header">
            <h2><a href="index.php" class="tea">Tea Shop</a></h2>
          <p>Enjoy your free time with tea...</p>
        </div>
      </header>
  
      <div id="content_wrapper">
        <div id="content">
          <article>
           <h2>Login</h2>
            <p>
                <form action="login.php" method="POST" enctype="multipart/form-data">
                   
                  
                    <div class="container">
                      <label for="uname"><b>Username</b></label>
                      <span class="error">* <?php echo $unameErr;?></span>
                      <input type="text" placeholder="Enter Username" name="uname">
                  
                      <label for="psw"><b>Password</b></label>
                      <span class="error">*</span>
                      <input type="password" placeholder="Enter Password" name="password" id="password">
                          
                      <button type="submit" name="submit" id="submit">Login</button>
                      <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                      </label>
                    </div>
                  
                    <div class="container" style="background-color:#f1f1f1">
                      
                    </div>

                    <div class="container signin">
                      <p>Not yet registred? <a href="registration.php" class="notregistration">Registration</a>.</p>
                    </div>

                  </form>
                  
            </p>
          </article>
        </div>

      </div>

      <footer>
        <div id="footer">
          <p>&copy;All Rigth Reserved by- MD. NUR ALAM</p>
        </div>
      </footer>
    </div>
    
  </body>
</html>