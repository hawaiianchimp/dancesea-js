
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

    <title>Dance Moves</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="animate.css">
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
        <div id="modal-content" class="modal-content">
          <div class="modal-header">
            <button type="button" class="close close_modal btn-lg pull-left" aria-hidden="true">&times;</button><br>
            <h4 id="modal-title" class="modal-title site__title">Dance Vines</h4>
          </div>
          <div id="modal-body" class="modal-body">
                <video id="vine_vid" class="video-js vjs-default-skin"
                  controls preload="auto" width="550" height="550"
                  poster="waves.png">
                 <source src="http://video-js.zencoder.com/oceans-clip.mp4" type='video/mp4' />
                </video>
            </div>
          <div class="modal-footer">
            <button type="button" onClick="loadPrev();" class="btn pull-left">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </button>
            <button type="button" onClick="loadNext();"class="btn pull-right">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
    
    <nav class="navbar navbar-default navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="backButton.png" style="margin-right:5px;" width="30em" height="30em">DanceSea</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    
    
    
    

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="container">

          <div class="row items">
            <div class="col-md-3 category animated fadeIn">
                <span title="berniedance" href="#">
                <img class="img-rounded" height="150" width="150" src="DanceMoves/Bernie.png" />
                <h3 class="site__title">The Bernie</h3>
                </span>
            </div>
            <div class="col-md-3 category animated fadeIn">
                <span title="dougie" href="#">
                <img class="img-rounded" height="150" width="150" src="DanceMoves/Dougie.png" />
                <h3 class="site__title">The Dougie</h3>
                </span>
            </div>
            <div class="col-md-3 category animated fadeIn">
            <span title="jerkdance" href="#">
            <img class="img-rounded" height="150" width="150" src="DanceMoves/Jerk.png" />
            <h3 class="site__title">The 
            Jerk</h3>
            </span>
            </div>
            <div class="col-md-3 category animated fadeIn">
            <span title="spongebobdance" href="#">
            <img class="img-rounded" height="150" width="150" src="DanceMoves/Spongebob.png" />
            <h3 class="site__title">The Spongebob</h3>
            </span>
            </div>
        </div>
        <br>
        <div class="row items">
            <div class="col-md-3 category animated fadeIn">
            <span title="shuffling" href="#">
            <img class="img-rounded" height="150" width="150" src="DanceMoves/Shuffling.png" />
            <h3 class="site__title">Shuffling</h3>
            </span>
            </div>
            <div class="col-md-3 category animated fadeIn">
            <span title="robotdance" href="#">
            <img class="img-rounded" height="150" width="150" src="DanceMoves/Robot.png" />
            <h3 class="site__title">The Robot</h3>
            </span>
            </div>
            <div class="col-md-3 category animated fadeIn">
            <span title="spidermandance" href="#">
            <img class="img-rounded" height="150" width="150" src="DanceMoves/Spiderman.png" />
            <h3 class="site__title">The Spiderman</h3>
            </span>
            </div>
            <div class="col-md-3 category animated fadeIn">
            <span title="macarana" href="#">
            <img class="img-rounded" height="150" width="150" src="DanceMoves/Macarena.png" />
            <h3 class="site__title">Macarana</h3>
            </span>
            </div>
        </div>
        <br>
        <div class="row items">
            <div class="col-md-3 category animated fadeIn">
            <span title="breakdancing" href="#">
            <img class="img-rounded" height="150" width="150" src="DanceMoves/BreakDance.png" />
            <h3 class="site__title">Break Dancing</h3>
            </span>
            </div>
            <div class="col-md-3 category animated fadeIn">
            <span title="scarecrowdance" href="#">
            <img class="img-rounded" height="150" width="150" src="DanceMoves/Scarecrow.png" />
            <h3 class="site__title">The Scarecrow</h3>
            </span>
            </div>
            <div class="col-md-3 category animated fadeIn">
            <span title="catdaddy" href="#">
            <img class="img-rounded" height="150" width="150" src="DanceMoves/CatDaddy.png" />
            <h3 class="site__title">The Cat Daddy</h3>
            </span>
            </div>
            <div class="col-md-3 addnew animated fadeIn">
            <span title="" href="#">
            <img class="img-rounded" height="150" width="150" src="DanceMoves/add.png" />
            <h3><input id="add_dance" class="site__title butt" type="text" size="8" placeholder="Add Dance"/></h3>
            </span>
        </div>
          
        
          <div class="mastfoot">
            <div class="inner">
              <p> <a href="http://dancesea.herokuapp.com/">DanceSea</a> Built by <a href="http://www.seantburke.com/?r=dancesea">Sean Thomas Burke</a>, Sonal Prasad, and Pritika Natraj &copy; 2014</p>
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
        console.log("javascript");
        
        
        $(".category").on("click", function(){
            getAJAX($(this).find("span").attr("title"), $(this).find("h3").html());
        });
        
        $("#add_dance").keypress(function(e){ 
            if (e.which == 13) {
                getAJAX($("#add_dance").val(), $("#add_dance").val());
            }
        });
        
        function getAJAX(tag, title){
            $('#showModal').modal('show');
                $('#modal-title').html(title);
                
                $.ajax({
                  url: "/get.php",
                  dataType: "JSON",
                  type: "GET",
                  data: {
                    tag: tag,
                  },
                  success: function( data ) {
                    console.log(data);
                    urls = [];
                    datalength = data.data.records.length;
                    for(i = 0; i < data.data.records.length; ++i)
                    {
                        urls.push(data.data.records[i].videoUrl);
                    }
                    loadNext();
                    $('#showModal').modal('show');
                  }
                
            });
        
        }
        
        vinePlayer = videojs("vine_vid");
        function loadNext()
        {
            console.log(urls[(k%datalength)]);
            $("#vine_vid source").attr("src", urls[(k++%datalength)]);
            vinePlayer.currentTime(0);
            vinePlayer.load();
            vinePlayer.play();
        }
        
        function loadPrev()
        {
            console.log(urls[(k%datalength)]);
            $("#vine_vid source").attr("src", urls[(k--%datalength)]);
            vinePlayer.currentTime(0);
            vinePlayer.load();
            vinePlayer.play();
        
        }
        
          vinePlayer.ready(function(){
          this.on("ended", function(){ 
            loadNext();
          });
          });
        
        
        $(".close_modal").on("click", function(){
            $('#showModal').modal('hide');
            vinePlayer.pause();
        });
        
    
        
        </script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        
          ga('create', 'UA-49734667-1', 'dancesea.herokuapp.com');
          ga('send', 'pageview');
        
        </script>
        </body>
        </html>
      