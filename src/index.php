<?php
include '../controller.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="main.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
 
    <div class="container">
    <table>
      <tr>
        <th>id</th>
        <th>title</th>
        <th>Description</th>
        <th>Date</th>
        <th>Action</th>
      </tr>
      <section>
      <form action="../controller.php" method="POST">
      <input type="hidden" name="post-action" value="delete-property">

      <?php
      $sqlquery1 = "SELECT id,title,description,date FROM todos";
      $conn = DB::getConnection();
      $result = $conn->query($sqlquery1);
      if ($result->rowCount() > 0) {
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      ?>
          <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["title"]; ?></td>
            <td><?php echo $row["description"]; ?></td>
            <td><?php echo $row["date"]; ?></td>

            <td>
          <button type="submit" name="deleteItem" value="<?php echo $row["id"] ?>">DELETE</button>
          </form>

          <a href="add.php">
            <button>ADD</button>
          </a>
          <a href="update.php?id=<?php echo  $row["id"]?>">
            <button>UPDATE</button>
          </a>
        </td>

          </tr>
        <?php }
      } else { ?>
        <tr>
          <td colspan="4">No DATA Found in database</td></form>
          <td>
          <a href="add.php">
            <button>ADD NOte</button>
          </a>
          
        </td>
        </tr>
         
      <?php }
      ?>
       
       
        
    </table>
    </section>
    </div>
</body>

</html>