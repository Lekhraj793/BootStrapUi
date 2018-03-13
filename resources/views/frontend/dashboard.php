<html>
  <head>
      <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <script src="bootstrap/js/bootstrap.min.js" ></script>
  </head>
  <body>

    <?php echo View::make('includes.menubar'); ?>

    <div class="container">
      <div class="panel panel-primary" style="margin-top: 70px";>
        <div class="panel-heading">Customize Templates</div>
        <div class="panel-body" style="height: 120px;">
            <a href="#" class="btn btn-primary col-md-3" style="margin-top: 25px;">
              <i class="glyphicon glyphicon-eye-open" style="padding: 7px;"> </i>View Gallery</a>
            <a href="#" class="btn btn-primary col-md-3" style="float:right; margin-top: 25px;">
              <i class="glyphicon glyphicon-plus" style="padding: 7px;"></i>View Images</a>
        </div>
      </div>

      <div class="panel panel-primary" style="margin-top: 60px;">
        <div class="panel-heading">Learn more about Spice Images Gallery</div>
        <div class="panel-body">
            <p>Many users already have downloaded Bootstrap from MaxCDN when visiting another site.
              As a result, it will be loaded from cache when they visit your site, which leads to faster loading time.
              Also, most CDN's will make sure that once a user requests a file from it, it will be served from the server closest to them,
              which also leads to faster loading time.</p>
        </div>
      </div>
    </div>
  </body>
</html>
