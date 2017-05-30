<?php
include('/includes/dbconnect.php');
// define variables and set to empty values

$name = $email  = $comment = $website = "";
function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["nickname"])) {
echo "Nickname is required";
} else {
 $name=test_input($_POST["nickname"]);
// check if name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
echo "Only letters and white space allowed";
}
}
if (empty($_POST["email"])) {
echo "Email is required";
} else {
$email=test_input($_POST["email"]);
// check if e-mail address is well-formed
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
echo "Invalid email format";
}
}
if (empty($_POST["website"])) {
$website = "";
} else {
$website = test_input($_POST["website"]);
// check if URL address syntax is valid (this regular expression also allows dashes in the URL)
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
echo "Invalid URL";
}
}
if (empty($_POST["comment"])) {
$comment = "";
} else {
$comment = test_input($_POST["comment"]);
}

$sql2="INSERT INTO myDB.comments(nickname, email, website, comment) VALUES ('$name','$email','$website','$comment');";
if ($conn->query($sql2) === TRUE) {
    echo "comment added successfully";
	include('home.php');
	
} else {
    echo "Error creating comment: " . $conn->error;
}

$conn->close();
}
?>