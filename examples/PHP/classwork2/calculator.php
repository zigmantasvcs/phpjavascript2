<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>skaiciuotuvas</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <style>
    .button {
      width: 30px;
      height: 30px;
      margin: 0px;
      padding: 0px;
      font-size: 1em;
      color: red;
      }
    #C_mygt {
      width: 64px;
      height: 30px;
      margin: 0px;
      padding: 0px;
      font-size: 1em;
      color: red;
    }
    #sqrt_mygt {
      width: 64px;
      height: 30px;
      margin: 0px;
      padding: 0px;
      font-size: 1em;
      color: red;
    }
    #rezultatas {
      width:120px;


    }

    #rezultatas:hover {
        cursor: text;
    }

    </style>
    </head>
  <body>
    <input type="text" id="rezultatas">
    <div>
      <input id="C_mygt"type="button" value="C" onclick="rezultatas.value = ''">
      <input id="sqrt_mygt"type="button" value="sqrt" onclick="rezultatas.value += 'sqrt'">
    </div>
    <div>
      <input id="septyni" type="button" class="button" value="7" onclick="rezultatas.value += '7'">

      <input id="astuoni" type="button" class="button" value="8" onclick="rezultatas.value += '8'">
      <input id="devyni" type="button" class="button" value="9" onclick="rezultatas.value += '9'">
      <input id="dalinti" type="button" class="button" value="/" onclick="rezultatas.value += '/'">
    </div>
    <div>
      <input id="keturi" type="button" class="button" value="4" onclick="rezultatas.value += '4'">
      <input id="penki" type="button" class="button" value="5" onclick="rezultatas.value += '5'">
      <input id="sesi" type="button" class="button" value="6" onclick="rezultatas.value += '6'">
      <input id="dauginti" type="button" class="button" value="*" onclick="rezultatas.value += '*'">
    </div>
    <div>
      <input id="viens" type="button" class="button" value="1" onclick="rezultatas.value += '1'">
      <input id="du" type="button" class="button" value="2" onclick="rezultatas.value += '2'">
      <input id="trys" type="button" class="button" value="3" onclick="rezultatas.value += '3'">
      <input id="atimti" type="button" class="button" value="-" onclick="rezultatas.value += '-'">
    </div>
    <div>
      <input id="nulis" type="button" class="button" value="0" onclick="rezultatas.value += '0'">
      <input id="kablis" type="button" class="button" value="," onclick="rezultatas.value += '.'">
      <input id="lygu" type="button" class="button" value="=" onclick="rezultatas.value = eval(rezultatas.value)">
      <input id="prideti" type="button" class="button" value="+" onclick="rezultatas.value += '+'">
    </div>
    <script src="skriptas.js">

    </script>
  </body>
</html>
