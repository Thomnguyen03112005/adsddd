<?php 
    session_start();
    include("connection.php");
    include("fuctions.php");
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {

      $user_name = $_POST['user_name']
      $password = $_POST['password']

      if(!empty($user_name) && !empt($password) && !is_numeric($user_name))
      {
        $user_id = random_num(20);
        $query = "insert into user (user_id,user_name,password) values ('$user_id','$user_name','$password')";
        mysqli_query($con,$query);
        header("location: login.php")
        die;
      }else
      {
        echo "Please enter some valid information!";
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <header>Signup Form</header>
    <form action="#">
      <div class="field email">
        <div class="input-area">
          <input type="text" placeholder="Email Address">
          <i class="icon fas fa-envelope"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Email can't be blank</div>
      </div>
      <div class="field password">
        <div class="input-area">
          <input type="password" placeholder="Password">
          <i class="icon fas fa-lock"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Password can't be blank</div>
      </div>
      <div class="field password">
        <div class="input-area">
          <input type="password" placeholder="Passwordd">
          <i class="icon fas fa-lock"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Password can't be blank</div>
      </div>
      <input type="submit" value="Login">
    </form>
    <div class="sign-txt">Not yet member? <a href="#">Signup now</a></div>
  </div>


  <script src="script.js"></script>

</body>
</html>