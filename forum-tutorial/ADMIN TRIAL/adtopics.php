<html>
<head><title>Admin Panel</title></head>
<link href="/admin/styles/main.css" type="text/css" rel="stylesheet" />
<body>
	<div class="pane">
		<div class="header"><h1><a href="/admin">Admin Panel</a></h1></div>
		<div class="loginpane">
			<?php
				session_start();
				if (isset($_SESSION['username'])) {
					logout();
				} 
			?>
		</div>
		<div class="forumdesc">
			<p>Welcome</p>
		</div>
		<div class="content">
			<?php 
				if (isset($_SESSION['username'])) {
					echo "<form action='/admin/edit_topic.php?cid=".$_GET['cid']."&scid=".$_GET['scid']."'
						  method='POST'>
						  <p>Title: </p>
                          <input type='text' id='title' name='title' size='100' />
                          <p>Author: </P>
                          <input type='text' id='author' name='author' size='100' />
						  <p>Content: </p>
						  <textarea id='content' name='content'></textarea><br />
						  <input type='submit' value='add new post' /></form>";
				} 
			?>
		</div>
	</div>
</body>
</html>