<?php
require 'core/header.php';
if (isset($_SESSION['userId'])){
    echo "";
}
else{

    header("Location: ../index.php");}
?>



<h1 class="h1"><b>
    This is display of my projects,as a product of learning on my own;
    </b></h1>

    <p class="a">My first project thet I did as a final task for "Backend programing MySql i PHP;</p>

<a href="https://github.com/vladavladimir/admin" class="link">Link to my project no. 1;</a>

<p class="a">With this project I successfully pass course;</p>

<img src="images/backend.png" alt="backend" class="images">

<h2 class="h2"><b>This projesct was a response to finishing task of "Web Development CSS,HTML,JavaScipt;</b></h2>

<a href="https://github.com/vladavladimir/html" class="link">Link to project no. 2</a>

    <p class="a">Whit that projesct I passed the course;</p>

<img src="images/Web.png" class="images" alt="Web Development">

<h3 class="h2">After i did course QA Manuel testing software;</h3>

<a href="https://drive.google.com/file/d/1gHhgTUQa7alw3IkBFakNmI1ZaRQhOPge/view?usp=sharing" class="link">Link to project no. 3;</a>

<p class="a">And whit that successfully pass the course;</p>

<img src="images/QA%20Manuel.png" alt="QA Manual" class="images">

<h4 class="h2">Last course that I did was "WordPress";</h4>

<a href="https://vlada776256002.wordpress.com/" class="link">Link to project no.4;</a>

<p class="a">And whit little hard work pass the test;</p>

<img src="images/Wordpress.png" class="images" alt="Wordpres">

<p class="a">At this momet I am still upgrading my knowledge true working on Java basics,Java medium and Python;</p><br>

<?php require 'core/footer.php'; ?>