<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8" lang="en">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>
        Vladimir Markovic
    </title>

</head>

<body class="back">



<header class="header">
    <nav>
        <a href="/index.php">

            <img src="../images/slika3.jpeg" alt="logo" class="logo">

        </a>
        <?php
        if(isset($_SESSION['userId'])){

        echo '<ul class="header-right">
            <li><a href="/index.php" class="active">Home</a></li>
            <li><a href="/portfolio.php" id="port">Portfolio</a></li>
            <li><a href="/aboutme.php" id="about">About me</a></li>
            <li><a href="/contact.php" id="con">Contact</a></li>
        </ul>';}
        ?>
        <div>

            <?php
                if (isset($_SESSION['userId'])){
                    echo '<form action="../function/logout.inc.php" method="post" class="form">
                           <button class="button" type="submit" name="logout-submit">Logout</button> ';
                }
                else{
                    echo '<form action="../function/login.inc.php" method="post" class="form">
                    <label style="color: white">Enter username or e-mail</label><br>
                    <input type="text" name="mailuid" placeholder="Username/E-mail" class="input"><br>
                    <label style="color: white">Enter password</label><br>
                    <input type="password" name="pwd" placeholder="Password" class="input"><br>
                    <button class="button" type="submit" name="login-submit">Login</button>';
                }
            ?>




            </form>
            <?php
                if (isset($_SESSION['userId'])){

                }
                else {

                  echo '<a href = "../function/signup.php" class="signup" > Signup</a >';
            }
            ?>




            </form>

        </div>
    </nav>

</header>