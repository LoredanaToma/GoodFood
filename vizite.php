
<?php include "header.php";?>
<?php include "nav.php";?>
<div id = "continut_pag">
	<main>
 <h2 class="centrat">Impresiile clientilor nostri</h2><br />
<?php
include("conn.php");
 
 class Vizitatori {
   public $nr;  //  Cheia primara
   public $nume;
   public $prenume;
   public $email;
   public $mesaj;
}
   
   if(isset($cnx)) {
      $cda = "SELECT * FROM vizitatori ORDER BY nr DESC";
      $stmt = $cnx->prepare($cda);
    $stmt->execute();
      echo "<table style=\"width:100%; \">";
      $i=1; //  Contor de linii
      while ($vizit = $stmt->fetchObject('Vizitatori')) {
         if ($i%2==0) {
            echo "<tr style=\"background-color:#1c1e1c; \"><td>";
         }
         else {
            echo "<tr style=\"background-color:#1c1e1c; \"><td>";
        }
        //echo $vizit->nr; echo ".    ";
           echo "<p class=\"vizite alineat\">"; 
        echo "->";
        echo $vizit->nume; echo "    ";
        echo $vizit->prenume; echo "  -  ";
        echo $vizit->email;
        echo "<br />";
        echo $vizit->mesaj;
        echo "<br /><br /><br/>";
        echo "</td></tr>";
        echo "<tr><td> </td></tr>";
        $i++;


   }
   $cnx = null;
   }
?>
        </table>
</main>
</div>
<?php include "footer.php";?>
</body>
</html> 
