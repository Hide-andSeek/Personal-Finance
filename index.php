<?php
session_start();
require_once "./pages/queries/connection.php";
include "./pages/queries/login.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="./images/Icon-1.svg">
  <link rel="stylesheet" type="text/css" href="./stylesheet/bulma.css">

  <link rel="stylesheet" type="text/css" href="./stylesheet/bulma.min.css">
  <link rel="stylesheet" type="text/css" href="./stylesheet/css/customize.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
  <script src="https://kit.fontawesome.com/9ec85b07cd.js" crossorigin="anonymous"></script>
  <title>IAB: Personal Finance</title>
</head>

<body>

  <!-- Navigation Bar -->
  <nav class="navbar box" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="#">
        <!-- <p><strong>IAB: Personal Finance</strong></p> -->
        <img src="./images/Icon-1.svg" class="iab-logo" alt="">
      </a>

      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            <button class="button is-link js-modal-trigger is-active" data-target="modal-js-example">
              Login
            </button>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <section class="hero is-medium is-link">
    <div class="hero-body has-text-centered">

      <p class="title is-1">
        Personal Finance
      </p>
      <p class="subtitle">
        “Financial planning and discipline is key to one's financial freedom.”
      </p>
      <p class="subtitle">
        <strong>
          -Kishorkumar Balpalli
        </strong>
      </p>
      <!-- <button class="button is-success">
        <strong>Get Started</strong>
      </button> -->
    </div>
  </section>

  <div class="hero-body tile">
    <div class="tile is-parent">
      <article class="tile is-child box">
        <a href="#" class="js-modal-trigger is-active" data-target="modal-js-example" id="">
          <p class="title is-5 has-text-centered"><i class="fa fa-book"></i> Item Logs</p>
          <img src="./images/Personal_Finance.svg" alt="">
        </a>
      </article>
    </div>
    <div class="tile is-parent">
      <article class="tile is-child box">
        <a href="#" id="">
          <p class="title is-5 has-text-centered"><i class="fas fa-list-alt"></i> Balance Sheet</p>
          <img src="./images/Content-1.svg" alt="">
        </a>
      </article>
    </div>
    <div class="tile is-parent">
      <article class="tile is-child box">
        <a href="#" id="">
          <p class="title is-5 has-text-centered"><i class="fa fa-file-text"></i> Income Statement</p>
          <img src="./images/Content-2.svg" alt="">

        </a>
      </article>
    </div>
    <div class="tile is-parent">
      <article class="tile is-child box is-small">
        <a href="#" id="">
          <p class="title is-5 has-text-centered"><i class="fas fa-credit-card"></i> Credit Cards</p>
          <img src="./images/Content-3.svg" alt="">
        </a>
      </article>
    </div>
  </div>

  <!-- Login Form -->
  <div id="modal-js-example" class="modal">
    <div class="modal-background"></div>

    <div class="modal-content">
      <div class="box">
        <section class="hero">
          <form method="POST"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="level">
              <div class="hero-body">
                <header class="modal-card-head">
                  <h1 id="login" class="title is-4 has-text-centered">Sign in your account</h1>
                </header>
                <hr>
                <div class="field">
                  <label class="label">Email</label>
                  <div class="control has-icons-left has-icons-right">
                    <input class="input" type="email" name="email" placeholder="Please specify your email" pattern="^.*@gmail\.com$" title="This should be @gmail.com">
                    <span class="icon is-small is-left">
                      <i class="fas fa-user"></i>
                    </span>
                    <span class="icon is-small is-right">
                      <i class="fas fa-check"></i>
                    </span>
                  </div>
                </div>

                <!-- pattern="(?=.*\d)(?=.*)(?=.*).{8,}" title="Must contain at least 8" onKeyPress="if(this.value.length==10) return false;" -->
                <div class="field">
                  <label class="label">Password</label>
                  <div class="control has-icons-left has-icons-right">
                    <input class="input" name="password" type="password" placeholder="Please specify your password">
                    <span class="icon is-small is-left">
                      <i class="fas fa-lock"></i>
                    </span>
                    <span class="icon is-small is-right">
                      <i class="fas fa-check"></i>
                    </span>
                  </div>
                </div>
                <button class="button is-link" name="logbtn">
                  <strong>Login</strong>
                </button>
                <br>
                <br>
              </div>
            </div>
          </form>
      </div>
    </div>

    <button class="modal-close is-large" aria-label="close"></button>
  </div>
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d118671.44600427017!2d121.01948945992297!3d14.680109359289363!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ba0942ef7375%3A0x4a9a32d9fe083d40!2sQuezon%20City%2C%20Metro%20Manila!5e1!3m2!1sen!2sph!4v1656817561227!5m2!1sen!2sph" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </section>

  <footer class="footer">
    <div class="content has-text-centered">
      <p>
        <strong>@Copyright 2022 Hide-andSeek</strong> by <a href="https://github.com/Hide-andSeek">Jade Banares</a>.
      </p>
    </div>
  </footer>
  <script src="./javascript/main.js"></script>
</body>

</html>