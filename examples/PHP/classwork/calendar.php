<?php
  ini_set('session.gc_maxlifetime', 10);
  session_set_cookie_params(10);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/calendar.css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  </head>
  <body>



    <div class="container">
      <div class="row">
        <?php
          session_start();
          require_once("includes/menu.php") ?>





      <div class="row">
        <div class="col s12">
          <div id="calendar">
            <div class="dayDetails">

            </div>
          </div>
        </div>
      </div>







      <div class="row">
        <footer class="page-footer mycustomcolor">
          <div class="footer-copyright">
            <div class="container">
            © 2017 Copyright Mano svetainė
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/calendar.js"></script>
    <script>
      $(".button-collapse").sideNav();
      initCalendar();
    </script>
  </body>
</html>
