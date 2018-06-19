
<?php include "header.php";?>
<?php include "nav.php";?>
<div id = "continut_pag">
   <main>

     <h2 class=" centrat"><br><br>Adaugare produse</h2><br><br>
     <form name="formular" enctype="multipart/form-data" method="post" action="inserare.php" class="centrat">
       <table class="login centrat">
        <tr>
         <td>Categoria:</td>
         <td> 
          <select name="combo">
            <option selected value="initial">(Alege categoria)</option>
            <?php
            include("conn.php");

            class Categorii {
             public $id_categ;
             public $categ;
           }

           if(isset($cnx)) {
             $cda= "SELECT * FROM categorii";
             $stmt = $cnx->prepare($cda);
             $stmt->execute();
             while ($categ = $stmt->fetchObject('Categorii')) {
              echo '<option value="' . $categ->id_categ . '">' . $categ->categ . '</option>\n';
            }
            $cnx = null;
          }
          ?>
        </select>
      </td>
    </tr>


<tr>
   <td>Selectati imaginea mica: </td>
   <td><input type="file" name="fisier" /></td>
</tr>
<tr>
   <td>Selectati imaginea mare: </td>
   <td><input type="file" name="mare" /></td>
</tr>

<tr>
   <td>Numele produsului: </td>
   <td><input type="text" name="nume" /></td>
</tr>

<tr>
   <td>Prezentare:</td>
   <td><textarea name="prez"></textarea></td>
</tr>


<tr>
  <td>Pretul:</td>
  <td><input type="text" name="pret" /></td>
</tr>

<tr><br>
   <td><input type="submit" name="submita" value="Adauga"></td>
   <td><input type="reset" name="submitr" value="Sterge"></td>
</tr>
 
</table>
</form>
</main>
</div>
<?php include "footer.php";?>
</body>
</html> 
