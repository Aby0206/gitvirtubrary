<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>
</head>
<body>
  <?php

include '../../logreg/config.php';

session_start();
//echo $_SERVER['REQUEST_URI'];
$rest = substr($_SERVER['REQUEST_URI'], -5, 1);
//echo $rest;
//$parts = parse_url($url);
//parse_str($parts['query'], $query);
//echo $query['key'];
  $sql = "SELECT * FROM `datasorted` WHERE `COL 1` LIKE $rest LIMIT 1";
  
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo '<h2>Book</h2>

    <div style="text-align: center;" class="card">';                // output data of each rowe
    while($row = $result->fetch_assoc()) {
     // echo "id: " . $row["COL 1"]. " - Name: " . $row["COL 2"]. " " . $row["COL3"]. "<br>";
    //  echo $row["COL3"]."<br>";'./imgs/filenamehtml-content-holder'+i+'.jpg'
      echo '<img src="./imgs/filenamehtml-content-holder'.$rest.'.jpg" alt="Avatar" style="width:30%">
            <div class="container">
            <h4><b>'.$row["COL 4"].'</b></h4> <p>'.$row["COL3"].'</p> </div>';
    }echo '</div>';
  } else {
    echo "0 results";
  }


?>


  


</body>
</html> 