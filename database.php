

<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "recipe_db";


  $creteTableRecipes = "create table if not exists recipe(
    recipe_id int(8) auto_increment primary key not null,
    recipe_name varchar(32) not null,
    recipe_text varchar(255) not null,
  )";


  // Create connection
  $db = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($db->connect_error) {
      die("Connection failed: " . $db->connect_error);

    //create recipes table if it does not exist
  if ($db->query($createTableRecipes) === TRUE){
    echo"";
  }else{
    die("error creating users table " . $db->connect_error);
  }

 ?>
