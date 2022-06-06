<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lab4</title>
</head>

<body>
  <div>
    <form enctype="multipart/form-data" action="server.php" method="POST">
      <div>
        <label>Photo</label>
        <input type="file" name="photo">
      </div>
      <div>
        <input type="submit" value="Upload">
      </div>
    </form>
  </div>
</body>

</html>