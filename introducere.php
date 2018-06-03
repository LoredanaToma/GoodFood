
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
      echo "<center> <a href=\"vizite.php\">Alte impresii</a></center>";
      echo "<br /><br />";
      echo " <center><a href=\"opinie.php\">Trimite impresia ta</a></p></center>";
      echo "<br /><br />";
      echo "<center><a href=\"index.php\">Acasa</a></p></center>";
      $cnx = null;
    }
    ?>
</main>

</div>
<?php include "footer.php";?>
</body>
</html> 
