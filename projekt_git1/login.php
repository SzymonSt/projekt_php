<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<meta charset="utf-8">
</head>
<body>

<?php
   session_start();
   
class Users{
	public $name;
	private $password;

	
	public function Pass($accessPass){
		$password=$accessPass;
	}
}

//log in
@$user = new Users;
@$user->name = $_POST['name'];
@$has=$_POST['passwd'];
@$user->Pass($has);
$control=0;

$conn = new mysqli("localhost", "adm_db","db_pass","projekt_1" );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
	if($user->name!=null&&$has!=null){
		$res=mysqli_query($conn,"SELECT imie,haslo FROM usr");
		if ($res->num_rows > 0) {
		    while($row = $res->fetch_assoc()) {
        $nm=$row["imie"];
		$hs=$row["haslo"];
		if($nm===$user->name && $hs===$has){
			header("Location: profil.php");
			$control=1;
			break;
		}
		
        }
		if($control===0){
			echo "Wrong name or password";
		}
		else{}
		
		}
	}
else{
	header("Location: index.php");
}	
}


$_SESSION['usr_nm']=$nm;
?>


</body>

</html>