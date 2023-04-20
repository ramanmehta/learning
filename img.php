<?php  

echo "<pre>";
//print_r($_FILES);
if(isset($_POST['submit'])){
	$newname = rand(100,1000);
	
	move_uploaded_file($_FILES['img']['tmp_name'], $newname.$_FILES['img']['name']);
	
	echo "image uploaded successfully";	
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}

?>
