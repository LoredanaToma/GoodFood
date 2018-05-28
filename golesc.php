
<?php include "header.php";?>
<?php include "nav.php";?>
<div class = "continut_pag">
	<main>
    <?php 
    session_start();
    include "header.php";
    ?>

    <div id="continut_pag">
     <main>
<?php
   session_start(); 
   session_unset($_SESSION['cos_cumparaturi']);
   session_destroy ($_SESSION['cos_cumparaturi']);
   session_write_close ($_SESSION['cos_cumparaturi']);
   // Merg la index
   header('Location: index.php');
?>
</main>

</div>
<?php include "footer.php";?>
</body>
</html> 
