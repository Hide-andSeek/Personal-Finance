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
    <title>Budget</title>
</head>

<body>
    <nav id="navbar">
        <div class="underline">
            <header> <img src="../images/Icon-1.svg" alt="" class="finance_logo"> Personal Finance</header>
        </div>

        <ul>
            <li><a class="nav-link" href="../pages/dashboard.php"><i class="fa fa-th-large"></i> Dashboard</a></li>
            <li><a class="nav-link" href="../pages/item_logs.php"><i class="fa fa-book"></i> Item Logs</a></li>
            <li><a class="nav-link" href="../pages/balance_sheet.php"><i class="fas fa-list-alt"></i> Balance Sheet</a></li>
            <li><a class="nav-link" href="../pages/income_statement.php"><i class="fas fa-file-text"></i> Income Statement</a></li>
            <li><a class="nav-link" href="../pages/credit_card.php"><i class="fas fa-credit-card"></i> Credit Cards</a></li>
            <li class="navlink-active"><a class="nav-link" href="../pages/budget.php"><i class="fa fa-money"></i> Budget</a></li>
            <li class="nav-li"><a class="nav-link" href="../pages/setting.php"><i class="fas fa-cogs"></i> Setting</a></li>
            <li><a class="nav-link" href="#"><i class="fas fa-sign-out"></i>Logout</a></li>
        </ul>
    </nav>
    <main class="table-content">
        <div class="top-navigation">
            <h1><a href=""><i class="fa fa-question-circle"></i> Need help? </a></h1>
            <div class="dropdown is-right is-hoverable">
                <div class="dropdown-trigger">
                    <button class="button" aria-haspopup="true" aria-controls="dropdown-menu4">
                        <i class="fa fa-user-circle"></i> Israel Bañares
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
            <div class="level-item">
                <form action="" method="get">
                    <div class="field has-addons">
                        <p class="control">
                            <input class="input" type="text" name="search" value="<?php echo (isset($_GET["search"])) ? htmlentities($_GET["search"]) : ""; ?>" placeholder="Search on account">
                        </p>
                        <p class="control">
                            <button type="submit" class="button is-link">
                                Search
                            </button>
                        </p>
                    </div>
                </form>
            </div>
            <button class="button is-link js-modal-trigger" data-target="modal-js-example">
                Item Log
            </button>
        </div>

        <div id="modal-js-example" class="modal">
            <div class="modal-background"></div>
            <form method="POST" action="">
                <div class="modal-content">
                    <header class="modal-card-head">
                        <p class="modal-card-title">Budget</p>
                        <button class="delete" aria-label="close"></button>
                    </header>

                    <section class="modal-card-body">
                        <!-- Content ... -->
                        <div class="field">
                            <label class="label">Budget</label>
                            <div class="control">
                                <input class="input" name="account" type="text" placeholder="Please specify account name" required>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Amount</label>
                            <div class="control">
                                <input class="input" name="amount" type="text" placeholder="Enter amount" required>
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
        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth is-link">
            <thead>
                <tr class="is-selected">
                    <th><abbr title="Date">Budget</abbr></th>
                    <th><abbr title="Time">Amount</abbr></th>
                    <th><abbr title="Beg">Date</abbr></th>
                    <th><abbr title="Drawn">Time</abbr></th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th><abbr title="Date">Budget</abbr></th>
                    <th><abbr title="Time">Amount</abbr></th>
                    <th><abbr title="Beg">Date</abbr></th>
                    <th><abbr title="Drawn">Time</abbr></th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
            <?php
                $search = $_GET['search'];

                $stmt = $db->prepare("SELECT * from budget WHERE budget LIKE '%$search%' OR budget_id LIKE '%$search%'");
                $stmt->execute();
                $query = $stmt->fetchAll();
                if (count($query) > 0) {
                    foreach ($query as $fetch) {
                ?>
                        <tr>

                            <td><?php echo $fetch['budget'] ?></td>
                            <td>₱ <?php echo $fetch['amount'] ?></td>
                            <td><?php echo $fetch['date'] ?></td>
                            <td><?php echo $fetch['time'] ?></td>
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