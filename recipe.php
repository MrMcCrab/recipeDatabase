

<?php

  include 'header.php';
  Include 'database.php';

 ?>


 <body>
   <div class="container">

     <div class="row">
      <div class="col-md-4">

      </div>
      <div class="col-md-4">
        <div class="jumbotron">
          <?php
          $id = $_GET['id'];
          $sql1 = "SELECT recipe_name from recipe WHERE recipe_id ='$id'";
          $result1 = mysqli_query($db, $sql1);
          if (mysqli_num_rows($result1) > 0) {
            while ($row1 = mysqli_fetch_assoc($result1)) {
              echo "<h3 class='jumbotron-header'>" . $row1['recipe_name'] . "</h3>";
            }
          }
          echo $row1['recipe_name'];
          ?>
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

          $sql = "SELECT * FROM recipe WHERE recipe_id = '$id'";

          $result = mysqli_query($db, $sql);

          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo '<ul class="list-group">';
              echo '<li class="list-group-item">' . $row['recipe1'] . '</li>';
              echo '<li class="list-group-item">' . $row['recipe2'] . '</li>';
              echo '<li class="list-group-item">' . $row['recipe3'] . '</li>';
              echo '<li class="list-group-item">' . $row['recipe4'] . '</li>';
              echo '<li class="list-group-item">' . $row['recipe5'] . '</li>';
              echo '<li class="list-group-item">' . $row['recipe6'] . '</li>';
              echo '<li class="list-group-item">' . $row['recipe7'] . '</li>';
              echo '<li class="list-group-item">' . $row['recipe8'] . '</li>';
              echo '<li class="list-group-item">' . $row['recipe9'] . '</li>';
              echo '<li class="list-group-item">' . $row['recipe10'] . '</li>';
              echo '</ul>';

            if (empty($row['recipe'])) { /* code to do */ }


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
