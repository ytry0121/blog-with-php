<!-- >>> HEADER -->
<?php
include_once("partials/header.php");
?>
<!-- <<< HEADER -->

<?php
// Get data from database
$sql = "SELECT * FROM posts t ORDER BY t.id";
// Excecute
$rs = $db->execute($sql, '');
?>

<!-- >>> CONTENTS -->
<h1>Home</h1>
<p> <?php  print(homeStartingContent); ?> </p>

<?php
if(isset($rs)){
  $rows = $rs->fetchAll();
  foreach($rows as  $row){
?>
    <h1><?php print($row['title']);?></h1>
    <p>
    <?php print(substr($row['content'],0,100)." ...");  ?>
    <a href="compose.php?id=<?php print($row['id']);?>&page_id=edit">edit</a>
    </p>
<?php
  }
}
 ?>
<!-- <<< CONTENTS -->

<!-- >>> FOOTER-->
<?php
include("partials/footer.php");
?>
<!-- <<< FOOTER-->
