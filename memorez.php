
<?php include "header.php";?>
<?php include "nav.php";?>
<div id = "continut_pag">
   <main>

   <?php 
session_start();
include("conn.php");
?>
<section id="container">
  <?php 

    function testare($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    class Clienti {
      public $cnp;
      public $parola;
      public $nume;
      public $adresa;
      public $email;
      public $telefon;
     
    }
    

    $cos = testare($_REQUEST['coscump']);
    $cnp = testare($_REQUEST['cnp']);
    $nume = testare($_REQUEST["num"]);
    $adresa = testare($_REQUEST["adr"]);
    $telefon = testare($_REQUEST["tel"]);
    $email = testare($_REQUEST["mail"]);
    $parola = testare($_REQUEST["pw"]);
    
    if(isset($cnx)) {
   //  Inserez in tabelul "clienti"
      $cda = "INSERT into clienti values(:cnp, :parola, :nume, :adresa, :email, :telefon)";
      $stmt = $cnx->prepare($cda);
      $stmt->bindParam(':cnp', $cnp, PDO::PARAM_STR);
      $stmt->bindParam(':parola', md5($parola), PDO::PARAM_STR);
      $stmt->bindParam(':nume', $nume, PDO::PARAM_STR);
      $stmt->bindParam(':adresa', $adresa, PDO::PARAM_STR);
      $stmt->bindParam(':email', $email, PDO::PARAM_STR);
      $stmt->bindParam(':telefon', $telefon, PDO::PARAM_STR);
      $stmt->execute(); 

   // Inserez articole in tabelul comenzi
      $articole = explode(',',$cos);
      foreach ($articole as $item) {
      // Caut produsul in baza de date dupa $item
        date_default_timezone_set('Europe/Bucharest');
      $data = date('Y-m-d'); // data in format aaaa-ll-dd
      $interogare1 = $cnx->prepare("INSERT INTO COMENZI VALUES (NULL, '$cnp', '$item', '1', '$data')");
      $interogare1->execute();
  }
 echo '<h1 class="italic centrat"><span class="litera italic">C</span>';
  echo 'omanda preluata pentru <span class="litera italic">'.$nume.' </span><br /> in data de
  <span class="litera italic">'.$data.'</span> <br />Un operator va va contacta telefonic pentru confirmare.';
  echo ' <br />Va multumim!</h1><br />';
   // Golesc cosul memorat in $_SESSION['cos_cumparaturi'], urmeaza comanda
  unset($_SESSION['cos_cumparaturi']);
  $cnx = null;
}
?>
<br /><br /><br /><br /><br />
<div class="livrare">
<p><a href="#">Informatii privind livrarea</a> |
    <a href="#">Comentariile clientilor nostri.</a></p>
</div>
  </main>

</div>
<?php include "footer.php";?>
</body>
</html> 
