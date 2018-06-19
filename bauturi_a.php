
<?php include "header.php";?>
<?php include "nav.php";?>
<div id = "continut_pag">
	
<div class="produs"><br><br><br>
    <h2 class="centrat">Bauturi alcoolice</h2><br><br>
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
  $cda= "SELECT * from produse WHERE id_categ =12";
  $stmt = $cnx->prepare($cda);
  $stmt->execute();
  while ($prod = $stmt->fetchObject('Produse')) {
  $img = $prod->imag1;
  $id = $prod->id_produs;
  $produs = $prod->prod;
 

 echo '
   <ul>
   <a href="element.php?idprod='.$id.'"><li><img src="imagini/'.$img.' " alt=""  width="255" height="255"</a><li>
   <li><h5 class="centrat">'.$produs.'<h5> </li>
   </ul>';

      }
  $cnx = null;
 }
 ?>
    
</div>
</div>
<?php include "footer.php";?>
</body>
</html> 
