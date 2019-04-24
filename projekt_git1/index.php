<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<meta charset="utf-8">
</head>
<body style="background-image: linear-gradient(to right,#4da6ff, grey);">
<div class="jumbotron sign">
<h3>Sign up</h3>
<form action="signup.php" method="post">
<!--User sign up-->
Name:<input name="name" class="form-control" type="text"><br>
Surname:<input name="surname" class="form-control" type="text"><br>
Age:<input name="age" class="form-control" type="number"><br>
Password:<input name="passwd" class="form-control" type="password"><br>
<input type="submit" value="Sign up">
</form>
</div>
<div class="jumbotron sign">
<h3>Log in</h3>
<form action="login.php" method="post">
<!--User log in-->
Name:<input name="name" class="form-control" type="text"><br>
Password:<input name="passwd" class="form-control" type="password"><br>
<input type="submit" value="Log in">
</form>
</div>

</body>
</html>