

<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "recipe_db";


  $creteTableRecipes = "create table if not exists recipe(
    recipe_id int(8) auto_increment primary key not null,
    recipe_name varchar(32) not null,
    recipe1 varchar(32),
    recipe2 varchar(32),
    recipe3 varchar(32),
    recipe4 varchar(32),
    recipe5 varchar(32),
    recipe6 varchar(32),
    recipe7 varchar(32),
    recipe8 varchar(32),
    recipe9 varchar(32),
    recipe10 varchar(32),
    recipe11 varchar(32),
    recipe12 varchar(32),
    recipe13 varchar(32),
    recipe14 varchar(32),
    recipe15 varchar(32),
    recipe16 varchar(32),
    recipe17 varchar(32),
    recipe18 varchar(32),
    recipe19 varchar(32),
    recipe20 varchar(32),
    recipe21 varchar(32),
    recipe22 varchar(32),
    recipe23 varchar(32),
    recipe24 varchar(32),
    recipe25 varchar(32),
    recipe26 varchar(32),
    recipe27 varchar(32),
    recipe28 varchar(32),
    recipe29 varchar(32),
    recipe30 varchar(32)
  )";


  // Create connection
  $db = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($db->connect_error) {
      die("Connection failed: " . $db->connect_error);
    }

    //create recipes table if it does not exist
  if ($db->query($creteTableRecipes) === TRUE){
    echo"";
  }else{
    die("error creating recipe table " . $db->connect_error);
  }

 ?>
