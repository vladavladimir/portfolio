<?php

require "core/header.php";

?>

    <main>
    <?php
    if (isset($_SESSION['userId'])){
        echo ' <p class="msg" style="color: green;">You are logged in</p>';
    }
    else{
        echo '<p class="msg" style="color: red">You are logged out</p>';
    }
    ?>



    </main>

    <div class="home">
        <p class="text">Doborodosli na Vladin sajt-portfolio</p><br><br>
        <p class="text">Welcome to the Vladin portfolio site</p><br><br>
        <p class="text">Willkommen auf der Portfolio-Site der Vlada</p><br><br>
    </div>
<?php
require "core/footer.php";
?>