<?php
DATE_DEFAULT_TIMEZONE_SET('Asia/Manila');
error_reporting(~E_NOTICE);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['createbtn'])) {

        $message = '';
        $error_mess = '';
        $email_duplicate = '';

        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $policy = $_POST['policy'];
        $time_joined = date("Y-m-d H:i:s", strtotime("now"));
        $date_joined = date("Y-m-d", strtotime("now"));

        $error = array();

        if (empty($fname)) {
            $error['fname'] = "<span class='tag is-danger is-light message_error'>First name is required field!</span>";
        }
        if (empty($lname)) {
            $error['lname'] = "<span class='tag is-danger is-light message_error'>Last name is required field!</span>";
        }
        if (empty($address)) {
            $error['address'] = "<span class='tag is-danger is-light message_error'>Address is required field!</span>";
        }
        if (empty($email)) {
            $error['email'] = "<span class='tag is-danger is-light message_error'>Email is required field!</span>";
        }
        if (empty($password)) {
            $error['password'] = "<span class='tag is-danger is-light message_error'>Password is required field!</span>";
        }
        if (empty($policy)) {
            $error['policy'] = "<span class='tag is-danger is-light message_error'>Policy is required field!</span>";
        }

        if (
            !empty($fname) &&
            !empty($lname) &&
            !empty($address) &&
            !empty($email) &&
            !empty($password) &&
            !empty($policy)
        ) {

            $password = password_hash($password, PASSWORD_BCRYPT);

            $sql_create_acc = "SELECT COUNT(email) AS num FROM accounts WHERE email = :email";
            $stmt = $db->prepare($sql_create_acc);
            $stmt->bindValue(':email', $email);
            $stmt->execute();

            $count_row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($count_row['num'] > 0) {
                $email_duplicate = "<script>
                Swal.fire({
                    title: 'Email is already used',
                    icon: 'info',
                    iconHtml: '?',
                    confirmButtonText: 'Okay',
                    showCloseButton: true
                })
			</script>";
            } else {

                $stmt = $db->prepare("INSERT INTO accounts (fname, mname, lname, address, email, password, policy, time_joined, date_joined) VALUES (:fname, :mname, :lname, :address, :email, :password, :policy, :time_joined, :date_joined)");
                $stmt->bindParam(':fname', $fname);
                $stmt->bindParam(':mname', $mname);
                $stmt->bindParam(':lname', $lname);
                $stmt->bindParam(':address', $address);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':password', $password);
                $stmt->bindParam(':policy', $policy);
                $stmt->bindParam(':time_joined', $time_joined);
                $stmt->bindParam(':date_joined', $date_joined);

                if ($stmt->execute()) {
                    $message = "<script>
                Swal.fire(
                    'Registered Successfully!',
                    'You can close the window',
                    'success'
                )
				
			 </script>";
                } else {
                    $error_mess = "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                    footer: '<a href=''>Why do I have this issue?</a>'
                })
            </script>";
                }
            }
        }
    }
}
?>
<?php
$log_mess = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['savelog'])) {
        $account = $_POST['account'];
        $amount = $_POST['amount'];
        $remarks = $_POST['remarks'];
        $date_added = date("Y-m-d", strtotime("now"));
        $time_added = date("Y-m-d H:i:s", strtotime("now"));

        $stmt = $db->prepare("INSERT INTO item_logs (account, amount, remarks, date_added, time_added) VALUES (:account, :amount, :remarks, :date_added, :time_added)");

        $stmt->bindParam(':account', $account);
        $stmt->bindParam(':amount', $amount);
        $stmt->bindParam(':remarks', $remarks);
        $stmt->bindParam(':date_added', $date_added);
        $stmt->bindParam(':time_added', $time_added);
    
        if ($stmt->execute()) {
           $log_mess = "<script>
                let timerInterval
                Swal.fire({
                    title: 'Please wait...',
                    html: 'The window will close in <b></b> milliseconds.',
                    timer: 2000,
                    timerProgressBar: true,
                    didOpen: () => {
                    Swal.showLoading()
                    const b = Swal.getHtmlContainer().querySelector('b')
                    timerInterval = setInterval(() => {
                        b.textContent = Swal.getTimerLeft()
                    }, 100)
                    },
                    willClose: () => {
                    clearInterval(timerInterval)
                    }
                }).then((result) => {
                    /* Read more about handling dismissals below */
                    if (result.dismiss === Swal.DismissReason.timer) {
                    console.log('I was closed')
                    }
                })
			 </script>";
        } else {
            $_SESSION['status'] = 'There is an Error: ';
            $_SESSION['status_code'] = 'error';
        }
    }
}

?>