
<?php include "header.php";?>
<?php include "nav.php";?>
<div id = "continut_pag">
   <main>

   <?php 
session_start();
include("conn.php");
?>
  <?php 

    function testare($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    class Clienti {
      public $tel;
      public $parola;
      public $nume;
      public $adresa;
      public $email;
     
    }
    

    $cos = testare($_REQUEST['coscump']);
    $tel = testare($_REQUEST['tel']);
    $nume = testare($_REQUEST["num"]);
    $adresa = testare($_REQUEST["adr"]);
    $email = testare($_REQUEST["email"]);
    $parola = testare($_REQUEST["pw"]);


      if(is_numeric($tel)){  // return **TRUE** if it is numeric

    echo '';
    }else{
    echo '<h3 class="centrat"><br><br>Numarul de <i>TELEFON</i> trebuie sa contina doar numere intregi!<h3><br>';
     echo '<form class="centrat"><input type="button" value="Completati formularul!" onClick="location.href=\'comanda.php\'"></form></center>';
   
     $cnx = null;
}
   if(is_numeric($parola)){  // return **TRUE** if it is numeric

    echo '';
    }else{
    echo '<h3 class="centrat"><br><br><i>PAROLA</i> trebuie sa contina 4 numere intregi!<h3><br>';
     echo '<form class="centrat"><input type="button" value="Completati formularul!" onClick="location.href=\'comanda.php\'"></form></center>';
   
     $cnx = null;
} 
  
  if(empty($nume))
{
    echo '<h3 class="centrat"><br><br><br><br><br>Va rugam completati campurile ramase libere!<br><br>';
    echo '<form class="centrat"><input type="button" value="Completati formularul!" onClick="location.href=\'comanda.php\'"></form></center>';
   
}

 else {
  echo "";
}
  
  
    if(isset($cnx)) {
   //  Inserez in tabelul "clienti"
      $cda = "INSERT into clienti values(:tel, :parola, :nume, :adresa, :email)";
      $stmt = $cnx->prepare($cda);
      $stmt->bindParam(':tel', $tel, PDO::PARAM_STR);
      $stmt->bindParam(':parola', md5($parola), PDO::PARAM_STR);
      $stmt->bindParam(':nume', $nume, PDO::PARAM_STR);
      $stmt->bindParam(':adresa', $adresa, PDO::PARAM_STR);
      $stmt->bindParam(':email', $email, PDO::PARAM_STR);
      $stmt->execute(); 

   // Inserez articole in tabelul comenzi
      $articole = explode(',',$cos);
      foreach ($articole as $item) {
      // Caut produsul in baza de date dupa $item
        date_default_timezone_set('Europe/Bucharest');
      $data = date('Y-m-d'); // data in format aaaa-ll-dd
      $interogare1 = $cnx->prepare("INSERT INTO COMENZI VALUES (NULL, '$tel', '$item', '1', '$data')");
      $interogare1->execute();
  }

 echo '<br><br><br><br><br><br><br><h3 class="centrat">';
  echo 'Comanda preluata pentru '.$nume.' <br /> in data de '.$data.'! <br /> Ve-ti fi contactat/a telefonic in cel mai scurt timp posibil pentru confirmarea comenzii!';
  echo ' <br />Va multumim!</h1><br><br><br><br>';
   // Golesc cosul memorat in $_SESSION['cos_cumparaturi'], urmeaza comanda
  unset($_SESSION['cos_cumparaturi']);
  $cnx = null;
}
?>

  </main>

</div>
<?php include "footer.php";?>
</body>
</html> 
