

<?php

  include 'database.php';


  $recipeName = $_POST['recipeName'];

  if (isset($_POST['recipe1'])) {
    $recipe1 = $_POST['recipe1'];
  }else {
    $recipe1 = "";
  }
  if (isset($_POST['recipe2'])) {
    $recipe2 = $_POST['recipe2'];
  }else {
    $recipe2 = "";
  }
  if (isset($_POST['recipe3'])) {
    $recipe3 = $_POST['recipe3'];
  }else {
    $recipe3 = "";
  }
  if (isset($_POST['recipe4'])) {
    $recipe4 = $_POST['recipe4'];
  }else {
    $recipe4 = "";
  }
  if (isset($_POST['recipe5'])) {
    $recipe5 = $_POST['recipe5'];
  }else {
    $recipe5 = "";
  }
  if (isset($_POST['recipe6'])) {
    $recipe6 = $_POST['recipe6'];
  }else {
    $recipe6 = "";
  }
  if (isset($_POST['recipe7'])) {
    $recipe7 = $_POST['recipe7'];
  }else {
    $recipe7 = "";
  }
  if (isset($_POST['recipe8'])) {
    $recipe8 = $_POST['recipe8'];
  }else {
    $recipe8 = "";
  }
  if (isset($_POST['recipe9'])) {
    $recipe9 = $_POST['recipe9'];
  }else {
    $recipe9 = "";
  }
  if (isset($_POST['recipe10'])) {
    $recipe10 = $_POST['recipe10'];
  }else {
    $recipe10 = "";
  }
  if (isset($_POST['recipe11'])) {
    $recipe11 = $_POST['recipe11'];
  }else {
    $recipe11 = "";
  }
  if (isset($_POST['recipe12'])) {
    $recipe12 = $_POST['recipe12'];
  }else {
    $recipe12 = "";
  }
  if (isset($_POST['recipe13'])) {
    $recipe13 = $_POST['recipe13'];
  }else {
    $recipe13 = "";
  }
  if (isset($_POST['recipe14'])) {
    $recipe14 = $_POST['recipe14'];
  }else {
    $recipe14 = "";
  }
  if (isset($_POST['recipe15'])) {
    $recipe15 = $_POST['recipe15'];
  }else {
    $recipe15 = "";
  }
  if (isset($_POST['recipe16'])) {
    $recipe16 = $_POST['recipe16'];
  }else {
    $recipe16 = "";
  }
  if (isset($_POST['recipe17'])) {
    $recipe17 = $_POST['recipe17'];
  }else {
    $recipe17 = "";
  }
  if (isset($_POST['recipe18'])) {
    $recipe18 = $_POST['recipe18'];
  }else {
    $recipe18 = "";
  }
  if (isset($_POST['recipe19'])) {
    $recipe19 = $_POST['recipe19'];
  }else {
    $recipe19 = "";
  }
  if (isset($_POST['recipe20'])) {
    $recipe20 = $_POST['recipe20'];
  }else {
    $recipe20 = "";
  }
  if (isset($_POST['recipe21'])) {
    $recipe21 = $_POST['recipe21'];
  }else {
    $recipe21 = "";
  }
  if (isset($_POST['recipe22'])) {
    $recipe22 = $_POST['recipe22'];
  }else {
    $recipe22 = "";
  }
  if (isset($_POST['recipe23'])) {
    $recipe23 = $_POST['recipe23'];
  }else {
    $recipe23 = "";
  }
  if (isset($_POST['recipe24'])) {
    $recipe24 = $_POST['recipe24'];
  }else {
    $recipe24 = "";
  }
  if (isset($_POST['recipe25'])) {
    $recipe25 = $_POST['recipe25'];
  }else {
    $recipe25 = "";
  }
  if (isset($_POST['recipe26'])) {
    $recipe26 = $_POST['recipe26'];
  }else {
    $recipe26 = "";
  }
  if (isset($_POST['recipe27'])) {
    $recipe27 = $_POST['recipe27'];
  }else {
    $recipe27 = "";
  }
  if (isset($_POST['recipe28'])) {
    $recipe28 = $_POST['recipe28'];
  }else {
    $recipe28 = "";
  }
  if (isset($_POST['recipe29'])) {
    $recipe29 = $_POST['recipe29'];
  }else {
    $recipe29 = "";
  }
  if (isset($_POST['recipe30'])) {
    $recipe30 = $_POST['recipe30'];
  }else {
    $recipe30 = "";
  }



  $sql = "INSERT into recipe (recipe_name, recipe1, recipe2, recipe3, recipe4, recipe5, recipe6, recipe7, recipe8, recipe9, recipe10, recipe11, recipe12, recipe13, recipe14, recipe15, recipe16, recipe17, recipe18, recipe19, recipe20, recipe21, recipe22, recipe23, recipe24, recipe25, recipe26, recipe27, recipe28, recipe29, recipe30) values ('$recipeName', '$recipe1', '$recipe2', '$recipe3', '$recipe4', '$recipe5', '$recipe6', '$recipe7', '$recipe8', '$recipe9', '$recipe10', '$recipe11', '$recipe12', '$recipe13', '$recipe14', '$recipe15', '$recipe16', '$recipe17', '$recipe18', '$recipe19', '$recipe20', '$recipe21', '$recipe22', '$recipe23', '$recipe24', '$recipe25', '$recipe26', '$recipe27', '$recipe28', '$recipe29', '$recipe30')";

  if (mysqli_query($db, $sql)) {
    echo "New record created suffesfully";
    header ("refresh:1 url=index.php");
  }else {
    echo "Error:" . $sql . mysqli_error($db);
  }


  // $stmt_recipe = $db->prepare("insert into recipe (recipe_name, recipe1, recipe2, recipe3, recipe4, recipe5, recipe6, recipe7, recipe8, recipe9, recipe10, recipe11, recipe12, recipe13, recipe14, recipe15, recipe16, recipe17, recipe18, recipe19, recipe20, recipe21, recipe22, recipe23, recipe24, recipe25, recipe1, recipe2, recipe3, recipe4, recipe5) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
  // $stmt_recipe->bind_param("ssssssssssssssssssssssssssssss", $recipeName, $recipe1, $recipe2, $recipe3, $recipe4, $recipe5, $recipe6, $recipe7, $recipe8, $recipe9, $recipe1, $recipe11, $recipe1, $recipe13, $recipe14, $recipe15, $recipe16, $recipe17, $recipe1, $recipe19, $recipe20, $recipe21, $recipe22, $recipe23, $recipe24, $recipe25, $recipe1, $recipe2, $recipe3, $recipe4, $recipe5);
  // $stmt_recipe->execute();



 ?>
