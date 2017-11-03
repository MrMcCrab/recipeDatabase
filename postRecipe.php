

<?php

  include 'database.php';


  $recipeName = $_POST['recipeName'];
  $ingredients = implode(',',$_POST['ingredient']);
  $text = implode(',',$_POST['recipe']);
  // $amount = implode(',',$_POST['amount']);
  // echo $ingredients."<br>".$amount; //you could comment this
  $sql = "INSERT INTO `recipe` (`recipe_name`,
  `recipe_ingredient`, 'recipe_text') VALUES ('".$recipeName."', '".$ingredients."', '".$text."')";
  $stmt = $db->prepare($sql);
  $stmt->execute();


 ?>
