
<?php include "header.php";?>
<?php include "nav.php";?>
<div id = "continut_pag">
	 <div class="col-sm-12 col-md-12 col-lg-12" style="background-color: #1c1e1c;">
	 
         <form name="formular" method="post" action="introducere.php" class="centrat">
           <table class="login centrat">
            <tr>
               <td>Numele:</td>
               <td><input type="text" name="nume"  /></td>   
           </tr>

           <tr>
               <td>Prenumele:</td>
               <td><input type="text" name="prenume" /></td>
          </tr>

          <tr>
               <td>E-mail:</td>
               <td><input type="text" name="email"  /></td>
           </tr>

          <tr>
               <td>Mesajul tau: </td>
               <td><textarea name="mesaj" rows=5 ></textarea></td>
           </tr>

            <tr>
                <td colspan="2">
                <input type="submit" style="float:left;" value="Trimite parerea ta">
                <input type="reset" style="float:right;" value="Sterge">
           </tr>
        </table>
      </form>		
</div>
	<?php include "footer.php";?>
</div>
</body>
</html> 
