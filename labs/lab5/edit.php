<?php
include("./models/interfaces/IReadWritable.php");
include("./models/IO/LocalReadWriter.php");
$localReaderWriter = new LocalReadWriter();
$course = $localReaderWriter->getCourse($_GET['id']);
?>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Course Manager</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
  <p> Old Course Name: <?php echo $course['courseName']; ?>
  <form class="input-group mb-3" action="main.php?action_type=edit&id=<?php echo $course['id']; ?>" method="post">
    <input type="text" name="newCourseNumber" class="form-control" placeholder="New Course Number">
    <div class="input-group-append">
      <button class="btn btn-outline-secondary" type="submit" value="Submit">Add</button>
    </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>