<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="./images/Icon-1.svg">
  <link rel="stylesheet" type="text/css" href="./stylesheet/bulma.css">

  <link rel="stylesheet" type="text/css" href="./stylesheet/bulma.min.css">
  <link rel="stylesheet" type="text/css" href="./stylesheet/customize.css">
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
            <!-- <a href="#login" class="button is-light">
              Log in
            </a> -->
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
        <a href="#" class="js-modal-trigger is-active" data-target="modal-js-example"  id="">
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
          <form action="">
            <div class="level">
              <div class="hero-body">
                <header class="modal-card-head">
                  <h1 id="login" class="title is-4 has-text-centered">Sign in your account</h1>
                </header>
                <hr>
                <div class="field">
                  <label class="label">Email</label>
                  <div class="control has-icons-left has-icons-right">
                    <input class="input" type="email" placeholder="Please specify your email" pattern="^.*@gmail\.com$" title="This should be @gmail.com" required>
                    <span class="icon is-small is-left">
                      <i class="fas fa-user"></i>
                    </span>
                    <span class="icon is-small is-right">
                      <i class="fas fa-check"></i>
                    </span>
                  </div>
                </div>
                <div class="field">
                  <label class="label">Password</label>
                  <div class="control has-icons-left has-icons-right">
                    <input class="input" type="password" pattern="(?=.*\d)(?=.*)(?=.*).{8,}" title="Must contain at least 8" onKeyPress="if(this.value.length==10) return false;" placeholder="Please specify your password" required>
                    <span class="icon is-small is-left">
                      <i class="fas fa-lock"></i>
                    </span>
                    <span class="icon is-small is-right">
                      <i class="fas fa-check"></i>
                    </span>
                  </div>
                </div>
                <button class="button is-link" onclick="window.location.href='./pages/dashboard.php'">
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