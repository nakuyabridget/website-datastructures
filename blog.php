 <?php
 include("connection.php");
 ?>
 <!DOCTYPE html>
 <html>
 	<head>
 		<title>Blog section</title>
 		<link rel="stylesheet" type="text/css" href="blog.css">
 	</head>
 	<body>
	 	<div class = "content">
		 	<h2>Blog section</h2>
		 	<p>You can add information about any data structures' topic using this blog section.</br></p>
		 	<p>Now lets have fun!!!!!</p>
		 	<form method="post" action="mypost.php">
		    <p><label>Author
		    <input type="text" name="author"></label></p>
		    <p><label>Topic of discussion
			  <select name='topic'>
			     <option value='Data structures'>Data Structures</option>
				 <option value='Sorting' name='topic'>Sorting</option>
				 <option value='Deletion' name='topic'>Deletion</option>
				 <option value='Insertion' name='topic'>Insertion</option>
				 <option value='Random' name='topic'>Random Topic</option>
				 </select></label></br></br>
			<p><label>post
			<textarea input type="text" name="post"></textarea></label>
			<p><label>Date
			<input type="date" name="date"></label></p>
			<div class ="book">
			<p><input type="submit" value="submit" name="submit" ></p>
			</div>
			 </form>
 		<div>
	 		<?php
				$a = "select * from blog order by date desc";
				$b = $con->query($a);
				
				while($row = $b->fetch_assoc()){
					echo "<table width = '1005' class = 'memb' cellpadding = '5'>
						<tr><td><div class = 'titd'><font size = '1'>{$row['date']}</font></div></td></tr>
						<tr><td><div class = 'tit'><font size = '3' color = 'red'>{$row['topic']}</font></div></td></tr>
						 <tr><td><div class = 'titm'>{$row['post']}</div></td></tr>
						 <tr><td><div class = 'titd'><font color = '#C71585'>By: {$row['authour']}</div></td></tr>
						</table>
					";		
				}
			?>
		<div>
			<h4>Posts about deletion</h4>
			<?php
				$a="select * from blog where topic='deletion' order by date desc";
				$b=$con->query($a);
				while($row = $b->fetch_assoc()){
					echo "<table width = '1005' class = 'memb' cellpadding = '5'>
						<tr><td><div class = 'titd'><font size = '1'>{$row['date']}</font></div></td></tr>
						<tr><td><div class = 'tit'><font size = '3' color = 'red'>{$row['topic']}</font></div></td></tr>
						 <tr><td><div class = 'titm'>{$row['post']}</div></td></tr>
						 <tr><td><div class = 'titd'><font color = '#C71585'>By: {$row['authour']}</div></td></tr>
						</table>
					";		
				}
			?>
			</div>
		</div>
	</body>
 </html>