<?php
class LocalReadWriter implements IReadWritable {
  public function getCourses() {
    return "courses";
  }

  public function addCourse($course) {
    // some logic to add that course to the file
    return "course added";
  }

  public function deleteCourse($id) {
    // lookup course in file by id and remove it
    return "course deleted";
  }

  public function completeCourse($id) {
    // lookup the course in the file by id and mark it as completed
    return "course completed";
  }
}