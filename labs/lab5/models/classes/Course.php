<?php

class Course
{
  private string $name;
  private bool $status;
  private int $id;

  public function __construct(string $name, bool $status)
  {
    $this->setName($name);
    $this->setStatus($status);
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId(int $id)
  {
    $this->id = $id;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setName($name)
  {
    if (strlen($name) == 0) {
      throw new Exception("Name length is not long enough");
    } else {
      $this->name = $name;
    }
  }
}
