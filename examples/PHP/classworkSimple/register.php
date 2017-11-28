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
        <?php require_once("includes\menu.php") ?>
      </div>

      <div class="row">
        <h1>Registracijos forma</h1>
        <form class="col s12" action="api/users/create.php" method="post">
          <div class="row">
            <div class="input-field col s6">
              <input id="name" name="name" type="text" class="validate">
              <label for="name">Vardas</label>
            </div>
            <div class="input-field col s6">
              <input id="surname" name="surname" type="text" class="validate">
              <label for="surname">Pavardė</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="birthday" name="birthday" type="text" class="datepicker">
              <label for="birthday">Gimimo data</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="username" name="username" type="text" class="validate">
              <label for="username">Vartotojo vardas</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="password" name="password" type="password" class="validate">
              <label for="password">Slaptažodis</label>
            </div>
            <div class="input-field col s12">
              <input id="password2" name="password2" type="password" class="validate">
              <label for="password2">Pakatokite slaptažodį</label>
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
    <script>
      $(document).ready(function(){
        $(".button-collapse").sideNav();

        $('.datepicker').pickadate({
          selectMonths: true, // Creates a dropdown to control month
          selectYears: 15, // Creates a dropdown of 15 years to control year,
          today: 'Šiandien',
          clear: 'Išvalyti',
          close: 'Gerai',
          monthsFull: [ 'Sausis', 'Vasaris', 'Kovas', 'Balandis', 'Gegužė', 'Birželis', 'Liepa', 'Rugpjūtis', 'Rugsėjis', 'Spalis', 'Lapkritis', 'Gruodis' ],
          monthsShort: [ 'Sau', 'Vas', 'Kov', 'Bal', 'Geg', 'Bir', 'Lie', 'Rgp', 'Rgs', 'Spa', 'Lap', 'Gru' ],
          weekdaysFull: [ 'Sekmadienis', 'Antradienis', 'Trečiadienis', 'Ketvirtadienis', 'Penktadienis', 'Šeštadienis', 'Pirmadienis' ],
          weekdaysShort: [ 'Sek', 'Ant', 'Tre', 'Ket', 'Pen', 'Šeš', 'Pir' ],
          weekdaysLetter: ['S', 'P', 'A', 'T', 'K', 'P', 'Š', 'S'],
          closeOnSelect: false, // Close upon selecting a date,
          format: 'yyyy-mm-dd',
          firstDay: 1
        });

      });
    </script>
  </body>
</html>
