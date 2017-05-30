<?php
session_start();
include_once 'includes/dbconnect.php';?>
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
 <div class="col-sm-12">
      <h4><small>All POSTS</small></h4>
      <hr>
	  <div class="row">
      <h2 id="amsterdam">I Love Amsterdam</h2>
      <h5><span  id="fist" class="glyphicon glyphicon-time"></span>  Sep 27, 2015.</h5>
      
      <p >Amsterdam is the Netherlands’ capital, known for its artistic heritage, elaborate canal system and narrow houses with gabled facades, legacies of the city’s 17th-century Golden Age. Its Museum District houses the Van Gogh Museum, works by Rembrandt and Vermeer at the Rijksmuseum, and modern art at the Stedelijk. Cycling is key to the city’s character, and there are numerous bike paths.</p>
      <div class="col-sm-3">
                 
        <img src="albums/amsterdam/lrg/1.jpg" id="img1" href="albums#amsterdam" width="100%">
      </a>
	 </div></div>
	 <div class="row">
      <h2 id="honduras">I Love Honduras</h2>
      <h5><span  id="fist" class="glyphicon glyphicon-time"></span>  Sep 27, 2015.</h5>
      
      <p >Amsterdam is the Netherlands’ capital, known for its artistic heritage, elaborate canal system and narrow houses with gabled facades, legacies of the city’s 17th-century Golden Age. Its Museum District houses the Van Gogh Museum, works by Rembrandt and Vermeer at the Rijksmuseum, and modern art at the Stedelijk. Cycling is key to the city’s character, and there are numerous bike paths.</p>
      <div class="col-sm-3">
                 
        <img src="albums/honduras/lrg/1.jpg" href="albums#honduras" id="img1"  width="100%">
      </a>
	 </div></div>
	 <div class="row">
      <h2 id="cuba">I Love Cuba</h2>
      <h5><span  id="fist" class="glyphicon glyphicon-time"></span>  Sep 27, 2015.</h5>
      
      <p >Amsterdam is the Netherlands’ capital, known for its artistic heritage, elaborate canal system and narrow houses with gabled facades, legacies of the city’s 17th-century Golden Age. Its Museum District houses the Van Gogh Museum, works by Rembrandt and Vermeer at the Rijksmuseum, and modern art at the Stedelijk. Cycling is key to the city’s character, and there are numerous bike paths.</p>
      <div class="col-sm-3">
                 
        <img src="albums/cuba/lrg/1.jpg" href="albums#cuba" id="img1"  width="100%">
      </a>
	 </div></div>
      
				
				
			
    </div>    </div>

 <?php include ('includes/footer.php'); ?>

</body>
</html>