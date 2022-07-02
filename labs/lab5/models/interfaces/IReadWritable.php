<?php

interface IReadWritable
{
  public function getCourses();
  public function addCourse(string $course);
  public function editCourse(int $id, string $newCourseName);
  public function deleteCourse(string $id);
  public function toggleCourse(string $id);
}
