<?php
function printHead () {
    echo '<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="stylesheet" href="css/styles.css"><title>Test</title>';
}

function printDateTime() {
    echo '<div id="czas">' . date("l jS \of F Y H:i:s ") . '</div>' . '<br>'. '<br>'; 
}

function photo() {
if (is_file("img/malarze.jpg")) {
    echo '<div id="obraz"><img src="img/malarze.jpg" alt="Trzech wielkich artystów"></div><br>'; 
}
else {
    text() ;
}
}

function text() {
if (is_file("components/tekst.html")) {
    echo '<div id="tekst">';
    include("components/tekst.html");
    echo '</div>';
}
}
?>