
<?php include "header.php";?>
<?php include "nav.php";?>
<div class = "ciorbe_pag">
	<main>
		<?php
   function testare($data) {
    $data = trim($data); 
    $data = stripslashes($data); 
    $data = htmlspecialchars($data); 
    return $data; 
  }
  if (testare($_FILES["fisier"]["error"]) > 0) {
    echo "Error: " . $_FILES["fisier"]["error"] . ""; 
    exit; 
  }
  if (testare($_FILES["mare"]["error"]) > 0) {
    echo "Error: " . $_FILES["mare"]["error"] . "
    ";
    exit; 
  }
  
  $numeimagine = testare($_FILES["fisier"]["name"]); 
  $poz = strrpos($numeimagine, "."); 
  $extensie = substr ($numeimagine, $poz); 
  $nmtmp = $_FILES["fisier"]["tmp_name"]; 
  $numeimaginemare = testare($_FILES["mare"]["name"]); 
  $pozm = strrpos($numeimaginemare, "."); 
  $extensiem = substr ($numeimaginemare, $pozm); 
  $nmtmpm = $_FILES["mare"]["tmp_name"]; 
  $categ = testare($_REQUEST["combo"]); 
  $nume = testare($_REQUEST["nume"]); 
  $prezentare = testare($_REQUEST["prez"]); 
  $pretul = testare($_REQUEST["pret"]);

  include("conn.php");
  if(isset($cnx)) {
   $cda= "INSERT INTO produse (id_produs, id_categ, prod, imag1, imag2 , pret, prezentare) VALUES (null, :idcateg, :numeprod, :numeimagine, :numeimaginemare,  :pret, :prez)";
   $stmt = $cnx->prepare($cda); 
   $stmt->bindParam(':idcateg', $categ, PDO::PARAM_STR); 
   $stmt->bindParam(':numeprod', $nume, PDO::PARAM_STR); 
   $stmt->bindParam(':numeimagine', $numeimagine, PDO::PARAM_STR);
   $stmt->bindParam(':numeimaginemare', $numeimaginemare, PDO::PARAM_STR);
   $stmt->bindParam(':pret', $pretul, PDO::PARAM_STR);
   $stmt->bindParam(':prez', $prezentare, PDO::PARAM_STR); 
   // se foloseste PARAM_STR chiar si pentru numere 
   $stmt->execute(); 
   // Preiau ID-ul pozei introduse in baza si construiesc un nou nume 
   $id = $cnx->lastInsertId(); 
   $numeimaginenou = "imagine".$id.$extensie; 
   $numeimaginemarenou = "imagine".$id."M".$extensie; 
   $cda = "UPDATE produse SET imag1='$numeimaginenou' WHERE id_produs = $id";
   $stmt = $cnx->prepare($cda); 
   $stmt->execute();
   // Construiesc calea pe care sa incarc fisierul 
   $cale = "imagini/$numeimaginenou"; 
   $rezultat = move_uploaded_file($nmtmp, $cale); 
   if (!$rezultat) { 
    echo "Eroare la incarcarea fisierului"; 
    exit; 
  } 
  $cda = "UPDATE produse SET imag2='$numeimaginemarenou' WHERE id_produs = $id";
  $stmt = $cnx->prepare($cda); 
  $stmt->execute(); 
  $calem = "imagini/$numeimaginemarenou"; 
  $rezultat = move_uploaded_file($nmtmpm, $calem); 
  if (!$rezultat) { 
    echo "Eroare la incarcarea fisierului"; 
    exit; 
  }

  echo "<p class=\"inserare centrat\">";
  echo "<h1 class=\"italic centrat\"><span class=\"litera italic\">P</span>rodusul<br />s-a adaugat in baza de date</h1><br />";
  echo "<form class=\"centrat\"><input type=button value=\"Alt produs\"
  onClick=\"location.href='adaugare.php'\">";
  echo "<input type=button value=\"Home\" onClick=\"location.href='index.php'\"></form>";
  echo "</p><br /><br />";
  echo "<p class=\"inserare centrat\">Numele vechi al fisierului: $numeimagine</p>";
  echo "<p class=\"inserare centrat\">Numele vechi al fisierului mare:   $numeimaginemare</p>";
  echo "<p class=\"inserare centrat\">Categoria fisierului: $categ</p>";
  echo "<p class=\"centrat inserare\">Noul nume al fisierului: $numeimaginenou</p>";
  echo "<p class=\"inserare centrat\">Imaginea mare: $numeimaginemarenou</p>"; 
  $cnx = null;
}
?>
</main>

</div>
<?php include "footer.php";?>
</body>
</html> 
