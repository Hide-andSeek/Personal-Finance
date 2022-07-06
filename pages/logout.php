<?php
DATE_DEFAULT_TIMEZONE_SET('Asia/Manila');

session_start();
$sth=$db->prepare("SELECT * FROM accounts WHERE userid=?");
$sth->execute(array(
$_SESSION['email'])
);
$row=$sth->fetch(PDO::FETCH_ASSOC);
$count=$sth->rowCount();
$userid=$row['userid'];

$user_status="offline";
		$stmt=$db->prepare('update accounts SET user_status=:user_status where userid=:uid');
		$stmt->bindparam(':user_status',$user_status);
		$stmt->bindparam(':uid',$userid);
		$stmt->execute();
		
unset($_SESSION['email']);
	
	if(session_destroy())
	{
		header("Location: index.php");
	}
?>

