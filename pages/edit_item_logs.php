<?php
require_once "../pages/queries/connection.php";
include('../pages/queries/account.php');

$log_mess = '';
$error_mess = '';
if (isset($_POST['updatelog'])) {

    $id = $_GET['ref_component_pfinance_header'];

    $account = $_POST['account'];
    $amount = $_POST['amount'];
    $remarks = $_POST['remarks'];

    $stmt = $db->prepare("UPDATE item_logs SET account = '$account', amount = '$amount', remarks = '$remarks' WHERE itemlog_id = '$id'");

    if ($stmt->execute()) {
        $log_mess = "<script>
                let timerInterval
                Swal.fire({
                    title: 'Saving! Please wait...',
                    html: 'The window will close in <b></b> milliseconds.',
                    text: 'To see change',
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
                header('Location: ../pages/items_logs.php')
			 </script>";
    } else {
        $_SESSION['status'] = 'There is an Error: ';
        $_SESSION['status_code'] = 'error';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../stylesheet/bulma.css">
    <link rel="stylesheet" type="text/css" href="../stylesheet/bulma-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="../stylesheet/css/customize.css">
    <link rel="icon" type="image/svg" href="../images/Icon-1.svg">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="https://kit.fontawesome.com/9ec85b07cd.js" crossorigin="anonymous"></script>
    <title>Edit Item</title>

    <style>
        .content-edit{
            text-align: center;
        }
    </style>
</head>

<body>
    <?php echo $log_mess; ?>
    <nav id="navbar">
        <div class="underline">
            <header> <img src="../images/Icon-1.svg" alt="" class="finance_logo"> Personal Finance</header>
        </div>
        <ul>
            <li><a class="nav-link" href="../pages/dashboard.php"><i class="fa fa-book"></i> Dashboard</a></li>
            <li class="navlink-active"><a class="nav-link" href="../pages/item_logs.php"><i class="fa fa-book"></i> Item Logs</a></li>
            <li><a class="nav-link" href="../pages/balance_sheet.php"><i class="fas fa-list-alt"></i> Balance Sheet</a></li>
            <li><a class="nav-link" href="../pages/income_statement.php"><i class="fas fa-file-text"></i> Income Statement</a></li>
            <li><a class="nav-link" href="../pages/credit_card.php"><i class="fas fa-credit-card"></i> Credit Cards</a></li>
            <li><a class="nav-link" href="../pages/budget.php"><i class="fa fa-money"></i> Budget</a></li>
            <li class="nav-li"><a class="nav-link" href="../pages/setting.php"><i class="fas fa-cogs"></i> Setting</a></li>
            <li><a class="nav-link" href="#"><i class="fas fa-sign-out"></i>Logout</a></li>
        </ul>
    </nav>

    <main class="table-content">
        <div class="top-navigation">
            <button class="button is-link is-light js-modal-trigger" data-target="need-help"><span><i class="fa fa-question-circle"></i> <?php echo 'Need help?' ?></span></button>
            <div class="dropdown is-right is-hoverable">
                <div class="dropdown-trigger">
                    <button class="button is-link is-light" aria-haspopup="true" aria-controls="dropdown-menu4">
                        <span><i class="fa fa-user-circle"></i> <?php echo 'Israel Bañares' ?></span>
                    </button>
                </div>
                <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                    <div class="dropdown-content">
                        <div class="dropdown-item">
                            <a href="../pages/create_account.php"><i class="fa fa-user-plus"></i> Add Account</a>
                            <br>
                            <a href="../pages/create_account.php"><i class="fa fa-user"></i> View Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Need help modal form -->
        <div id="need-help" class="modal">
            <div class="modal-background"></div>
            <div class="modal-content">
                <header class="modal-card-head">
                    <p class="modal-card-title">Need Help</p>
                    <button class="delete" aria-label="close"></button>
                </header>

                <section class="modal-card-body">
                    <!-- Content ... -->

                    <div class="field">
                        <label class="label">Item Logs</label>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan, metus ultrices eleifend gravida, nulla nunc varius lectus, nec rutrum justo nibh eu lectus. Ut vulputate semper dui. Fusce erat odio, sollicitudin vel erat vel, interdum mattis neque.</p>
                    </div>
                    <blockquote style="background: whitesmoke; border-left: 4px solid gray; border-radius: 5px; padding: 10px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan, metus ultrices eleifend gravida</blockquote>
                    <div class="field">
                        <label class="label">Balance Sheet</label>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan, metus ultrices eleifend gravida, nulla nunc varius lectus, nec rutrum justo nibh eu lectus. Ut vulputate semper dui. Fusce erat odio, sollicitudin vel erat vel, interdum mattis neque.</p>
                    </div>

                    <div class="field">
                        <label class="label">Income Statement</label>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan, metus ultrices eleifend gravida, nulla nunc varius lectus, nec rutrum justo nibh eu lectus. Ut vulputate semper dui. Fusce erat odio, sollicitudin vel erat vel, interdum mattis neque.</p>
                    </div>

                    <div class="field">
                        <label class="label">Credit Card</label>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan, metus ultrices eleifend gravida, nulla nunc varius lectus, nec rutrum justo nibh eu lectus. Ut vulputate semper dui. Fusce erat odio, sollicitudin vel erat vel, interdum mattis neque.</p>
                    </div>
                </section>
                <footer class="modal-card-foot">
                    <button class="button">Close</button>
                </footer>
            </div>
        </div>
        <nav class="breadcrumb" aria-label="breadcrumbs">
            <ul>
                <li>
                    <a href="../pages/item_logs.php">
                        <span class="icon is-small">
                            <i class="fas fa-home" aria-hidden="true"></i>
                        </span>
                        <span>Item Log</span>
                    </a>
                </li>

                <li class="is-active">
                    <a href="#">
                        <span class="icon is-small">
                            <i class="fas fa-book" aria-hidden="true"></i>
                        </span>
                        <span>Edit Details</span>
                    </a>
                </li>
            </ul>
        </nav>
        <form method="POST" action="">
            <?php
            $id = $_GET['ref_component_pfinance_header'];

            $stmt = $db->query("SELECT * FROM item_logs WHERE itemlog_id = '$id'");
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            while ($query = $stmt->fetch()) {
            ?>
                <div class="field box field-info">
                    <label id="email" class="label">Legal Information</label>
                    <div class="control has-icons-left has-icons-right">
                        <input class="input" name="account" type="text" value="<?php echo $query['account'] ?>" placeholder="Account">
                        <span class="icon is-small is-left">
                            <i class="fas fa-user-circle"></i>
                        </span>
                        <span class="icon is-small is-right">
                            <i class="fas fa-check"></i>
                        </span>
                    </div>
                    <div class="control has-icons-left has-icons-right">
                        <input class="input" name="amount" type="text" value="<?php echo $query['amount'] ?>" placeholder="Amount">
                        <span class="icon is-small is-left">
                            <i class="fa fa-money"></i>
                        </span>
                        <span class="icon is-small is-right">
                            <i class="fas fa-check"></i>
                        </span>
                    </div>
                    <div class="control">
                        <textarea class="textarea" name="remarks" placeholder="Message..."><?php echo $query['remarks'] ?></textarea>
                    </div>
                    <br>
                    <!-- Need help modal form -->
                    <div id="update" class="modal">
                        <div class="modal-background"></div>
                        <div class="modal-content">
                            <header class="modal-card-head">
                                <p class="modal-card-title content-edit">Are you sure you want to change this?</p>
                                <!-- <button class="delete" aria-label="close"></button> -->
                            </header>

                            <section class="modal-card-body">
                                <!-- Content ... -->
                                <div class="field content-edit">
                                    <p>To save current changes, click <strong>'confirm'</strong> button.</p>
                                </div>
                            </section>
                            <footer class="modal-card-foot">
                                <button name="updatelog" class="button is-warning js-modal-trigger" data-target="update">Confirm</button>
                                <!-- <button class="button">Cancel</button> -->
                            </footer>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </form>
        <div class="field is-grouped">
            <div class="control is-right">
                <button class="button is-warning js-modal-trigger" data-target="update">Update</button>
                <button name="update" class="button is-danger">Delete</button>
            </div>
        </div>
    </main>

    <script src="../javascript/main.js"></script>
</body>

</html>