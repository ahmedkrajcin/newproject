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
        <li class="active"><a href="home.php" action="home.php">Home</a></li>
        <li><a href="albums.php" action="albums.php">Albums</a></li>
        <li><a href="videos.php" action="videos.php">Videos</a></li>
        <li><a href="guestbook.php" action="guestbook.php">Guestbook</a></li>
		<li><a href="blogs.php" action="blogs.php">Blogs</a></li> 
		<?php // Create a login/logout link:
if (isset($_SESSION['id'])) {
	echo '<li class="last"><a href="admin/logout.php">Logout</a></li>';
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