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
    <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #000000;
  color: white;
}
</style>
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
           <h2>Tea List</h2>
            <p>
            <table id="customers">
  <tr>
    
    <th>ID</th>
    <th>Name</th>
    <th>Details</th>
  </tr>

  <?php



  $sql="select * from registration";
  $query=mysqli_query($conn, $sql);

  while($info=mysqli_fetch_array($query)){
    ?>


  <tr>
    
    <td><?php echo $info["id"];?></td>
    <td><?php echo $info["name"];?></td>

    <td><a href="details.html" class="btn btn-secondary">
        <i class="fa fa-angle-double-right"></i> Details
      </a>
    </td>
  </tr>
  <?php
  }
  ?>

</table>
               
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