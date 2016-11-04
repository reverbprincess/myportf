<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>PJG DL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

  <!-- Bootstrap -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
  <link rel="stylesheet" href="css/main.css">

  <!-- Javascript-->
  <script src="js/main.js"></script>

</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">PJG DL</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">about me</a></li>
        <li><a href="#">follow</a></li>
        <li><a href="#">contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
<br/>
  <h3 class="margin">24 | PJ | Software Developer</h3>
  <br/>
  <img src="images/me.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
  <br/>
  <br/>
  <p><div class="buttons">
            <a class="button stroke smoothscroll animate-intro" href="https://www.facebook.com/dlprincessj" target="_blank" title="">Facebook</a>
            <a class="button stroke smoothscroll animate-intro" href="https://www.instagram.com/reverbprincess/" target="_blank" title="">Instagram</a>
            <a class="button stroke smoothscroll animate-intro" href="https://twitter.com/reverbprincess" target="_blank" title="">Twitter</a>
          </div>
          </p>
          <br/>
</div>

<!-- Third Container (Grid) -->
      
    <form id="contact" action="process_msg.php" data-toggle="validator" class="shake" role="form" >
      <div class="contactcont">
        <div class="head">
          <h2>Say Hello</h2>
        </div>
        <input type="text" name="fname" placeholder="Name" maxlength="60" size="50"/><br />
        <input  type="email" name="email" placeholder="Email" /><br />
        <textarea type="text" name="message" placeholder="Message"></textarea><br />
        <button id="submit" type="submit">
          Send!
        </button>
      </div>
    </form>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>PJG DL - 2016</p>
</footer>

</body>
</html>

