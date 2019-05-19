<!-- >>> HEADER -->
<?php
  include_once("partials/header.php");
?>
<!-- <<< HEADER -->


<!-- >>> CONTENT-->
<?php
  // Get data from database
  $sql = "SELECT t.* FROM posts t WHERE t.id = ?";
  $row = $db->fetchOneRow($sql, $_GET['id']);
?>

  <h1><?php print($row['title']);?></h1>
  <p><?php print($row['content']);?></p>
<!-- <<< CONTENT-->

<!-- >>> FOOTER-->
<?php
  include("partials/footer.php");
?>
<!-- <<< FOOTER-->
  
