
<?php include "header.php";?>
<?php include "nav.php";?>
<div id = "continut_pag">

		<?php
  include("conn.php");

    class Produse {
      public $id_produs;
      public $id_categ;
      public $prod;
      public $imag1;
      public $imag2;
      public $pret;
      public $prezentare;
    }

      if(isset($cnx)) {
          $idp = $_REQUEST['idprod'];
          $cda = "select * from produse WHERE id_produs=$idp"; 
          $stmt = $cnx->prepare($cda);
          $stmt->execute();
          $prod = $stmt->fetchObject('Produse');
          echo "<article class=\"centrat\"><h2>$prod->prod</h2>";
          echo '<img src="imagini/'.$prod->imag2.'" alt="img" class="responsive"'; 
          echo"<br></br></br>";
          echo "<h4>Prezentare</h4><p>$prod->prezentare</p>";
          echo '<h4>Pret</h4><p class="bold">'.$prod->pret.' Ron</p>';
          echo '<div class="pret"><br><a href="cumpar.php?id_produs='.$idp.'">Comanda</a></p></div>';
          $cnx = null;
          } 
 ?>

</div>
<?php include "footer.php";?>
</body>
</html> 
