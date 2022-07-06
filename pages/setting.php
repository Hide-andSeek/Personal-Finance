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
    <script src="https://kit.fontawesome.com/9ec85b07cd.js" crossorigin="anonymous"></script>
    <title>Setting</title>
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
            <li><a class="nav-link" href="../pages/budget.php"><i class="fa fa-money"></i> Budget</a></li>
            <li class="nav-li navlink-active"><a class="nav-link" href="../pages/setting.php"><i class="fas fa-cogs"></i> Setting</a></li>
            <li><a class="nav-link" href="#"><i class="fas fa-sign-out"></i>Logout</a></li>
        </ul>
    </nav>
    <main class="table-content">
        <div class="top-navigation">
            <h1><a href=""><i class="fa fa-question-circle"></i> Need help? </a></h1>
            <div class="dropdown is-right is-hoverable">
                <div class="dropdown-trigger">
                    <button class="button" aria-haspopup="true" aria-controls="dropdown-menu4">
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
        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
            <thead>
                <tr class="is-selected">
                    <th>Particulars</th>
                    <th><abbr title="Played">RunBal</abbr></th>
                    <th><abbr title="Won">Beg</abbr></th>
                    <th><abbr title="Drawn">July</abbr></th>
                    <th><abbr title="Lost">August</abbr></th>
                    <th><abbr title="Goals for">September</abbr></th>
                    <th><abbr title="Goals against">October</abbr></th>
                    <th><abbr title="Goal difference">November</abbr></th>
                    <th><abbr title="Points">December</abbr></th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Particulars</th>
                    <th><abbr title="Played">RunBal</abbr></th>
                    <th><abbr title="Won">Beg</abbr></th>
                    <th><abbr title="Drawn">July</abbr></th>
                    <th><abbr title="Lost">August</abbr></th>
                    <th><abbr title="Goals for">September</abbr></th>
                    <th><abbr title="Goals against">October</abbr></th>
                    <th><abbr title="Goal difference">November</abbr></th>
                    <th><abbr title="Points">December</abbr></th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>Assets</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>CIB-BPI</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>CIB-MBT</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>CIB-ECebuana</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>CIB-UBP</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>CIB-GCash-Savings</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>CIB-GCash-Wallet</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>CIB-Paymaya</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>CIB-GrabPay</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>FS-Col Financial</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Inventory</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>A/R-MJGC</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>A/R-CHDB</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr class="is-selected">
                    <td><strong>Liabilities</strong></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>A/P-MBT CC 8141</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>A/P-MBT CC 0049</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>A/P-BPI CC</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>A/P-Rent</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr class="is-selected">
                    <td><strong>Capital</strong></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Cap-IAB</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
            </tbody>
        </table>
       
    </main>
</body>

</html>