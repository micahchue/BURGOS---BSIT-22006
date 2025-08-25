<?php 

    $email = $password = "";
    $emailErr = $passwordErr = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        if(empty($_POST["email"])) {
            $emailErr = "Email is required!";
        } else {
            $email = $_POST["email"];
        }

        if(empty($_POST["password"])) {
            $passwordErr = "Password is required!";
        } else {
            $password = $_POST["password"];
        }

        if($email && $password) {
            include_once("connection.php");

            $check_email = mysqli_query($conn, "SELECT * FROM user1  WHERE email = '$email'");
            $check_email_row = mysqli_num_rows($check_email);

            if($check_email_row > 0) {
                while($row = mysqli_fetch_assoc($check_email)) {                  
                    $db_password = $row["Password"];
                    $db_account_type = $row["Account_Type"];

                    if($password == $db_password) {
                        if($db_account_type == "1") {
                            header("location:admin.php");
                        } else {
                            header("location:user.php");
                        }
                    } else {
                        $passwordErr = "Ang iyong Password ay hindi tama!!!";
                    }
                }
            } else {
                $emailErr = "Ang iyong Email ay hindi tugma!!!";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login & Registration Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<style>
/* Import Google font - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  min-height: 100vh;
  width: 100%;
  background-image: url('login.jpg');
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.container{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  max-width: 430px;
  width: 100%;
  background: none;
  border-radius: 7px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.3);
}
.container .registration{
  display: none;
}
#check:checked ~ .registration{
  display: block;
}
#check:checked ~ .login{
  display: none;
}
#check{
  display: none;
}
.container .form{
  padding: 2rem;
}
.form header{
  font-size: 2rem;
  font-weight: 500;
  text-align: center;
  margin-bottom: 1.5rem;
}
 .form input{
   height: 60px;
   width: 100%;
   padding: 0 15px;
   font-size: 17px;
   margin-bottom: 1.3rem;
   border: 1px solid #800080;
   border-radius: 6px;
   outline: none;
 }
 .form input:focus{
   box-shadow: 0 1px 0 rgba(0,0,0,0.2);
 }
.form a{
  font-size: 16px;
  color: #800080;
  text-decoration: none;
}
.form a:hover{
  text-decoration: underline;
}
.form input.button{
  color: #fff;
  background: aqua;
  font-size: 1.2rem;
  font-weight: 500;
  letter-spacing: 1px;
  margin-top: 1.7rem;
  cursor: pointer;
  transition: 0.4s;
}
.form input.button:hover{
  background: #800080;
}
.signup{
  font-size: 17px;
  text-align: center;
}
.signup label{
  color: #800080;
  cursor: pointer;
}
.signup label:hover{
  text-decoration: underline;
}
</style>
<body>
    <section> 
        
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Login Form</header>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <span class="error"><?php echo $emailErr;?></span><br>
      <input class="input" type="email" name="email" placeholder="Email" value="<?php echo $email?>"><br>
		<span class="error"><?php echo $passwordErr;?></span><br>
        <input class="input" type="password" name="password" placeholder="Password" value="<?php echo $password?>"><br>
        
        <input class="submit" type="submit" name="submit" value="Log In">
      </form>
    </div>

    </div>
</div>
        </form>
</section>

</body>
</html>