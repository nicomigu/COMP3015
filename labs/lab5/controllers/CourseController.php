<?php
include("../models/classes/Course.php");
include("../models/interfaces/IReadWritable.php");
include("../models/IO/LocalReadWriter.php");
include("../models/IO/RemoteReadWriter.php");

class CourseController
{
  private IReadWritable $io;
  private string $fileName = "Course.json";

  public function __construct(string $username, IReadWritable $io)
  {
    $this->io = $io;
  }

  public function showCourses($jsonFile)
  {
    return $this->$io->getCourses();
  }

  public function addCourse()
  {
  }

  public function finishCourse()
  {
  }

  public function deleteCourse()
  {
  }
}
