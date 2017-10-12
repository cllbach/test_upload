<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Contact us</title>
</head>
<?php
	//this is a comment	
	print "Testing form submission";
	//print_r($_POST);
	print '<hr>';
	print $_POST['name'];
	?>
	<!--php in html-->
	<h3>Name: <?php print $_POST['name'];?></h3>
	
	<h3>My email address: </h3>
	<?php
	$comment=$_POST['comment'];
	print $comment;	
			?>
		<?php
	$email=$_POST['email'];
	print $email;
	$to ='cllbach@comcast.net'; 
	$subject = 'My questions - Garlic Growers, LLC'.$email;
	mail($to, $subject, $comment);
		?>
	
	<?php
	//$name = "Catherine ";
//	print $name;
//	$name = "Amy";
//	print $name;
//print $_POST['name'];
	?>

</html>