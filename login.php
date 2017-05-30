<?php
session_start();
include('includes/header.php');
?>
<div id="respond" class="container">
<h2>Login Page</h2>
    <form action="" method="post">
        <p>
            <input type="text" name="username" id="username" value="" size="22" />
            <label for="name"><small>Username*</small></label>
        </p>
        <p>
            <input type="password" name="password" id="pass" value="" size="22" />
            <label for="pass"><small>Password*</small></label>
        </p>
        <p>
            <input name="submit" type="submit" id="submit" value="Login" />
        </p>
    </form>
</div>
<?php
include('includes/footer.php');

// define variables and set to empty values
$name =  $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["username"]);
  $password = test_input($_POST["password"]);
  $admin="admin";
  
  if($name==$admin&&$password==12345){
	  $_SESSION["id"] = "green";
	  header("Location: admin/admin.php");
}
else{
	echo "wrong input";
}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>