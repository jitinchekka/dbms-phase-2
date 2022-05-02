


<!-- PHP code -->
<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>Welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>this is an user page</p>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

<table class="table">
   <thead>
      <th scope="col">ID</th>
      <th scope="col">Movie name</th>
      <th scope="col">cast</th>
      <th scope="col">year_of_release</th>
      <th scope="col">Genre</th>
      <th scope="col">rating</th>
      <th scope="col">pic_link</th>
   </thead>
   <?php
      $sql = "SELECT * FROM movie_form";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
         while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["movie_name"] . "</td>";
            echo "<td>" . $row["cast"] . "</td>";

            echo "<td>" . $row["year_of_release"] . "</td>";
            echo "<td>" . $row["genre"] . "</td>";
            echo "<td>" . $row["rating"] . "</td>";
            echo "<td>" . $row["pic_link"] . "</td>";
            echo "</tr>";
         }
      } else {
         echo "0 results";
      }
      ?>
   >
</table>
</body>
</html>