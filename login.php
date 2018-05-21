
<?php include "header.php";?>
<?php include "nav.php";?>
<div id = "continut_pag">
	<main>

    <div class="formular-login"> 
      <!-- Linia A --> 
      <div class="col-sm-12 col-md-12 col-lg-12" style="background-color: white;">
       <form name="formular-login" method="post" action="verificare.php" class="centrat"  style="max-width:700px; margin:auto">
        <h2>Baza de date</h2>
      </br>
        <div class="input-container">
          <i class="fa fa-user icon"></i>
          <input class="input-field" type="text" placeholder="Username" name="numeletau">
        </div>
      </br>
      <div class="input-container">
        <i class="fa fa-key icon" ></i>
        <input class="input-field" type="password" placeholder="password" name="parolata">
      </div>
    </br>
    <button type="submit" class="btn">Login</button>
  </form> 
</div>
</div> 

</main>


</div>
<?php include "footer.php";?>
</body>
</html> 
