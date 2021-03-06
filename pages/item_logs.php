<?php
require_once "../pages/queries/connection.php";
include('../pages/queries/account.php');
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
    <title>Item Logs</title>
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
                        <span><i class="fa fa-user-circle"></i> <?php echo 'Israel Ba??ares' ?></span>
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
        <div class="item-log">
            <button class="button is-link js-modal-trigger" data-target="create-account">
                <span><i class="fa fa-plus"></i> <?php echo 'Add Item' ?></span>
            </button>
            <div class="level-item">
                <form action="" method="get">
                    <div class="field has-addons">
                        <p class="control">
                            <input class="input" type="text" name="search" placeholder="Item Log ID/ Account" value="<?php echo (isset($_GET["search"])) ? htmlentities($_GET["search"]) : ""; ?>">
                        </p>
                        <p class="control">
                            <button type="submit" class="button is-link">
                                <i class="fas fa-search" aria-hidden="true"></i>
                            </button>
                        </p>

                    </div>
                </form>
            </div>
        </div>

        <!-- Create Modal form -->
        <div id="create-account" class="modal">
            <div class="modal-background"></div>
            <form method="POST" action="">
                <div class="modal-content">
                    <header class="modal-card-head">
                        <p class="modal-card-title">Add Item</p>
                        <button class="delete" aria-label="close"></button>
                    </header>

                    <section class="modal-card-body">
                        <!-- Content ... -->
                        <div class="field">
                            <label class="label">Acount Name</label>
                            <div class="control">
                                <input class="input" name="account" type="text" placeholder="Please specify account name" required>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Amount</label>
                            <div class="control">
                                <input class="input" name="amount" type="number" placeholder="Enter amount" required>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Remarks</label>
                            <div class="control">
                                <textarea class="textarea" name="remarks" placeholder="Message..."></textarea>
                            </div>
                        </div>
                    </section>
                    <footer class="modal-card-foot">
                        <button class="button is-success" name="savelog">Save changes</button>
                        <button class="button">Cancel</button>
                    </footer>
                </div>
            </form>
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


        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth is-link">
            <thead>
                <tr class="is-selected">
                  
                    <th>Account</th>
                    <th><abbr title="dd/mm/yy">Date Added</abbr></th>
                    <th><abbr title="Amount">Amount</abbr></th>
                    <th><abbr title="Desc">Remarks</abbr></th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                   
                    <th>Account</th>
                    <th><abbr title="dd/mm/yy">Date Added</abbr></th>
                    <th><abbr title="Amount">Amount</abbr></th>
                    <th><abbr title="Desc">Remarks</abbr></th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                $search = $_GET['search'];

                $stmt = $db->prepare("SELECT * from item_logs WHERE account LIKE '%$search%' OR itemlog_id LIKE '%$search%'");
                $stmt->execute();
                $query = $stmt->fetchAll();
                if (count($query) > 0) {
                    foreach ($query as $fetch) {
                ?>
                        <tr>
                            <td><?php echo $fetch['account'] ?></td>
                            <td><?php echo date("F d, Y", strtotime($fetch['date_added'])) ?></td>
                            <td>??? <?php echo $fetch['amount'] ?></td>
                            <td><?php echo mb_strimwidth($fetch['remarks'], 0, 20, "..."); ?></td>
                            <td><button class="button is-link is-light"  onclick="window.location.href = './edit_item_logs.php?ref_component_pfinance_header=<?php echo $fetch['itemlog_id'] ?>'">Edit Details</button></td>
                        </tr>
                    <?php }
                } else { ?>
                    <tr>
                        <td colspan="6">
                            <p class="norecord"> No records to show</p>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <nav class="pagination" role="navigation" aria-label="pagination">
            <a class="pagination-previous is-disabled" title="This is the first page">Previous</a>
            <a class="pagination-next">Next page</a>
            <ul class="pagination-list">
                <li>
                <a class="pagination-link is-current" aria-label="Page 1" aria-current="page">1</a>
                </li>
                <li>
                <a class="pagination-link" aria-label="Goto page 2">2</a>
                </li>
                <li>
                <a class="pagination-link" aria-label="Goto page 3">3</a>
                </li>
            </ul>
        </nav>
    </main>
    <script src="../javascript/main.js"></script>
</body>

</html>