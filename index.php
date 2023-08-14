<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="tablestyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><section>
    <table>
  <tr>
    <th>Title</th>
    <th>Description</th>
    <th>Date-created</th>
    <th>Action </th>
  </tr>
  <tr>
  <?php
  $sqlquery1[] = "SELECT id,title,description,date FROM todos";
    $result=$connection->query($sqlquery1);
    if($result->num_rows >0){
        while($row=$result->fetch_assoc()){
             echo "<tr><td>" . $row["id"]. "</td><td>" . $row["title"] . "</td><td>"
. $row["description"]. "</td><td>".$row["date"]."</td></tr>";
  }
    }else{echo"No DATA FOund in database";}
$connection->close();
  ?>
    <td><button>DELETE</button>
    <button onclick="window.location.href = 'add.php';">ADD</button>
    <button onclick="window.location.href = 'update.php';">UPDATE</button>
  </tr>
</table></section>
</body>
</html>


<?php include 'controller.php';?>
