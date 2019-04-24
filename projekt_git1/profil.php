<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<meta charset="utf-8">
</head>
<body>
<div class="jumbotron">
<?php
session_start();
echo "Hi "."<mark>".$_SESSION['usr_nm']."</mark>".". ";
$name=$_SESSION['usr_nm'];

?>
Welcome in our webservice. If you need help contact our helpdesk <a href="">here</a>.
<a href="index.php">"<i style="float:right; font-size:1.6em; color:black;" class="fas fa-sign-out-alt">Log out</i></a>
</div>
<div style="float:left !important;">
<div class="card" style="border:none; width: 18rem;">
  <img src="user.png" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title">Your profile</h5>
    <p class="card-text">You can add your description and find your new friends with the same hobbies or jobs.</p>  
  </div>
  <form method="post" action="description.php">
   <div class="form-group">
    <label for="exampleFormControlTextarea1">Edit your description</label>
    <textarea name="des" class="form-control border border-success" id="exampleFormControlTextarea1" rows="10"></textarea><br>
	<input type="submit" value="Edit descriprion">
  </div>
</form>
</div>
</div>
<div style="float:left !important; margin-left:10%;">
<div class="jumbotron" >

<h4>Your Description:</h4>
<?php
$conn = new mysqli("localhost", "adm_db","db_pass","projekt_1" );
$que=mysqli_query($conn,"SELECT opis FROM usr WHERE imie='$name'");
    while ($row = $que->fetch_assoc()) {
        echo $row['opis'];
    }
?>
</div>
</div>
<div style="float:right !important;margin-left:10%;">
<div class="jumbotron">
<h4>People you may know:</h4>
<?php
$que2=mysqli_query($conn,"SELECT imie, opis FROM usr WHERE imie!='$name'");
    while ($row2 = $que2->fetch_assoc()) {
        echo "<h5>".$row2['imie']."</h5>";
		echo "<p>".$row2['opis']."</p>";
    }
?>
</div>
</div>
</body>
</html>