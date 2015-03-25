<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hackathon</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Hackathon project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
    <div id="page">
      <div id="header">
        <?php include "header.php"; ?>
      </div>
      <div id="wrap">
        <nav id="menu-contenedor" class="navbar" role="navigation">
          <?php include "menu.php"; ?>
        </nav>  

        <div class="container">
          <section>
            <?php include "home.php"; ?>
          </section>
        </div>
        <div id="about"></div>
        <div class="container">
          <section>
            <?php include "about.php"; ?>
          </section>
        </div>


        <div id="project"></div>
        <div class="container">
          <section>
            <?php include "project.php"; ?>
          </section>
        </div>

        <div id="contact" class="espacio"></div>
        <div class="container">
          <section>
            <?php include "contact.php"; ?>
          </section>
        </div>

      </div>
    
      <footer></footer>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
  </body>
  
</html>

<script>
  $("#ul li a[href^='#']").on('click', function (e) {
    e.preventDefault();
    $(this).tab('show')
  })  
</script>