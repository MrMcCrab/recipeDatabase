
<?php
  include 'header.php';
 ?>

  <body>
    <div class="container">

      <div class="row">

        <div class="col-md-4">

        </div>

        <div class="col-md-4">
          <div class="jumbotron">

          </div>
        </div>

        <div class="col-md-4">

        </div>

      </div>


      <div class="row">

        <div class="col-md-4">

        </div>

        <div class="col-md-4">
          <form id="searchForm" class="" action="search.php" method="post">
            <div class="form-group">
              <input class="form-control" type="text" name="searchRecipeName" value="">
            </div>      
          </form>

          <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
              <button class="btn btn-primary" type="submit" name="button" form="searchForm">hae</button>
            </div>
            <div class="col-md-4">

            </div>
          </div>
        </div>

        <div class="col-md-4">

        </div>

      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
