<?php
require 'core/header.php';
if (isset($_SESSION['userId'])){
    echo "";
}
else{

    header("Location: ../index.php");}
?>



<h1 class="h1"><b>
    Ovo je prikaz mojih samostalnih projekata,kao produkt samostalnog ucenja i saznanja;
    </b></h1>

    <p class="a">Moj prvi samostalni veci projekat koji sam radio kao zavrsni rad kursa "Backend programiranje MySql i PHP;</p>

<a href="https://github.com/vladavladimir/admin" class="link">Link do mog prvog projekta;</a>

<p class="a">Sa ovim projektom sam uspesno zavrsio kurs;</p>

<img src="images/backend.png" alt="backend" class="images">

<h2 class="h2"><b>Ovo je projekat koji je bio odgovor na zavrsni zadatak kursa "Web Development CSS,HTML,JavaScipt;</b></h2>

<a href="https://github.com/vladavladimir/html" class="link">Link do projekta br. 2</a>

    <p class="a">Nakon cega sma uspesno savladao kurs ;</p>

<img src="images/Web.png" class="images" alt="Web Development">

<h3 class="h2">Nakon toga sam polagao kurs QA Manuelno testiranje softvera;</h3>

<a href="https://drive.google.com/file/d/1gHhgTUQa7alw3IkBFakNmI1ZaRQhOPge/view?usp=sharing" class="link">Link do projekta br. 3;</a>

<p class="a">Nakon cega sam polozio;</p>

<img src="images/QA%20Manuel.png" alt="QA Manual" class="images">

<h4 class="h2">Zadnji kurs koji sam polagao je "WordPress";</h4>

<a href="https://vlada776256002.wordpress.com/" class="link">Link do projekta br.4;</a>

<p class="a">Sa time sam zavrsio kurs;</p>

<img src="images/Wordpress.png" class="images" alt="Wordpres">

<p class="a">Trenutno radim na daljem usavrsavanje kroz ucenje Jave osnove i Java srednji nivo kao i Python;</p><br>

<?php require 'core/footer.php'; ?>