<?php
include '../time_zone.php';
require '../pages/queries/connection.php';

function start_session()
{
    $_SESSION['email'] = '';
    session_start();
    if (empty($_SESSION['email'])) {
        header("Location:index.php");
        exit();
    }
}

echo start_session();
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
    <title>Dashboard</title>
</head>

<body>
    <script>
        Swal.fire({
            title: 'Welcome to Personal Finance!',
            // text: 'Enter a description right here',
            imageUrl: '<?php echo "../images/Personal_Finance.svg" ?>',
            imageWidth: 400,
            imageHeight: 200,
            imageAlt: 'Personal Finance Image',
        })
    </script>

    <nav id="navbar">
        <div class="underline">
            <header> <img src="../images/Icon-1.svg" alt="" class="finance_logo"> Personal Finance</header>
        </div>

        <ul>
            <li class="navlink-active"><a class="nav-link" href="../pages/dashboard.php"><i class="fa fa-th-large"></i> Dashboard</a></li>
            <li><a class="nav-link" href="../pages/item_logs.php"><i class="fa fa-book"></i> Item Logs</a></li>
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
            <button class="button is-primary is-light js-modal-trigger" data-target="need-help"><span><i class="fa fa-question-circle"></i> <?php echo 'Need help?' ?></span></button>
            <div class="dropdown is-right is-hoverable">
                <div class="dropdown-trigger">
                    <button class="button is-primary is-light" aria-haspopup="true" aria-controls="dropdown-menu4">
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
        <div class="hero-body tile">
            <div class="tile is-parent">
                <article class="tile is-child box">
                    <a href="#" class="js-modal-trigger is-active" data-target="modal-js-example" id="">
                        <p class="title is-5 has-text-centered"> Item Logs</p>
                        <?php
                        $equip_total_amount = '';

                        $result = mysqli_query($connect, 'SELECT SUM(itemlogs_no) AS itemlogs_no FROM item_logs');
                        ?>
                        <?php
                        while ($row = mysqli_fetch_array($result)) {
                            $equip_total_amount = $row['itemlogs_no'];
                        ?>
                            <h3>??? <?php echo $equip_total_amount; ?></h3>
                        <?php
                        }
                        ?>
                    </a>
                </article>
            </div>
            <div class="tile is-parent">
                <article class="tile is-child box">
                    <a href="#" id="">
                        <p class="title is-5 has-text-centered"> Balance Sheet</p>
                        <img src="./images/Content-1.svg" alt="">

                    </a>
                </article>
            </div>
            <div class="tile is-parent">
                <article class="tile is-child box">
                    <a href="#" id="">
                        <p class="title is-5 has-text-centered"> Income Statement</p>
                        <img src="./images/Content-2.svg" alt="">
                    </a>
                </article>
            </div>
        </div>

        <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
    </main>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Work', 11],
                ['Eat', 2],
                ['Commute', 2],
                ['Watch TV', 2],
                ['Sleep', 7]
            ]);

            var options = {
                title: 'My Daily Activities',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>
</body>

</html>