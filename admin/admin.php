<?php
session_start();
include_once '../includes/dbconnect.php';
?>
<html><head>
  <title>Ahmed</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <style>
    
  </style>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home.php" action="home.php">Blog</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../home.php" action="home.php">Home</a></li>
        <li><a href="albums.php" action="../albums.php">Albums</a></li>
        <li><a href="videos.php" action="../videos.php">Videos</a></li>
        <li><a href="guestbook.php" action="./guestbook.php">Guestbook</a></li>
		<li><a href="blogs.php" action="../blogs.php">Blogs</a></li> 
		<?php // Create a login/logout link:
if (isset($_SESSION['id'])) {
	echo '<li class="last"><a href="logout.php">Logout</a></li>';
            } else {
            echo '
            <li class="last"><a href="login.php">Login</a></li>';
            }
            ?>
      </ul>
      
    </div>
  </div>
</nav>
</head>
<?php



$query="select * from mydb.comments";
$data = mysqli_query($conn,$query);

?>
<html>
<body>
<table border=”1″ cellpadding=”5″>
<tr>
<th>Nickname</th> <th>email</th> <th>comment</th><th>aproved</th> <th colspan=”2″>Action</th>
</tr>
<?php while($rec = mysqli_fetch_assoc($data)) { ?>
<tr>
<td> <?php echo $rec["nickname"]; ?> </td>
<td> <?php echo $rec["email"]; ?> </td>
<td> <?php echo $rec["comment"]; ?> </td>
<td> <?php echo $rec["aproved"]; ?> </td>
<td> <a href="edit.php?id=<?php echo $rec["id"]; ?>">edit</a> </td>
<td> <a onClick="return confirm('Sure to delete!')" href="delete.php?id=<?php echo $rec['id'];?>">delete</a> </td>
</tr>
<?php } ?>
</table>

<?php
$conn->close();







include('../includes/footer.php');

?>
 </html>