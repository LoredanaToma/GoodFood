
<?php include "header.php";?>
<?php include "nav.php";?>
<div class = "ciorbe_pag">
	<main>
    <?php 
    session_start();
    
    ?>

    <div id="continut_pag">
     <main>

      <?php 
      function testare($data) {
       $data = trim($data); 
       $data = stripslashes($data); 
       $data = htmlspecialchars($data); 
       return $data; 
     }

     class Produse {
      public $id_produs;
      public $id_categ;
      public $prod;
      public $imag1;
      public $imag2;
      public $pret;
      public $prezentare;


    }
// Adaug produsul in cos
    $element = testare($_REQUEST['id_produs']);
    $gasit = false;
    if(isset($_SESSION['cos_cumparaturi'])) {
     $cos = $_SESSION['cos_cumparaturi'];
   // Verific daca produsul este deja in cos
   // explode realizeaza fragmentarea unui sir de caractere folosind 
   // separatorii continuti in alt sir
   // separatorul este ','
   // $cos este un sir de caractere (coduri de produs separate prin ',')

     $articole = explode(',',$cos); 
   foreach ($articole as $item) {  //prelucrez elementul curent, $item
    if($item == $element) {
     $gasit = true;
     break;
   }
 }
 if(!$gasit) {
  $cos = $cos.','.$element;
} 
} else {
 $cos = $element;
}
$_SESSION['cos_cumparaturi'] = $cos;
// afisez continutul cosului
// ma conectez la b.d. pentru a prelua numele si pretul produsului
// pana la conexiunea cu db am preluat doar id_produs

include("conn.php");
if(isset($cnx)) {
  $vtotal = 0;
  $articole = explode(',',$cos);

  echo '<h3 class="centrat"><br>';
  echo 'Cosul tau de cumparaturi</h1><br />';
  echo '<table class="login centrat">';
  foreach ($articole as $item) {
    // Caut produsul in baza de date dupa $item

    $cda= "SELECT * from produse WHERE id_produs =$item";
    $stmt = $cnx->prepare($cda);
    $stmt->execute();
      //  Exista un singur produs
    $prod = $stmt->fetchObject('Produse');
    echo '<tr><td>'.$prod->prod.'</td><td><nobr>'.
    $prod->pret.'lei</nobr></td></tr>';
    $vtotal += (double)$prod->pret;
  }
  echo "</table><br /><br />";
  echo '<p class="centrat">Cost total: '.
  $vtotal." RON</p>";
}
?>
<br /><br /><br />

<p class="centrat"><a href="finalizez.php">Cumpar produsele</a>   |
  <a href="meniu.php">Mai adauga in cos</a>   |   <a
  href="golesc.php">Golesc cosul</a></p>
</main>

</div>
<?php include "footer.php";?>
</body>
</html> 
