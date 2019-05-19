<!-- >>> HEADER -->
<?php
  include_once("partials/header.php");
?>
<!-- <<< HEADER -->

<!-- >>>CONTENT -->
<?php
  $row = "";
  if(isset($_GET['page_id']) && $_GET['page_id']==="edit"){
    // Get data from database
    $sql = "SELECT t.* FROM posts t WHERE t.id = ?";
    $row = $db->fetchOneRow($sql, $_GET['id']);
  }
?>

<h1>Compose</h1>
<form action="actions/update.php" method="post" enctype="multipart/form-data" name="form" id="form" />
<input type="hidden" name="id" id="id" value="<?php isset($_GET['id']) ? print($_GET['id']):""; ?>">
<input type="hidden" name="page_id" id="page_id" value="<?php isset($_GET['page_id']) ? print($_GET['page_id']):"";  ?>">
<div class="form-group">
    <label>Title</label>
    <input class="form-control" type="text" name="title" id ="title">
    <label>Author</label>
    <input class="form-control" type="text" name="author" id="author">
    <label>Post</label>
    <textarea class="form-control" name="content" id="content" rows="5" cols="30"></textarea>
  </div>
  <button class="btn btn-primary" type="submit" name="save" id="save">Publish</button>
  <button class="btn btn-primary" type="submit" name="delete" id="delete">Delete</button>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
// Database Object
let obj = new Object();
 obj = $.parseJSON('<?php print(json_encode($row)); ?>');
console.log(obj);
for(var i in obj){
			var id = '#' + i;
      $(id).val(obj[i] == null ? '' : obj[i]);
}
//New
if(obj===""){
  $("#delete").hide();
//Edit
}else{
  $("#save").html("Update");
  $("#delete").click(function(){
    confirm("Are you sure to delete this post?");
  });
}
</script>

<!-- >>> FOOTER-->
<?php
  include("partials/footer.php");
?>
<!-- <<< FOOTER-->
