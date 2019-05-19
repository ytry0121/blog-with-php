<?php
// include
include_once("include/db.php");
include_once("include/defines.php");
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title><?php print(SYSTEM_NAME); ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/styles.css">
  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container">
      <div class="navbar-header">
        <p><a class="navbar-brand" ><?php print(SYSTEM_NAME); ?></a></p>
      </div>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active" id="home"><a  class="nav-link" href="./index.php">HOME</a></li>
        <li class="nav-item" id="about"><a  class="nav-link" href="./about.php">ABOUT US</a></li>
        <li class="nav-item" id="contact"><a  class="nav-link" href="./contact.php">CONTACT US</a></li>
      </ul>
    </div>
  </nav>
  <body>
  <div class="container content">
