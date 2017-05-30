
 <html>

<head>
  <title>Ahmed</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script>
  $(function() {
    $(".video").click(function () {
      var theModal = $(this).data("target"),
      videoSRC = $(this).attr("data-video"),
      videoSRCauto = videoSRC + "?modestbranding=1&rel=0&controls=0&showinfo=0&html5=1&autoplay=1";
      $(theModal + ' iframe').attr('src', videoSRCauto);
      $(theModal + ' button.close').click(function () {
        $(theModal + ' iframe').attr('src', videoSRC);
      });
    });
  });
  </script>
</head>
<body>
 <?php include('includes/header.php'); ?>
 <div class="container">
 <div class="row">
 <button class="btn btn-default btn-lg video" data-video="https://www.youtube.com/embed/-TjtoP6-mcQ" data-toggle="modal" data-target="#videoModal">Play Video 1</button>
  </div>
  <div class="row">
  <button class="btn btn-default btn-lg video" data-video="https://www.youtube.com/embed/HBdcL7YsdBY" data-toggle="modal" data-target="#videoModal">Play Video 2</button>
  </div>
  <div class="row">
  <button class="btn btn-default btn-lg video" data-video="https://www.youtube.com/embed/vRTXnoDf-LU" data-toggle="modal" data-target="#videoModal">Play Video 3</button>
  </div>
  <div class="row">
  <button class="btn btn-default btn-lg video" data-video="https://www.youtube.com/embed/kBOv7xkIjcY" data-toggle="modal" data-target="#videoModal">Play Video 4</button>
  </div>
  <div class="row">
  <button class="btn btn-default btn-lg video" data-video="https://www.youtube.com/embed/lsylFQqt6Vc" data-toggle="modal" data-target="#videoModal">Play Video 5</button>
  </div>
  <div class="row">
  <button class="btn btn-default btn-lg video" data-video="https://www.youtube.com/embed/rnU-puAUMbs" data-toggle="modal" data-target="#videoModal">Play Video 6</button>
  </div>
  <div class="row">
  <button class="btn btn-default btn-lg video" data-video="https://www.youtube.com/embed/7S56-spEYas" data-toggle="modal" data-target="#videoModal">Play Video 7</button>
  </div>
  <div id="eight" class="row">
  <button class="btn btn-default btn-lg video" data-video="https://www.youtube.com/embed/bBty4F6nOI8" data-toggle="modal" data-target="#videoModal">Play Video 8</button>
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
  
  
  
 <?php include ('includes/footer.php'); ?>

</body>
</html>