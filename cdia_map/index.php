<?php require('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/docs-assets/ico/favicon.png">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav" data-toggle="modal" data-target="#admin_modal">
            <li class="active"><a href="#">Add</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
        <div id="map" style="width: 100%; height: 500px"></div>
    </div><!-- /.container -->


<div class="modal fade" id="admin_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">CDIA Map Admin</h4>
      </div>

    <div class="modal-body">
      <div id="add_user">

        <form role="form" method="post" action="add_user.php" class="form-group">

          <div class="form-group">
            <label>Name</label>
          <div class="form-group">
            <input class="form-control" type="text" name="first_name" placeholder="first name" />
          </div>
          <div class="form-group">
            <input class="form-control" type="text" name="last_name" placeholder="last name" />
          </div>
          </div>
            
          <div class="form-group">
            <label>Address</label>
          <div class="form-group">
            <input class="form-control" class="form-control" type="text" name="city" placeholder="city" />
          </div>
          <div class="form-group">
            <input class="form-control" type="text" name="state" placeholder="state" />
          </div>
          </div>
            
            <label>Country</label>
          <div class="form-group">
            <input class="form-control" type="text" name="country" placeholder="country" />
          </div>
          </div>
            
            <label>Coordinates</label>
          <div class="form-group">
            <input class="form-control" type="text" name="latitude" placeholder="latitude" />
          </div>
          <div class="form-group">
            <input class="form-control" type="text" name="longitude" placeholder="longitude" />
          </div>
            
          <div class="form-group">
            <label>Program</label>
          <div class="form-group">
            <input class="form-control" type="text" name="program_id" />
          </div>
          </div>
            
          <div class="form-group">
            <label>Status</label>
          <div class="form-group">
            <input class="form-control" type="text" name="status_id" />
          </div>
          </div>
            
            <input class="form-control" type="hidden" name="id" />
        </form>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>

      </div><!-- close add_user -->
    </div><!-- close modal body -->

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-TRyl-TSofVSLZsgfngz3Bc89YaOWc60&sensor=false"></script>
    
    <?php $user = new \CDIA\User($db); ?>
    <script>
        var users = <?php echo $user->getAllUsers(); ?>;
    </script>
    <script src="js/js.js"></script>
  </body>
</html>
