<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8" />
    <title></title>
    <link rel="stylesheet" href="css/inside.css" />
    <link rel="stylesheet" href="css/admin.css" />
    <link rel="icon" href="images/favicon.png" type="image/png" />
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
  background-color: #ed9909;
  color: white;
}
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

      <nav>
        <div id="navbar">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="inside.php">Tea Chart</a></li>
            <li><a href="registration.php">Registration</a></li>
            <li><a href="login.php">Login</a></li>
          </ul>
        </div>
      </nav>

      <div id="content_wrapper">
        <div id="content">
         
        </div>

        <table id="customers">
  <tr>
    
    <th>Tea Name</th>
    <th>Price</th>
    <th>Details</th>
    <th>Order</th>
  </tr>
  <tr>
    
    <td>Milk Tea</td>
    <td>20 taka</td>
    <td><a href="inside.php" class="btn btn-secondary">
        <i class="fa fa-angle-double-right"></i> Details
      </a>
    </td>
    <td><a href="teaorder.php" class="btn btn-secondary">
        <i class="fa fa-angle-double-right"></i> Order
      </a>
    </td>
  </tr>
  <tr>
    
    <td>Red Tea</td>
    <td>10 taka</td>
    <td><a href="inside.php" class="btn btn-secondary">
        <i class="fa fa-angle-double-right"></i> Details
      </a>
    </td>
    <td><a href="teaorder.php" class="btn btn-secondary">
        <i class="fa fa-angle-double-right"></i> Order
      </a>
    </td>
  </tr>
  
  </table>


      <footer>
        <div id="footer">
          <p>&copy;All Rigth Reserved by- MD. NUR ALAM</p>
        </div>
      </footer>
    </div>
  </body>
</html>
