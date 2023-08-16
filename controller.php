<?php

include 'connection.php';



   $value = $_POST['post-action'];

  if ($value=='add-property'){
  try {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = date("Y/m/d");
    $id = '';
    // Prepare the SQL query
    $connection = DB::getConnection();
    $query = $connection->prepare("INSERT INTO todos (id,title,description,date) VALUES(?,?, ?,?)");

    // Bind the values to the prepared statement
    $query->bindParam(1, $id);
    $query->bindParam(2, $title);
    $query->bindParam(3, $description);
    $query->bindParam(4, $date);

    // Execute the query
    $query->execute();

    // Check if the query was successful
    echo "Data inserted successfully";
  } catch (PDOException $e) {
    // Display any errors that occurred
    echo "Error: " . $e->getMessage();
  }
}elseif($value == 'update-property'){
  try {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = date("Y/m/d");
    $id = $_POST['id'];
    // Prepare the SQL query
    $connection = DB::getConnection();
    $query = $connection->prepare("UPDATE todos SET id=?,title=?,description=?,date=? WHERE id=?");

    // Bind the values to the prepared statement
    $query->bindParam(1, $id);
    $query->bindParam(2, $title);
    $query->bindParam(3, $description);
    $query->bindParam(4, $date);
    $query->bindParam(5, $id);

    // Execute the query
    $query->execute();

    // Check if the query was successful
    echo "Data Updated Succesfully";
  } catch (PDOException $e) {
    // Display any errors that occurred
    echo "Error: " . $e->getMessage();
  }

}elseif ($value == 'delete-property') {
  try {
      $id = $_POST['deleteItem'];
      $connection = DB::getConnection();
      $query = $connection->prepare("DELETE FROM todos WHERE id = :id");
      $query->bindParam(':id', $id, PDO::PARAM_INT); // Bind the ID parameter as an integer
      $query->execute();
      echo "Data DELETED Successfully";
  } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
  }
}


?>