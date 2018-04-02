<?php
if(!isset($_SESSION)) 
{ 
        session_start(); 
}

// initializing variables
$username = "";
$email    = "";
$errors = array(); 
global $db;
// connect to the database
//$db = mysqli_connect('localhost', 'root', '', 'atlatl');
    $dsn = getenv('MYSQL_DSN');
    $user = getenv('MYSQL_USER');
    $password = getenv('MYSQL_PASSWORD');
    if(!isset($dsn, $user) || false ===$password){
        throw new Exception('Set MYSQL_DSN, MYSQL_USER, and MYSQL_PASSWORD environment variables');
    }
    
    try{
        //$user = "root";
        //$password = "";
        $db = new PDO($dsn, $user, $password);
        //$db = new PDO('mysql:host=localhost;dbname=atlatl', $user, $password);
    }catch(PDOException $e){
        echo "Error";
    }

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = $_REQUEST['username'];
  //$username = mysqli_real_escape_string($db, $_POST['username']);
  $email = $_REQUEST['email'];
  //$email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = $_REQUEST['password_1'];
  //$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = $_REQUEST['password_2'];
  //$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Usuario es requerido"); }
  if (empty($email)) { array_push($errors, "Correo eléctronico es requerido"); }
  if (empty($password_1)) { array_push($errors, "Contraseña es requerida"); }
  if ($password_1 != $password_2) {
	array_push($errors, "Contraseñas no coinciden");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $statement = $db->prepare("SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1");
  //$user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $statement->execute();
  //$result = mysqli_query($db, $user_check_query);
  $user = $statement->fetchAll();
  //$user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Usuario ya existente");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Correo eléctronico ya registrado");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$insert = $db->prepare("INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')");
  	$insert->execute();
    //mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "Bienvenido";
  	header('location: index.php');
  }
}

//....SELECT users.username, users.password FROM users

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = $_REQUEST['username'];
  //$username = mysqli_real_escape_string($db, $_POST['username']);
  $password = $_REQUEST['password'];
  //$password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Usuario es requerido");
  }
  if (empty($password)) {
  	array_push($errors, "Contraseña es requerida");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
    $stmt = $db->prepare(
          "SELECT users.username, users.password FROM users WHERE username='$username' AND password='$password'");
      if ($stmt->execute() === FALSE) {
        die("Could not execute prepared statement");
      }
    //$results = mysqli_query($db, $query);
  	if ($stmt->fetch() > 0) {
  	  $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;    
  	  $_SESSION['success'] = "Bienvenido";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Usuario o contraseña incorrectos");
  	}
  }
}

?>