<?php
session_start();
$conn = new mysqli("localhost", "adm_db","db_pass","projekt_1" );
$name=$_SESSION['usr_nm'];
@$descryption=$_POST['des'];
$que=mysqli_query($conn,"UPDATE usr SET opis='$descryption' WHERE imie='$name'");
echo "<mark>".$_SESSION['usr_nm']."</mark>".". Your description added. Redirect in 5 seconds.";
header( "refresh:5; url=profil.php" ); 


?>