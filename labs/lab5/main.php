<?php
include("./models/interfaces/IReadWritable.php");
include("./models/classes/Course.php");
include("./models/IO/LocalReadWriter.php");
include("./controllers/CourseController.php");
$localCourseManager = new CourseController(new LocalReadWriter());
$courses = $localCourseManager->showCourses();

if (isset($_POST['newCourse'])) {
  $localCourseManager->addCourse($_POST['newCourse']);
  header('Refresh:0; url=index.php');
} elseif (($_REQUEST['action_type'] == 'delete') && !empty($_GET['id'])) {
  $localCourseManager->deleteCourse($_GET['id']);
  header('Refresh:0; url=index.php');
} elseif (($_REQUEST['action_type'] == 'edit') && !empty($_GET['id'])) {
  $localCourseManager->editCourse($_GET['id'], $_POST['newCourseNumber']);
  header('Refresh:0; url=index.php');
}
