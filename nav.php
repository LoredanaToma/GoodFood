<nav>

 <div class="topnav" id="myTopnav">

  <div class="col-sm-12 col-md-12 col-lg-12" style="background-color: #1c1e1c;">

    <a href=""><a href="login.php">Baza de date</a>
    <a href="#opinie"><a href="opinie.php">Contact</a>
    <a href="#contact"><a href="meniu.php">Meniu</a>
    <a href="#news"><a href="despre_noi.php">Despre noi</a>
    <a href="#home" class="active"><a href="index.php">Acasa</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
  </script>
</div>
</nav>

