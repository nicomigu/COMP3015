<?php

class CourseController
{
  private IReadWritable $io;


  public function __construct(IReadWritable $io)
  {
    $this->io = $io;
  }

  public function showCourses()
  {
    $courses = $this->io->getCourses();
    //var_dump($courses);

    return $courses;
  }

  public function addCourse($course)
  {
    //createCourseId 
    $this->io->addCourse($course);
  }

  public function editCourse($id, string $newCoursename)
  {
    $this->io->editCourse($id, $newCoursename);
  }

  public function toggleCourse($id)
  {
    $this->io->toggleCourse($id);
    //print webpage
  }

  public function deleteCourse($id)
  {
    $this->io->deleteCourse($id);
    //print webpage
  }
}
