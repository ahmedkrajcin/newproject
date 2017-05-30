
 <html>

<head>
  <title>Ahmed</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script> 
  
  $(document).ready(function() {
    $('img').on('click', function() {
        $("#showImg").empty();
        var image = $(this).attr("src");
        $("#showImg").append("<img class='img-responsive' src='" + image + "' />")
    })
});
  </script>
  <style>
 
  </style>
</head>
<body>
 <?php include('includes/header.php'); ?>


<body>
<div class="container-fluid bg-3 text-center">    
  <h3>Albums</h3><br>
  <div class="row">
  <h2 id="Amsterdam">Amsterdam</h2> 
				<p>10 
				May 2011</p> 
    
      
				<div class="col-sm-3">
                 <a href="#" id="link1" data-toggle="modal" data-target="#myModal">
        <img src="albums/amsterdam/lrg/1.jpg" id="img1" class="img-responsive" width="250px">
      </a>
	 </div>
				<div class="col-sm-3">
                 <a href="#" id="link1" data-toggle="modal" data-target="#myModal">
        <img src="albums/amsterdam/lrg/2.jpg" id="img2" class="img-responsive" width="250px">
      </a>
	 </div><div class="col-sm-3">
                 <a href="#" id="link1" data-toggle="modal" data-target="#myModal">
        <img src="albums/amsterdam/lrg/3.jpg" id="img3" class="img-responsive" width="250px">
      </a>
	 </div><div class="col-sm-3">
                 <a href="#" id="link1" data-toggle="modal" data-target="#myModal">
        <img src="albums/amsterdam/lrg/4.jpg" id="img4" class="img-responsive" width="250px">
      </a>
	 </div>
				
				
			
    </div>
	<div class="row">
  <h2 id="honduras">Honduras</h2> 
				<p>10 
				Summer 2010</p> 
    <div class="col-sm-3">
                 <a href="#" id="link1" data-toggle="modal" data-target="#myModal">
        <img src="albums/honduras/lrg/1.jpg" id="img1" class="img-responsive" width="250px">
      </a>
	 </div>
				<div class="col-sm-3">
                 <a href="#" id="link1" data-toggle="modal" data-target="#myModal">
        <img src="albums/honduras/lrg/2.jpg" id="img2" class="img-responsive" width="250px">
      </a>
	 </div><div class="col-sm-3">
                 <a href="#" id="link1" data-toggle="modal" data-target="#myModal">
        <img src="albums/honduras/lrg/3.jpg" id="img3" class="img-responsive" width="250px">
      </a>
	 </div><div class="col-sm-3">
                 <a href="#" id="link1" data-toggle="modal" data-target="#myModal">
        <img src="albums/honduras/lrg/4.jpg" id="img4" class="img-responsive" width="250px">
      </a>
	 </div>
				
				
			
    </div>
	<div class="row">
	<h2>St. Lucia</h2> 
				<p>10 
				Spring 2010</p> 
    <div class="col-sm-3">
                 <a href="#" id="link1" data-toggle="modal" data-target="#myModal">
        <img src="albums/st-Lucia/lrg/1.jpg" id="img1" class="img-responsive" width="250px">
      </a>
	 </div>
				<div class="col-sm-3">
                 <a href="#" id="link1" data-toggle="modal" data-target="#myModal">
        <img src="albums/st-Lucia/lrg/2.jpg" id="img2" class="img-responsive" width="250px">
      </a>
	 </div><div class="col-sm-3">
                 <a href="#" id="link1" data-toggle="modal" data-target="#myModal">
        <img src="albums/st-Lucia/lrg/3.jpg" id="img3" class="img-responsive" width="250px">
      </a>
	 </div><div class="col-sm-3">
                 <a href="#" id="link1" data-toggle="modal" data-target="#myModal">
        <img src="albums/st-Lucia/lrg/4.jpg" id="img4" class="img-responsive" width="250px">
      </a>
    </div>
	</div>
    <div class="row">
    <h2 id="cuba">Cuba </h2> 
				<p>10 
				Summer 2010</p> 
     <div class="col-sm-3">
                 <a href="#" id="link1" data-toggle="modal" data-target="#myModal">
        <img src="albums/cuba/lrg/1.jpg" id="img1" class="img-responsive" width="250px">
      </a>
	 </div>
				<div class="col-sm-3">
                 <a href="#" id="link1" data-toggle="modal" data-target="#myModal">
        <img src="albums/cuba/lrg/2.jpg" id="img2" class="img-responsive" width="250px">
      </a>
	 </div><div class="col-sm-3">
                 <a href="#" id="link1" data-toggle="modal" data-target="#myModal">
        <img src="albums/cuba/lrg/3.jpg" id="img3" class="img-responsive" width="250px">
      </a>
	 </div><div class="col-sm-3">
                 <a href="#" id="link1" data-toggle="modal" data-target="#myModal">
        <img src="albums/cuba/lrg/4.jpg" id="img4" class="img-responsive" width="250px">
      </a>
    </div>
    
  </div>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body" id="showImg">
          <!-- here we create the image dynamically -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div><br>
 <?php include ('includes/footer.php'); ?>

</body>
</html>