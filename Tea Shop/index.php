<!DOCTYPE html>
<html lang="en-US">
  <head>

    <meta charset="UTF-8" />
    <title></title>
    <link
      rel="stylesheet"
      href="themes/default/default.css"
      type="text/css"
      media="screen"
    />
    <link
      rel="stylesheet"
      href="themes/light/light.css"
      type="text/css"
      media="screen"
    />
    <link
      rel="stylesheet"
      href="themes/dark/dark.css"
      type="text/css"
      media="screen"
    />
    <link
      rel="stylesheet"
      href="themes/bar/bar.css"
      type="text/css"
      media="screen"
    />
    <link
      rel="stylesheet"
      href="css/nivo-slider.css"
      type="text/css"
      media="screen"
    />

    <link rel="stylesheet" href="css/hello.css" />
    <link rel="icon" href="images/favicon.png" type="image/png" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideDown(5000);
  });
  $("#stop").click(function(){
    $("#panel").stop();
  });
});
</script>

<style> 
#flip {
  padding: 5px;
  font-size: 18px;
  text-align: center;
  background-color: #958c66;
  color: white;
  border: solid 1px #666;
  border-radius: 3px;
}

#panel {
  padding: 5px;
  font-size: 18px;
  background-color: #958c66;
  color: white;
  border: solid 1px #666;
  border-radius: 3px;
  padding: 50px;
  display: none;
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

      <section>
        <div id="slider_wrapper">
          <img class="slider_img" src="images/tea.jpg" alt="">
        </div>
      </section>

      <div id="content_wrapper">

      <div id="content">
          <article>
            <h2>Welcome to Tea Shop...</h2><br>
            <h3>
              We provide good quality tea. If you want to make your free time remembered then come to our tea shop with your family & close friends... Enjoy your every moment...
            </h3>
          </article>
        </div>
        
      </div>
      <div>
    <div id="flip">Read this before order (Click on the text)</div>
     <div id="panel">
     <ul>
        <li>Please wait until the tea is ready.</li>
        <li>When you finish drinking tea, throw the cup in the dustbin.</li>
        <li>Keep accessories at your own risk.</li>
     </ul> 
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