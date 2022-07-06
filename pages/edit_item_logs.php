<?php
require_once "../pages/queries/connection.php";
include ('../pages/queries/account.php');
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
                        <span>View Details</span>
                    </a>
                </li>
            </ul>
        </nav>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <?php
            $id = $_GET['itemlog_id'];

            $stmt = $db->prepare("SELECT * from item_logs WHERE itemlog_id = '$id'");
            $stmt->execute();
            $query = $stmt->fetchAll();
            if (count($query) > 0) {
                foreach ($query as $fetch) {
            ?>
            <div class="field box field-info">
                <label id="email" class="label">Legal Information</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input" name="account" type="text" value="<?php echo $fetch['account'] ?>" placeholder="Account">
                    <span class="icon is-small is-left">
                        <i class="fas fa-user-circle"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-check"></i>
                    </span>
                </div>
                <div class="control has-icons-left has-icons-right">
                    <input class="input" name="amount" type="text" value="<?php echo $fetch['amount'] ?>" placeholder="Amount">
                    <span class="icon is-small is-left">
                        <i class="fa fa-money"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-check"></i>
                    </span>
                </div>
                <div class="control has-icons-left has-icons-right">
                    <textarea class="textarea" name="remarks" placeholder="Message..."><?php echo $fetch['remarks'] ?></textarea>
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button name="createbtn" class="button is-link">Update</button>
                </div>
            </div>
            <?php }} ?>
        </form>
    </main>
    
    <script src="../javascript/main.js"></script>
</body>

</html>