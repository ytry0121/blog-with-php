<?php
// € Common functions
/**************************************************
                      Include
***************************************************/

// Defines
include_once("defines.php");

/**************************************************
                  Common Function
***************************************************/


// Message
function msgClose($msg){
	print("<script type='text/javascript'>");
	print("alert('$msg');");
	print("window.close();");
	print("</script>");
	exit();
}
function msgMoveReload($msg, $url){
	print("<script type='text/javascript'>");
	print("alert('$msg');");
	print("location.href = '$url';");
	print("window.opener.location.reload();");
	print("</script>");
	exit();
}

// Escape for javascript
function escape_string_js($str){
	return str_replace("\r\n", "\\n", addcslashes(addslashes($str),"();[]{}"));
}

?>
