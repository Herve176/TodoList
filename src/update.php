<?php include '../connection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="main.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
</head>

<body>
    <div class="container">
    <form action="../controller.php" method="POST">
    <input type="hidden" name="post-action" value="update-property"><br>
    <label for="title">Note Title:</label><br>
    <input type="text" id="title" name="title"><br>
    <label for="id"></label><br>
    <input type="hidden" name="id" id="id" value="<?php echo $_GET['id']?>"><br>
    <label for="description">Description:</label><br>
    <input type="text" id="description" name="description"><br>
    <input type="submit" value="UPDATE">
    </form>
    </div>
</body>

</html>