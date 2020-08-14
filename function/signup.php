<?php
require "../core/header.php";
?>

    <main>

        <h1 style="color: white"><i>SIGNUP</i></h1>
        <?php
        if (isset($_GET['error'])){
            if ($_GET['error'] == "emptyfields"){
                echo '<p>Fill in all fields!</p>';
            }
            elseif($_GET['error'] == "invaliduidmail"){
                echo '<p>Invalid username and e-mail!</p>';
            }
            elseif ($_GET['error'] == "invaliduid"){
                echo '<p>Invalid username!</p>';
            }
            elseif ($_GET['error'] == "invalidmail"){
                echo '<p>Invalid e-mail!</p>';
            }
            elseif ($_GET['error'] == "passwordcheck"){
                echo '<p>Invalid password!</p>';
            }
            elseif ($_GET['error'] == "usertaken"){
                echo '<p>Username is already taken!</p>';
            }
        }
        elseif ($_GET['signup'] == "sucess" ){
            echo '<p>Signup successful!</p>';
        }
        ?>
        <form action="signup.inc.php" method="post">

            <label style="color: white">Enter username</label><br>
            <input type="text" name="uid" placeholder="Username" class="inputs"><br>
            <label style="color: white">Enter e-mail</label><br>
            <input type="text" name="mail" placeholder="E-mail" class="inputs"><br>
            <label style="color: white">Enter password</label><br>
            <input type="password" name="pwd" placeholder="Password" class="inputs"><br>
            <label style="color: white">Reapet password</label><br>
            <input type="password" name="pwd-repeat" placeholder="Repeat password" class="inputs"><br>
            <button type="submit" name="signup-submit" class="signbutton">Signup</button>

        </form>

    </main>

<?php
require "../core/footer.php";
?>
