
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <link href="//vjs.zencdn.net/4.5/video-js.css" rel="stylesheet">

    <title>Cover Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->

    <!-- Custom styles for this template -->
    <link href="choose.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div id="showModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Dance Vines</h4>
          </div>
          <div id="modal-body" class="modal-body">
            <video id="vine_vid" class="video-js vjs-default-skin"
              controls preload="auto" width="500" height="500"
              poster="DanceMoves/Bernie.jpg">
             <source src="http://video-js.zencoder.com/oceans-clip.mp4" type='video/mp4' />
            </video>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="row items">
            <div class="col-md-3">
            <a title="bernie" href="#">
            <img height="150" width="150" src="DanceMoves/Bernie.jpg" />
            <h3>The Bernie</h3>
            </a>
            </div>
            <div class="col-md-3">
            <a title="dougie" href="#">
            <img height="150" width="150" src="DanceMoves/Dougie.png" />
            <h3>The Dougie</h3>
            </a>
            </div>
            <div class="col-md-3">
            <a title="jerkdance" href="#">
            <img height="150" width="150" src="DanceMoves/Jerk.jpg" />
            <h3>The Jerk</h3>
            </a>
            </div>
            <div class="col-md-3">
            <a href="#">
            <img height="150" width="150" src="" />
            <h3>title</h3>
            </a>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-3">
            <img height="150" width="150" src="" />
            <h3>title</h3>
            </div>
            <div class="col-md-3">
            <img height="150" width="150" src="" />
            <h3>title</h3>
            </div>
            <div class="col-md-3">
            <img height="150" width="150" src="" />
            <h3>title</h3>
            </div>
            <div class="col-md-3">
            <img height="150" width="150" src="" />
            <h3>title</h3>
            </div>
        </div>
          

          <div class="mastfoot">
            <div class="inner">
              <p>DanceSea 2014</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="//vjs.zencdn.net/4.5/video.js"></script>
    <script>
        
        
        k=0;
        
        $(".items a").on("click", function(){
            
        $.ajax({
              url: "/get.php",
              dataType: "JSON",
              type: "GET",
              data: {
                tag: $(this).attr("title"),
              },
              success: function( data ) {
                console.log(data);
                urls = [];
                for(i = 0; i < data.data.records.length; ++i)
                {
                    urls.push(data.data.records[i].videoUrl);
                }
                loadNext();
                $('#showModal').modal('show');
              }
            
        });
        });
        
        var vinePlayer = videojs("vine_vid");
        function loadNext()
        {
            console.log(urls[k]);
            $("#vine_vid source").attr("src", urls[k++]);
            vinePlayer.currentTime(0);
            vinePlayer.load();
            vinePlayer.play();
        }
        
          vinePlayer.ready(function(){
          this.on("ended", function(){ 
            loadNext();
          });
          });
    
    </script>
  </body>
</html>
