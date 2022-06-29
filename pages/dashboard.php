<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../stylesheet/bulma.css">
    <link rel="stylesheet" type="text/css" href="../stylesheet/bulma-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="../stylesheet/customize.css">
    <script src="https://kit.fontawesome.com/9ec85b07cd.js" crossorigin="anonymous"></script>
    <title>IAB: Dashboard</title>

    <style>
        #navbar {
            position: fixed;
            height: 100%;
            width: 240px;
            background-color: #95A0CE;
            min-width: 250px;
            z-index: 1;
            top: 0px;
            left: 0px;
            font-size: 20px;
            overflow: auto;
            padding: 20px 0;
        }

        #navbar ul li {
            padding: 10px;
        }

        .finance_logo {
            width: 50px; 
        }

        .underline {
            padding-bottom: 50px;
        }

        .nav-link i {
            padding-right: 10px;
        }

        .nav-li {
            margin-bottom: 70px;
        }

        .navlink-active {
            background-color: white;
            border-radius: 50px;
            opacity: 0.7;
        }

        .table-content{
            margin-left: 250px;
        }
    </style>
</head>

<body>
    <nav id="navbar">
        <div class="underline">
            <header> <img src="../images/Icon-1.svg" alt="" class="finance_logo"> Personal Finance</header>
        </div>
        <ul>
            <li class="navlink-active"><a class="nav-link" href="#Introduction"><i class="fa fa-book"></i> Dashboard</a></li>
            <li><a class="nav-link" href="#Introduction"><i class="fa fa-book"></i> Item Logs</a></li>
            <li><a class="nav-link" href="#"><i class="fas fa-list-alt"></i> Balance Sheet</a></li>
            <li><a class="nav-link" href="#"><i class="fas fa-file-text"></i> Income Statement</a></li>
            <li><a class="nav-link" href="#"><i class="fas fa-credit-card"></i> Credit Cards</a></li>
            <li class="nav-li"><a class="nav-link" href="#"><i class="fas fa-cogs"></i> Setting</a></li>
            <li><a class="nav-link" href="#"><i class="fas fa-sign-out"></i>Logout</a></li>
        </ul>
    </nav>
    <main class="table-content">
        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
            <thead>
                <tr>
                    <th><abbr title="Position">Pos</abbr></th>
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
                    <th><abbr title="Position">Pos</abbr></th>
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
                    <th>1</th>
                    <td><a href="https://en.wikipedia.org/wiki/Leicester_City_F.C." title="Leicester City F.C.">Leicester City</a> <strong>(C)</strong>
                    </td>
                    <td>38</td>
                    <td>23</td>
                    <td>12</td>
                    <td>3</td>
                    <td>68</td>
                    <td>36</td>
                    <td>+32</td>
                    <td>81</td>
                   
                </tr>
                <tr>
                    <th>2</th>
                    <td><a href="https://en.wikipedia.org/wiki/Arsenal_F.C." title="Arsenal F.C.">Arsenal</a></td>
                    <td>38</td>
                    <td>20</td>
                    <td>11</td>
                    <td>7</td>
                    <td>65</td>
                    <td>36</td>
                    <td>+29</td>
                    <td>71</td>
                 
                </tr>
                <tr>
                    <th>3</th>
                    <td><a href="https://en.wikipedia.org/wiki/Tottenham_Hotspur_F.C." title="Tottenham Hotspur F.C.">Tottenham Hotspur</a></td>
                    <td>38</td>
                    <td>19</td>
                    <td>13</td>
                    <td>6</td>
                    <td>69</td>
                    <td>35</td>
                    <td>+34</td>
                    <td>70</td>
                 
                </tr>
                <tr class="is-selected">
                    <th>4</th>
                    <td><a href="https://en.wikipedia.org/wiki/Manchester_City_F.C." title="Manchester City F.C.">Manchester City</a></td>
                    <td>38</td>
                    <td>19</td>
                    <td>9</td>
                    <td>10</td>
                    <td>71</td>
                    <td>41</td>
                    <td>+30</td>
                    <td>66</td>
                  
                </tr>
                <tr>
                    <th>5</th>
                    <td><a href="https://en.wikipedia.org/wiki/Manchester_United_F.C." title="Manchester United F.C.">Manchester United</a></td>
                    <td>38</td>
                    <td>19</td>
                    <td>9</td>
                    <td>10</td>
                    <td>49</td>
                    <td>35</td>
                    <td>+14</td>
                    <td>66</td>
                  
                </tr>
                <tr>
                    <th>6</th>
                    <td><a href="https://en.wikipedia.org/wiki/Southampton_F.C." title="Southampton F.C.">Southampton</a></td>
                    <td>38</td>
                    <td>18</td>
                    <td>9</td>
                    <td>11</td>
                    <td>59</td>
                    <td>41</td>
                    <td>+18</td>
                    <td>63</td>
                  
                </tr>
                <tr>
                    <th>7</th>
                    <td><a href="https://en.wikipedia.org/wiki/West_Ham_United_F.C." title="West Ham United F.C.">West Ham United</a></td>
                    <td>38</td>
                    <td>16</td>
                    <td>14</td>
                    <td>8</td>
                    <td>65</td>
                    <td>51</td>
                    <td>+14</td>
                    <td>62</td>
                   
                </tr>
                <tr>
                    <th>8</th>
                    <td><a href="https://en.wikipedia.org/wiki/Liverpool_F.C." title="Liverpool F.C.">Liverpool</a></td>
                    <td>38</td>
                    <td>16</td>
                    <td>12</td>
                    <td>10</td>
                    <td>63</td>
                    <td>50</td>
                    <td>+13</td>
                    <td>60</td>

                </tr>
                <tr>
                    <th>9</th>
                    <td><a href="https://en.wikipedia.org/wiki/Stoke_City_F.C." title="Stoke City F.C.">Stoke City</a></td>
                    <td>38</td>
                    <td>14</td>
                    <td>9</td>
                    <td>15</td>
                    <td>41</td>
                    <td>55</td>
                    <td>−14</td>
                    <td>51</td>
   
                </tr>
                <tr>
                    <th>10</th>
                    <td><a href="https://en.wikipedia.org/wiki/Chelsea_F.C." title="Chelsea F.C.">Chelsea</a></td>
                    <td>38</td>
                    <td>12</td>
                    <td>14</td>
                    <td>12</td>
                    <td>59</td>
                    <td>53</td>
                    <td>+6</td>
                    <td>50</td>

                </tr>
                <tr>
                    <th>11</th>
                    <td><a href="https://en.wikipedia.org/wiki/Everton_F.C." title="Everton F.C.">Everton</a></td>
                    <td>38</td>
                    <td>11</td>
                    <td>14</td>
                    <td>13</td>
                    <td>59</td>
                    <td>55</td>
                    <td>+4</td>
                    <td>47</td>

                </tr>
             
            </tbody>
        </table>
    </main>
</body>

</html>