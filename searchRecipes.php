
<?php
  include 'header.php';
  include 'database.php';
 ?>

  <body>
    <div class="container">

      <div class="row">

        <div class="col-md-4">
          <a href="index.php">Etusivulle</a>

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
          <form id="searchForm" class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
              <input class="form-control" type="text" name="searchRecipeName" value="">
            </div>
          </form>

          <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
              <button class="btn btn-primary btn-block btn-search" type="submit" name="button" form="searchForm">hae</button>
            </div>
            <div class="col-md-4">

            </div>
          </div>
        </div>

        <div class="col-md-4">

        </div>

      </div>


      <div class="row">
        <div class="col-md-4">

        </div>

        <div class="col-md-4">
          <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
              $search = $_POST['searchRecipeName'];
              $search2 = '%' . $search . '%';

              $sql = "SELECT * from recipe where recipe_name like '$search2'";
              $result = mysqli_query($db, $sql);

              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo '<a class="btn btn-outline-primary btn-block btn-recipe" href="recipe.php?id=' . $row['recipe_id'] . '">' . $row['recipe_name'] . '</a>' . '<br>';
                }

              }else {
                echo "0 results";
              }
            }
           ?>
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
