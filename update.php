<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
</head>

<body>
    <form action="controller.php" method="POST">
        <label name="title">Note Title:</label><br>
        <input type="text" id="title"><br>
        <label name="description">Description:</label><br>
        <input type="text" id="description"><br>
        <input type="hidden" name="post-action" value="update-property"><br>
        <button type="submit" name="updateItem" value="<?php echo $_GET[$row["id"]] ?>">UPDATE</button>
    </form>
</body>

</html>