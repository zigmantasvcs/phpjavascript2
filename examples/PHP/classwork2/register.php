<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/materialize.css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
      .mycustomcolor{
        background: purple;
      }
    </style>
  </head>
  <body>

  

    <div class="container">
      <div class="row">
        <?php require_once("includes\menu.php"); ?>

      </div>

      <div class="row">

        <form class="col s12" action="php/login.php" method="post">

          <div class="row">
            <div class="input-field col s12">
              <input id="name" type="text" class="validate">
              <label for="name">Vardas</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <input id="surname" type="text" class="validate">
              <label for="surname">Pavardė</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="text" class="validate">
              <label for="email">El.paštas</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <input id="Username" type="text" class="validate">
              <label for="Username">Vartotojo vardas</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <input id="password" type="password" class="validate">
              <label for="password">Slaptažodis</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <input id="password2" type="password" class="validate">
              <label for="password2">Pakartoti slaptažodį</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="Pickeris" type="text" class="datepicker">
              <label for="Pickeris">Gimimo data</label>
            </div>
          </div>

          <button class="btn waves-effect waves-light" type="submit" name="action">Submit
          </button>

        </form>
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
    <script src="js/datepicker.js"></script>

    <script>
      $(".button-collapse").sideNav();
    </script>
  </body>
</html>
