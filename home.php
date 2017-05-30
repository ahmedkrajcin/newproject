
<!DOCTYPE html>
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
  <script>
  $(function a() {
    $(".video").click(function  a1() {
      var theModal = $(this).data("target"),
      videoSRC = $(this).attr("data-video"),
      videoSRCauto = videoSRC + "?modestbranding=1&rel=0&controls=0&showinfo=0&html5=1&autoplay=1";
      $(theModal + ' iframe').attr('src', videoSRCauto);
      $(theModal + ' button.close').click(function a2() {
        $(theModal + ' iframe').attr('src', videoSRC);
      });
    });
  });
  </script>
   <script> 
  
  $(document).ready(function() {
    $('img').on('click', function() {
        $("#showImg").empty();
        var image = $(this).attr("src");
        $("#showImg").append("<img class='img-responsive' src='" + image + "' />")
    })
});
  </script>
</head>
<body>
 <?php include('includes/header.php'); ?>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <p> Comments:</p><br>
       <?php 
	   $sql = "SELECT nickname, date, comment FROM myDB.comments Where aproved='1'";
$result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		echo "<h4>" . $row["nickname"]. " <small>" . $row["date"]. "</small></h4>
          <p>" . $row["comment"]. "</p>
          <br>";
       
    }
} else {
    echo "0 results";
}
	   
	    ?>
</div>
    <div class="col-sm-9">
      <h4><small>RECENT POSTS</small></h4>
      <div class="col-sm-12">
      
      <hr>
	  <div class="row">
      <h2 id="fist">I Love Amsterdam</h2>
      <h5><span  id="fist" class="glyphicon glyphicon-time"></span>  Sep 27, 2015.</h5>
      
      <p >Amsterdam is the Netherlands’ capital, known for its artistic heritage, elaborate canal system and narrow houses with gabled facades, legacies of the city’s 17th-century Golden Age...</p>
      <div class="col-sm-3">
             <a href="albums.php#amsterdam">    
        <img src="albums/amsterdam/lrg/1.jpg" id="img1" href="albums#amsterdam" width="100%">
      </a><div class="read_more">
                <a href="blogs.php#amsterdam" >Read More</a>
            </div>		
	 </div></div>
	 <div class="row">
      <h2 id="fist">I Love Honduras</h2>
      <h5><span  id="fist" class="glyphicon glyphicon-time"></span>  Sep 27, 2015.</h5>
      
      <p >Amsterdam is the Netherlands’ capital, known for its artistic heritage, elaborate canal system and narrow houses with gabled facades, legacies of the city’s 17th-century Golden Age. ..</p>
      <div class="col-sm-3">
       <a href="albums.php#honduras">          
        <img src="albums/honduras/lrg/1.jpg" href="albums#honduras" id="img1"  width="100%">
      </a><div class="read_more">
                <a href="blogs.php#honduras" >Read More</a>
            </div>	
	 </div></div>
	 <div class="row">
      <h2 id="fist">I Love Cuba</h2>
      <h5><span  id="fist" class="glyphicon glyphicon-time"></span>  Sep 27, 2015.</h5>
      
      <p >Amsterdam is the Netherlands’ capital, known for its artistic heritage, elaborate canal system and narrow houses with gabled facades, legacies of the city’s 17th-century Golden Age. ...</p>
      <div class="col-sm-3">
       <a href="albums.php#cuba">          
        <img src="albums/cuba/lrg/1.jpg" href="albums#cuba" id="img1"  width="100%">
      </a<div class="read_more">
                <a href="blogs.php#cuba" >Read More</a>
            </div>	
	 </div></div>
      
				
				
			
    </div> 
      <div class="row text-center">
  <h2>Amsterdam</h2> 
				<p>10 
				May 2011</p> 
    
      
				<div class="col-sm-3">
                 <a href="#" id="link1" data-toggle="modal" data-target="#myModal">
        <img src="albums/amsterdam/lrg/1.jpg" id="img1" class="img-responsive" width="100%">
      </a>
	 </div>
				<div class="col-sm-3">
                 <a href="#" id="link1" data-toggle="modal" data-target="#myModal">
        <img src="albums/amsterdam/lrg/2.jpg" id="img2" class="img-responsive" width="100%">
      </a>
	 </div>
	 <div class="col-sm-2">
	 
                 <a href="#" id="link1" data-toggle="modal" data-target="#myModal">
        <img src="albums/amsterdam/lrg/3.jpg" id="img3" class="img-responsive" width="250px">
      </a>  </div>
	 
                 
				
		<div class="read_more">
                <a href="albums.php#Amsterdam" >Read More</a>
            </div>		
			
    </div>
      
      
<div class="row">
  <button class="btn btn-default btn-lg video" data-video="https://www.youtube.com/embed/bBty4F6nOI8" data-toggle="modal" data-target="#videoModal">Play Video 8</button>
  </div>
  <div class="read_more">
                <a href="videos.php#eight" >Read More</a>
            </div>
      
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
	<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <iframe width="100%" height="350" src="" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>

<?php include ('includes/footer.php'); ?>

</body>
</html>
 

