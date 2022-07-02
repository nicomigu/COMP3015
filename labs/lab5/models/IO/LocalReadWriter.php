<?php
class LocalReadWriter implements IReadWritable
{
  private string $fileName = "Courses.json";

  public function getCourses()
  {
    if (file_exists($this->fileName)) {
      $json = file_get_contents($this->fileName);
      $data = json_decode($json, true);
      //var_dump($data);
      return !empty($data) ? $data['courses'] : false;
    }

    return false;
  }

  public function getCourse($id)
  {
    $json = file_get_contents($this->fileName);
    $data = json_decode($json, true);

    foreach ($data['courses'] as $key => $value) {
      if ($value['id'] == $id) {
        return $value;
      }
    }
    return false;
  }

  public function addCourse(string $courseName)
  {
    $json = file_get_contents($this->fileName);
    $data = json_decode($json, true);
    if (!empty($data)) {
      $array = end($data['courses']);
      //var_dump($array);
      $id = $array['id'] + 1;
    } else {
      $id = 0;
    }

    $course = array("id" => $id, "courseName" => $courseName, "completed" => false);

    //var_dump($id);
    if (!empty($course)) {

      //var_dump($data);
      //$data = !empty($data) ? array_filter($data['courses']) : $data;
      //var_dump($data);
      if (!empty($data['courses'])) {
        array_push($data['courses'], $course);
      } else {
        $data['courses'] = $course;
      }
      //$newArray = array("courses" => $data);
      $insert = file_put_contents($this->fileName, json_encode($data));
      return $insert ? 'Course Added' : false;
    } else {
      return false;
    }
    // some logic to add that course to the file
  }

  public function editCourse(int $id, string $newCourseName)
  {
    $json = file_get_contents($this->fileName);
    $data = json_decode($json, true);

    foreach ($data['courses'] as $key => $value) {
      if ($value['id'] == $id) {
        //var_dump($value['courseName']);
        $course = array("id" => $value['id'], "courseName" => $newCourseName, "completed" => $value['completed']);
        unset($data['courses'][$key]);
        array_push($data['courses'], $course);
      }
    }

    $update = file_put_contents($this->fileName, json_encode($data));

    return $update ? true : false;
  }

  public function deleteCourse($id)
  {
    // lookup course in file by id and remove it
    //course = searchInCourses;
    // delete the courses;
    $json = file_get_contents($this->fileName);
    $data = json_decode($json, true);

    //var_dump($data);

    foreach ($data['courses'] as $key => $value) {
      if ($value['id'] == $id) {
        //var_dump($course['courseName']);
        //$arr_index[] = $value;
        unset($data['courses'][$key]);
      }
    }

    //var_dump($data);
    //$data = array_values($data);
    //$data = array("courses" => $data);
    //var_dump($data);
    $delete = file_put_contents($this->fileName, json_encode($data));
    //file_put_contents($this->fileName, json_encode($data));
    return true;
  }

  public function toggleCourse($id)
  {
    $json = file_get_contents($this->fileName);
    $data = json_decode($json, true);

    foreach ($data['courses'] as $key => $value) {
      if ($value['id'] == $id) {
        //var_dump($value['courseName']);
        $course = array("id" => $value['id'], "courseName" => $value['courseName'], "completed" => !$value['completed']);
        unset($data['courses'][$key]);
        array_push($data['courses'], $course);
      }
    }

    $update = file_put_contents($this->fileName, json_encode($data));

    return $update ? true : false;
  }
}
