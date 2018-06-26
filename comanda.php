
<?php include "header.php";?>
<?php include "nav.php";?>
<main>

 <div id="continut_pag">
   <main>
     <?php 
     session_start();
     ?>

     <div id="continut_pag">
       <main><br><br>
         <h3 class="italic centrat">
           <span class="litera italic">F</span>ormular de comanda</h3><br /><br><br>

           <?php 
           $cos = $_REQUEST['coscump'];
 // Golesc cosul memorat in $_SESSION['cos_cumparaturi'], urmeaza comanda
           unset($_SESSION['cos_cumparaturi']);
           $cli = $_REQUEST['client'];
 if ($cli==0) {  //  Client nou!
  ?>
  <form name="formular" method="post" onclick= "myFunction()" action="memorez.php"  class="centrat">
    <table class="login centrat">

      <?php 
      echo ' <input type= "hidden" name = "coscump" value = '.$cos.'>';
      ?>

      <tr>
       <td>Nume * </td>
       <td> <input type="text" name = num> </td>
     </tr>
     
     <tr>
      <td>Adresa</td>
      <td><input type="text" name = adr></td>
    </tr>
    <tr>
     <td>Telefon * </td>
     <td> <input type="text" name = tel> </td>
   </tr>

   <tr>
    <td>Email</td>
    <td><input type="text" name = email></td>
  </tr>

  <tr>
    <td>Parola * </td>
    <td><input type="password" name = pw></td>
  </tr>

  <tr>
    <td colspan = 2 class="centrat"><input type="submit" name = "trimit" value = "Comanda"></td>
  </tr>
</table>
</form>


     <?php  //  Reiau scriptul
   } 
   else 
   {
     ?>

     <form action="memorez1.php" method="post" class="centrat">
       <table class="login centrat">
        <?php 
        echo '<input type= "hidden" name = "coscump" value = '.$cos.'>';
        ?>    
        <tr>
          <td>Nume </td>
          <td><input type="text" name = num></td>
        </tr>

        <tr>
          <td>Parola Dv. </td>
          <td><input type="password" name = pw></td>
        </tr>

        <tr>
          <td colspan = 2 class="centrat">
            <input type="submit" name ="trimit1"  value = "Comanda"></td>
          </tr>

        </table>
      </form>
      <?php
    }
    ?>
  </main>

</div>
<?php include "footer.php";?>
</body>
</html> 
