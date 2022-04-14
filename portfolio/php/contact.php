<?php
$con=mysqli_connect("localhost","root","","portfolio");
if(isset($_POST['btnSubmit']))
{
	$name = $_POST['txtName'];
	$email = $_POST['txtEmail'];
    $message = $_POST['txtMsg'];

	$query="insert into contact(name,email,,message) values('$name','$email','$message');";
	$result = mysqli_query($con,$query);

	if($result)
    {
    	echo '<script type="text/javascript">';
		echo 'alert("Message sent successfully!");';
		echo 'window.location.href = "portfo.html";';
		echo '</script>';
    }
}
