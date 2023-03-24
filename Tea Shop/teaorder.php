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

	$Name= $_POST["teaname"];
	$Quantity= $_POST["quantity"];

	$sql = "INSERT INTO order1 (tea_name, quantity)
	 VALUES ('$Name','$Quantity')";

	 
	 if (mysqli_query($conn, $sql)) {
		echo"<script> alert('You are successfully ordered!');
		
		</script>";
	  } else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	  }
	  
	  mysqli_close($conn);
  }

?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8" />
    <title>Order</title>
    <link rel="stylesheet" href="css/registration.css" />
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
            <h2>Order</h2>
            <p>
                <form action="teaorder.php" method="POST" enctype="multipart/form-data">
                    <div class="container">

                    <label><b>Tea Name:</b></label><br><br>
                        <select id="teaname" name="teaname" class="form-select">
						            <option selected disabled value="NULL">Tea Name</option>
		                    <option  value="Milk Tea">Milk Tea</option>
		                    <option  value="Red Tea">Red Tea</option>
					              </select> <br> <br>
                      
                  
                      <label for="quantity"><b>Quantity:</b></label>
                      <input type="text" name="quantity" id="quantity">

                      <button type="submit" name="submit" id="submit" class="registerbtn">Order</button>
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