<?php
require_once "../includes/dbconnect.php";
$msg = "";
$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : "0";
if(isset($_REQUEST['btnSubmit'])) {
$name = $_REQUEST['txtnickname'];
$email = $_REQUEST['txtemail'];
$comment = $_REQUEST['txtcomment'];
$aproved = $_REQUEST['txtaproved'];
$query1 = "update myDB.comments set nickname='$name',email='$email',comment='$comment',aproved='$aproved' where id = ".$id;
if(mysqli_query($conn,$query1)){
	
$msg = "Record Updated!";
header("Location: admin.php"); /* Redirect browser */
exit();
} else {
$msg = "Unable to Update!";
}
}
$query1 = "select * from myDB.comments where id='$id'";
$data = mysqli_query($conn,$query1);
$rec = mysqli_fetch_assoc($data)
?>
<html>
<body>
<form method="POST">
Nickname : <input type="text" value="<?php echo $rec['nickname']; ?>" name="txtnickname"/> <br/>
Email : <input type="text" value="<?php echo $rec['email']; ?>" name="txtemail"/> <br/>
Comment : <input type=”text” value="<?php echo $rec['comment']; ?>" name="txtcomment"/> <br/>
Aproved : <input type=”text” value="<?php echo $rec['aproved']; ?>" name="txtaproved"/> <br/>
<input type="submit" name="btnSubmit" value="Update"/> <br/>
<?php echo $msg; ?>
</form>
</body>
</html>