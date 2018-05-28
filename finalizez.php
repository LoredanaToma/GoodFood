
<?php include "header.php";?>
<?php include "nav.php";?>
<div class = "continut_pag">
	<main>
 <?php 
 session_start();
?>

 <div id="continut_pag">
   <main>
     <h1 class="italic centrat"><span class="litera italic">Sunteti</h1><br />
      <form name="formular" method="post" action="comanda.php" class="centrat">
        <table class="login centrat">

        <?php
        $cos = $_SESSION['cos_cumparaturi'];
        // Cosul va fi trimis scriptului comanda.php printr-un camp de tip 'hidden'
         echo '<input type= "hidden" name = "coscump" value = '.$cos.'>';
        ?>

          <tr>
             <td><label>
                <input type="radio" name="client" checked value="0" />
                  Cont nou </label></td>
             <td>sau</td>
             <td><label>
                <input type="radio" name="client" value="1" /> 
                  Client vechi </label></td>
          </tr>

          <tr>
             <td colspan = 3 class="centrat">
                <input type = "submit" value="Cumpar"></td>
         </tr>
         </table>
      </form>
</main>

</div>
<?php include "footer.php";?>
</body>
</html> 
