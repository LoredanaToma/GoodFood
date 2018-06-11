
<?php include "header.php";?>
<?php include "nav.php";?>
<div id = "continut_pag">
	
	<main>
		<h2 class="centrat">Salate</h2><br><br>
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
  $cda= "SELECT * from produse WHERE id_categ =6";
  $stmt = $cnx->prepare($cda);
  $stmt->execute();
  echo "<div class=\"produs\">";
  while ($prod = $stmt->fetchObject('Produse')) {
  $img = $prod->imag1;
  $id = $prod->id_produs;
  echo '<a href="element.php?idprod='.$id.'"><img src="imagini/'.$img.'" alt="" class="produs" width="300" height="200"</a>';
 }
  $cnx = null;
 }
 ?>
			
	</main>

</div>
<?php include "footer.php";?>
</body>
</html> 
