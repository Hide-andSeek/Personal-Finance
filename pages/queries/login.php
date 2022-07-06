<?php
DATE_DEFAULT_TIMEZONE_SET('Asia/Manila');
error_reporting(~E_NOTICE);

if (isset($_SESSION['email']) != "") {
	header("Location: ./pages/dashboard.php");
	//exit();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (isset($_POST['logbtn'])) {
		$email = trim($_POST['email']);
		$email = htmlspecialchars($_POST['email']);
		$password = trim($_POST['password']);
		$password = htmlspecialchars($_POST['password']);

		if (empty($_POST["email"]) || empty($_POST["password"])) {
			echo "<script>
				alert('Both Fields are required!');
				window.location.href='index.php';
			</script>";
		}

		$sth = $db->prepare("SELECT * FROM accounts WHERE email=:email");
		$sth->execute(array(':email' => htmlspecialchars($_POST['email'])));
		$row = $sth->fetch(PDO::FETCH_ASSOC);
		$count = $sth->rowCount();
		if ($count == 1) {
			if (password_verify(htmlspecialchars($_POST['password']), $row['password'])) {
				$_SESSION['email'] = $row['user_id'];
				header('Location: ./pages/dashboard.php');
			} else {
				echo "<script> 
                    alert('Wrong Password!')
                    window.location.href='index.php';
                </script>";
			}
			$user_status = "online";
			$stmt = $db->prepare('UPDATE accounts SET user_status=:user_status WHERE user_id=:id');
			$stmt->bindParam(':user_status', $user_status);
			$stmt->bindParam(':id', $_SESSION['email']);
			$stmt->execute();
			$time_logged = date("Y-m-d H:i:s", strtotime("now"));
			$stmt = $db->prepare('insert into activity(time_logged, user_id)VALUES(?,?)');
			$stmt->bindparam(1, $time_logged);	
			$stmt->bindparam(2, $_SESSION['email']);
			$stmt->execute();
		}
	} else {
		$_SESSION['msg'] = 'something went wrong';
	}
}
