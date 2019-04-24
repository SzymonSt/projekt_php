<?php
class Users{
	public $name;
	private $password;
	public $surname;
	public $age;
	
	
	public function Pass($accessPass){
		$password=$accessPass;
	}
}

//sign up
@$user = new Users;
@$user->name = $_POST['name'];
@$user->surname = $_POST['surname'];
@$user->age = $_POST['age'];
@$has=$_POST['passwd'];
@$user->Pass($has);

$conn = new mysqli("localhost", "adm_db","db_pass","projekt_1" );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
	if($user->name!=null&&$user->surname!=null&&$user->age!=null&&$has!=null){
		$res=mysqli_query($conn,"INSERT INTO usr(imie,nazwisko,wiek,haslo) VALUES ('$user->name','$user->surname','$user->age','$has')");
		echo "You are signed up. Welcome in our webservice. You can log in now. Redirection in 5 seconds";
		header( "refresh:5; url=index.php" ); 
	}
else{
	header("Location: index.php");
}	
}




?>