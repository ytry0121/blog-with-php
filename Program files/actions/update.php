<?php
// €include
include_once("../include/functions.php");
include_once("../include/db.php");

//key for update and delete
$keys=array("id"=>$_POST['id']);

// Transaction start
$db->beginTransaction();

if($_POST['page_id']==="edit" && isset($_POST['save'])){
	//update
	$message="Your post has been successfully updated!";
	$ret = $db->update('posts',$keys,$_POST);
}else if($_POST['id']===""){
	//insert
	$message="Your post has been successfully saved!";
	$ret = $db->insert('posts', $_POST);
}else if($_POST['page_id']==="edit" && isset($_POST['delete'])){
	//delete
	$message="Your post has been successfully deleted!";
	$ret = $db->delete('posts', $keys);
}else{
	$message="Error: The button type was not found.";
}

if($ret === true){
	// Commit
	$db->commit();
	msgMoveReload(escape_string_js($message), '/Blog-with-php/Program files/index.php');
}else{
	// Rollback
	$db->rollback();
	msgClose(escape_string_js($ret));
}

?>
