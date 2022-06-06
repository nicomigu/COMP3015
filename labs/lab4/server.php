<?php
print_r($_FILES["photo"]);
const MAX_FILESIZE = 20000000;
const FILE_TYPE = ["image/jpg", "image/png", "image/gif", "image/jpeg"];

$photo = "";

if (in_array($_FILES["photo"]["type"], FILE_TYPE) && $_FILES["photo"]["size"] <= MAX_FILESIZE) {
  $photo = "uploads/" . md5(time() . $_FILES["photo"]["name"]) . ".jpg";

  move_uploaded_file($_FILES["photo"]["tmp_name"], $photo);
} else {
  die("Invalid photo");
}
