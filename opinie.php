
<?php include "header.php";?>
<?php include "nav.php";?>
<div class = "div_opinie">
	<main>
	 
         <form name="formular" method="post" action="introducere.php" class="centrat">
           <table class="login centrat">
            <tr>
               <td>Numele:</td>
               <td><input type="text" name="nume" size=30 /></td>   
           </tr>

           <tr>
               <td>Prenumele:</td>
               <td><input type="text" name="prenume" size=40 /></td>
          </tr>

          <tr>
               <td>E-mail:</td>
               <td><input type="text" name="email" size=60 /></td>
           </tr>

          <tr>
               <td>Mesajul tau: </td>
               <td><textarea name="mesaj" rows=5 cols=53></textarea></td>
           </tr>

            <tr>
                <td colspan="2">
                <input type="submit" style="float:left;" value="Introduceti impresia proprie...">
                <input type="reset" style="float:right;" value="Stergeti datele introduse...">
           </tr>
        </table>
      </form>
</main>
			
	</main>
</div>
<?php include "footer.php";?>
</body>
</html> 
