<?php
	session_start();
	
	include ('dbconn.php');
	
    $topics = nl2br(addslashes($_POST['topics']));
	$cid = $_GET['cid'];
	$scid = $_GET['scid'];
	$tid = $_GET['tid'];
	
	$insert = mysqli_query($con, "DELETE  from topics where topic_id=".$tid" AND category_id=".$cid" AND subcategory_id=".$scid");
								  
	if ($insert) {
		/* give different location header("Location: /admin/readtopic/".$cid."/".$scid."/".$tid.""); */
	}
?>