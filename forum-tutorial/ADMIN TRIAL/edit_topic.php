<?php
	
	session_start();

	include ('dbconn.php');
if(isset($_POST['btn2'])) {
	$tid=$_POST['tid'];
	$cid=$_POST['cid'];
	$scid=$_POST['scid'];	
	$author=addslashes($_POST['author']);
	$title=addslashes($_POST['title']);
	$content = nl2br(addslashes($_POST['content'])); 
	
	
	 $update = mysqli_query("UPDATE topics SET author='$author', title='$title', content='$content' where topic_id=$topicid";

if($update)) { 
/* header("location:topics.php?msg=updated"); */
  }
/*	 }
else {
	echo mysqli_error($conn);
}
else {
	header("location:index.php");
}
?>*/