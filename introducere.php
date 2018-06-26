
<?php include "header.php";?>
<?php include "nav.php";?>
<div id = "continut_pag">
	<main>
    <?php
    function testare($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $nume=testare($_REQUEST["nume"]);
    $prenume=testare($_REQUEST["prenume"]);
    $email=testare($_REQUEST["email"]);
    $mesaj=testare($_REQUEST["mesaj"]);

    include("conn.php");
    if(empty($mesaj)){  // return **TRUE** if it is numeric

    echo '<h3 class="centrat"><br><br>Va rugam completati mesajul dumneavoastra!<h3><br>';
    echo '<form class="centrat"><input type="button" value="Back" onClick="location.href=\'opinie.php\'"></form></center>';
    $cnx = null;
  }

     else { 
      echo ''; 
    }
    if(isset($cnx)) {

      $cda = "INSERT INTO vizitatori (nr, nume, prenume, email, mesaj)VALUES (NULL, :nume, :prenume, :email, :mesaj)";
      $stmt = $cnx->prepare($cda); 
      $stmt->bindParam(':nume', $nume, PDO::PARAM_STR);
      $stmt->bindParam(':prenume', $prenume, PDO::PARAM_STR);
      $stmt->bindParam(':email', $email, PDO::PARAM_STR);
      $stmt->bindParam(':mesaj', $mesaj, PDO::PARAM_STR);
      $stmt->execute(); 

      echo "<p class=\"inserare centrat\">"; 
      echo "<h1 class=\"italic centrat\">$nume $prenume</span><br /> Mesajul dv. s-a adaugat in cartea noastra de oaspeti<br /><br /> Va multumim!</h1><br />";

      echo "<br /><br /><br /><br />";

      $cnx = null;
    }
    ?>
    <h6 class="centrat"><a href="vizite.php">Alte impresii</a>   |
  <a href="opinie.php">Mai trimite o impresie</a>   |   <a
  href="index.php">Acasa</a></h6>
</main>

</div>
<?php include "footer.php";?>
</body>
</html> 
