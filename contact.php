<?php
require 'core/header.php';
if (isset($_SESSION['userId'])){
    echo "";
}
else{

    header("Location: ../index.php");}
?>
<div class="contact">
<h1>Kontakt telefon: (+381) 60/5221-996;</h1><br><br>
<h2>E-mail: Vladimir1987.markovic@gmail.com;</h2><br><br>
    <h3>Linkedin: <a href="https://www.linkedin.com/in/vladimir-markovic-b92b391b3/">//www.linkedin.com/in/vladimir-markovic-b92b391b3;</a></h3><br><br>
<h4>CV in pdf:<a href="https://drive.google.com/file/d/1HHAi24Edikf_748IRipwZh2ukQQ5cr4e/view?usp=sharing">CV-view;</a> </h4><br><br>
</div>
<?php
require 'core/footer.php';
?>
