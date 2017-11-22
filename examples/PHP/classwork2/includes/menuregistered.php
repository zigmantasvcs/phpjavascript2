<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">Jonas</a></li>
  <li><a href="#!">Petras</a></li>
  <li class="divider"></li>
  <li><a href="#!">Antanas</a></li>
</ul>

<nav>
 <div class="nav-wrapper mycustomcolor">
<?php
  if(isset($_SESSION["username"])){
   echo "<a href='#!' class='brand-logo'><img src='images/index.jpg' width='65px'>".$_SESSION['username']."</a>";
  }else {
    echo "<a href=\"#!\" class=\"brand-logo\"><img src=\"images/index.jpg\" width=\"65px\" ></a>";
  }
     ?>



   <a href="#" data-activates="sidemenu" class="button-collapse">
     <i class="material-icons">menu</i>
   </a>

   <ul class="right hide-on-med-and-down">
     <li><a href="calendar.php">Kalendorius</a></li>
     <li><a href="calculator.php">Skaičiuotuvas</a></li>
     <li><a href="about.php">Apie</a></li>

     <!-- Dropdown Trigger -->
     <li>
       <a class="dropdown-button" href="#!" data-activates="dropdown1">
         Dropdown<i class="material-icons right">arrow_drop_down</i>
       </a>
     </li>
   </ul>

   <ul class="side-nav" id="sidemenu">
     <li><a href="calendar.php">Kalendorius</a></li>
     <li><a href="calculator.php">Skaičiuotuvas</a></li>
     <li><a href="about.php">Apie</a></li>
   </ul>
 </div>
</nav>
