<?php session_start();
require('../time_zone.php');
include "../pages/queries/connection.php";
include "../pages/queries/account.php";
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
    <title>Create Account</title>
</head>

<body>
    <?php echo $message; ?>
    <?php echo $email_duplicate; ?>
    <?php echo $error_mess; ?>
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
            <li class="nav-li"><a class="nav-link" href="../pages/setting.php"><i class="fas fa-cogs"></i> Setting</a></li>
            <li><a class="nav-link" href="#"><i class="fas fa-sign-out"></i>Logout</a></li>
        </ul>
    </nav>
    <main class="main-content">
        <div class="top-navigation">
            <h1><a href=""><i class="fa fa-question-circle"></i> Need help? </a></h1>
            <div>
                <h3><i class="fa fa-arrow-left"></i><a onclick="javascript:history.go(-1);"><strong> Back</strong></a></h3>
            </div>
        </div>

        <nav class="breadcrumb is-right" aria-label="breadcrumbs">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon is-small">
                            <i class="fas fa-home" aria-hidden="true"></i>
                        </span>
                        <span>Home</span>
                    </a>
                </li>

                <li class="is-active">
                    <a href="#">
                        <span class="icon is-small">
                            <i class="fas fa-book" aria-hidden="true"></i>
                        </span>
                        <span>Create Account</span>
                    </a>
                </li>
            </ul>
        </nav>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="field box field-info">
                <label id="email" class="label">Legal Information</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input" name="fname" type="text" placeholder="First Name">
                    <span class="icon is-small is-left">
                        <i class="fas fa-user"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-check"></i>
                    </span>
                </div>
                <?php echo isset($error['fname']) ? $error['fname'] : ''; ?>
                <div class="control has-icons-left has-icons-right">
                    <input class="input" name="mname" type="text" placeholder="Middle Name (Optional)">
                    <span class="icon is-small is-left">
                        <i class="fas fa-user"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-check"></i>
                    </span>
                </div>
                <div class="control has-icons-left has-icons-right">
                    <input class="input" name="lname" type="text" placeholder="Last Name">
                    <span class="icon is-small is-left">
                        <i class="fas fa-user"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-check"></i>
                    </span>
                </div>
                <?php echo isset($error['lname']) ? $error['lname'] : ''; ?>
                <div class="control has-icons-left has-icons-right">
                    <input class="input" name="address" type="text" placeholder="Home Address">
                    <span class="icon is-small is-left">
                        <i class="fas fa-home"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-check"></i>
                    </span>
                </div>
                <?php echo isset($error['address']) ? $error['address'] : ''; ?>
                <hr>

                <label id="email" class="label">Email</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input" name="email" id="email" type="email" placeholder="Email Address" pattern="^.*@gmail\.com$" title="This should be @gmail.com">
                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-check"></i>
                    </span>
                </div>
                <?php echo isset($error['email']) ? $error['email'] : ''; ?>
                <div class="control has-icons-left has-icons-right">
                    <input class="input" name="password" type="password" placeholder="Password">
                    <span class="icon is-small is-left">
                        <i class="fas fa-lock"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-check"></i>
                    </span>
                </div>
                <?php echo isset($error['password']) ? $error['password'] : ''; ?>
                <label class="checkbox">
                    <input type="checkbox" value="Yes" name="policy"> I agree to the <a href="#">terms and conditions</a>
                </label>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button name="createbtn" class="button is-link">Submit</button>
                </div>
            </div>
        </form>
    </main>
     
</body>

</html>