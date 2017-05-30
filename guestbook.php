
 <html>

<head>
  <title>Ahmed</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <style>
    
  </style>
</head>
<body>
 <?php include('includes/header.php'); ?>
 
 <div class="container">
 <h4>Leave a Comment:</h4>
      
        <div class="form-group">
		<form action="posttodb.php" method="post">
          Nickname: <br/>
		  <input type='text' name='nickname' id='nickname' /><br />

          Email:  <br/>
		  <input type='text' name='email' id='email' /><br />

          Website:  <br/>
          <input type='text' name='website' id='website' /><br />

          Comment:<br />
          <textarea name='comment' id='comment' cols="25"></textarea><br />
		  <input type="submit" name="Submit" value="Submit" href="home.php">
      </form>
         
        </div>
        
      <br><br>
</div>
 <?php include ('includes/footer.php'); ?>

</body>
</html>