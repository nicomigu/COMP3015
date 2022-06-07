<?php
require 'vendor/autoload.php';

use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;



//  Or configure programatically

$config = Configuration::instance();
$config->cloud->cloudName = 'dz5txixs4';
$config->cloud->apiKey = '193175351692725';
$config->cloud->apiSecret = '_MZU9EJIKLo_1m5HMyMd_jj7S14';
$config->url->secure = true;

print_r($_FILES["photo"]);
const MAX_FILESIZE = 20000000;
const FILE_TYPE = ["image/jpg", "image/png", "image/gif", "image/jpeg"];

$photo = "";

if (in_array($_FILES["photo"]["type"], FILE_TYPE) && $_FILES["photo"]["size"] <= MAX_FILESIZE) {
  $photo = "uploads/" . md5(time() . $_FILES["photo"]["name"]) . ".jpg";
  move_uploaded_file($_FILES["photo"]["tmp_name"], $photo);
  (new UploadApi())->upload($photo);
} else {
  die("Invalid photo");
}
