<?php
include("connection.php");
if(isset($_POST['submit'])){
	$a = $_POST['author'];
	$b = $_POST['topic'];
	$c = $_POST['post'];
	$date = date('d-m-Y G:i:s');
	
	$f = mysqli_query($con,"insert into blog values ('','$a','$b','$c','$date','')");
	
	if($f){
				echo "<script type = 'text/javascript'>
			alert('Thank you');
			document.location.href='blog.php'
			</script>";
			}
	}
?>