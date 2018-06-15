
<?php include "header.php";?>
<?php include "nav.php";?>
<div id = "continut_pag">

	<main>
		<?php
   include("conn.php");

function testare($data) {
   $data = trim($data); 
   $data = stripslashes($data); 
   $data = htmlspecialchars($data); 
   return $data; 
}

class Admin {
   public $id_admin;
   public $nume;
   public $pass;
}

$n = testare($_REQUEST["numeletau"]); 
$p = testare($_REQUEST["parolata"]);

if(isset($cnx)) {

   $cda= "SELECT * from admin";
   $stmt = $cnx->prepare($cda);
   $stmt->execute();
   $gasit = false;

   while ($utilizator = $stmt->fetchObject('Admin'))
    {
      if($utilizator->nume == $n && $utilizator->pass == $p) 
      {
         echo '<br><br><br><br><h3 class="centrat"> Succes!</h3><br />';
         echo '<form class="centrat" method="post" action="adaugare.php">';
         echo '<input type="submit" name="submit1" value="Adaugare produse">';
         echo '</form></center>';
         $gasit = true;
         break;
      }
   }
   if(!$gasit) 
   {
      echo '<h1 class="italic centrat"><span class="litera italic"> NU aveti acces in baza de date! </h1><br />';
      echo '<form class="centrat"><input type="button" value="Mai incearca" onClick="location.href=\'login.php\'"></form></center>';
   }
   $cnx = null;
}

?>
</main>

</div>
<?php include "footer.php";?>
</body>
</html> 
