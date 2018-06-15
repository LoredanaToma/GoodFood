
<?php include "header.php";?>
<?php include "nav.php";?>
<div class = "continut_pag">
  
<main>
   <?php 
    include("conn.php");
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
 $nume = testare($_REQUEST["num"]);
 $pw = testare($_REQUEST["pw"]);  //  Parola
 if(isset($cnx)) {
    $cda = "SELECT * FROM clienti";
    $stmt = $cnx->prepare($cda);
    $stmt->execute();
    //  Caut clientul in tabelul clienti
  $interogare = $cnx->prepare("SELECT * FROM clienti");
    $interogare->execute();
    $codcli = 0;
    while ($cli = $stmt->fetchObject('Clienti')) {
      if (strtoupper ($nume) == strtoupper ($cli->nume) && md5($pw) == $cli->parola) {
        $codcli = $cli->tel;  //  Preiau val. cheii primare
        break;
      }
  }
  if($codcli != 0) {
    // Inserez articole in tabelul comenzi
    $articole = explode(',',$cos);
    foreach ($articole as $item) {
      // Caut produsul in baza de date dupa $item
            date_default_timezone_set('Europe/Bucharest');
            $data = date('Y-m-d'); // data in format aaaa-ll-dd
            $interogare1 = $cnx->prepare("INSERT INTO COMENZI VALUES
                (NULL, '$codcli', '$item', '1', '$data')");
            $interogare1->execute();
        }
  echo '<br><br><br><br><h3 class="centrat">';
  echo 'Comanda preluata pentru '.$nume.' <br /> in data de '.$data.'! <br /> Ve-ti fi contactat/a telefonic in cel mai scurt timp posibil pentru confirmarea comenzii!';
  echo ' <br />Va multumim!</h1><br />';
        // Golesc cosul memorat in $_SESSION['cos_cumparaturi']
    unset($_SESSION['cos_cumparaturi']);
  } else {
        echo '<h1 class="italic centrat">';
        echo 'Nume utilizator sau parola eronata!</h1>';
        echo '<br /><input id="btn" type="button" value = "Reintroduc datele" ';
        echo 'onclick="return fclick()" /<<br />';
  }
  $cnx = null;
}
?>
<script language="javascript" type="text/javascript">
   function fclick() 
   {
    window.location.href = "finalizez.php";
  }
</script>
  
</main>

</div>
<?php include "footer.php";?>
</body>
</html> 
