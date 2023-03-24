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

        <!--Read/Write-->

      <?php
      $myfile = fopen("note/note.txt", "r") or die("Unable to open file!");
      while(!feof($myfile)) {
      echo fgets($myfile) . "<br>";
      }
     fclose($myfile);

      $myfile = fopen("note/note.txt", "w") or die("Unable to open file!");
      $txt = "Welcome to Tea Shop...\n\n";
      fwrite($myfile, $txt);
      $txt = " We provide good quality tea. If you want to make your free time remembered then come to our tea shop with your family & close friends... Enjpoy your every moment...\n";
      fwrite($myfile, $txt);
      $txt = "Thanks for comming...\n\n";
      fwrite($myfile, $txt);
     $txt = "Best Regards- MD. NUR ALAM\n";

      fwrite($myfile, $txt);
      fclose($myfile);
      ?> 


      <footer>
        <div id="footer">
          <p>&copy;All Rigth Reserved by- MD. NUR ALAM</p>
        </div>
      </footer>
    </div>
  </body>
</html>
