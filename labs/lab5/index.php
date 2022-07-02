<?php
include("./models/interfaces/IReadWritable.php");
include("./models/IO/LocalReadWriter.php");
$localReaderWriter = new LocalReadWriter();
$courses = $localReaderWriter->getCourses();
//var_dump($courses);
?>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Course Manager</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
  <form enctype="multipart/form-data" action="server.php" method="POST">
    <div>
      <label>Cover Photo</label>
      <input type="file" name="photo">
    </div>
    <div>
      <input type="submit" value="Upload">
    </div>
  </form>
  <h1 class="text-primary">My Courses</h1>
  <form class="input-group mb-3" action="main.php" method="post">
    <input type="text" name="newCourse" class="form-control" placeholder="Course Number">
    <div class="input-group-append">
      <button class="btn btn-outline-secondary" type="submit" value="Submit">Add</button>
    </div>
  </form>


  <?php
  //include("main.php");
  foreach ($courses as $course) { ?>
    <div>
      <li class="list-group-item">
        <?php
        if ($course['completed'] == true) { ?>
          <input class="form-check-input me-1" type="checkbox" value="completed" checked aria-label="...">
        <?php } else { ?>
          <input class="form-check-input me-1" type="checkbox" value="completed" aria-label="...">
        <?php }

        echo $course['courseName']; ?>
        <a class="btn btn-outline-secondary" href="edit.php?id=<?php echo $course['id']; ?>" type="button">Edit</a>
        <a class="btn btn-danger" href="main.php?action_type=delete&id=<?php echo $course['id']; ?>" type="button">Delete</a>
      </li>
    <?php }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>