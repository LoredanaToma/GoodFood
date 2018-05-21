
<?php include "header.php";?>
<?php include "nav.php";?>
<div class = "ciorbe_pag">
	<main>
		<h1>Ciorbe</h1>

		 <main>
  <?php
    include("conn.php");

     class Produse {
    public $id_produs;
    public $id_categ;
    public $prod;
    public $imag;
    public $imag2;
    public $pret;
    public $prezentare;
  }
  if(isset($cnx)) {
  $cda= "SELECT * from produse WHERE id_categ =1";
  $stmt = $cnx->prepare($cda);
  $stmt->execute();
  echo "<div class=\"ciorbe_pag\">";
  while ($prod = $stmt->fetchObject('Produse')) {
  $img = $prod->imag;
  $id = $prod->id_produs;
  echo '<a href="element.php?idprod='.$id.'" class=\"ciorba_vacuta\"><img src="imagini/ciorbe/'.$img.'" alt="ciorba vacuta"/></a>';
 }
  $cnx = null;
 }
 ?>
 </div>
</main>
			
	</main>
</div>
<?php include "footer.php";?>
</body>
</html> 
