<?php

if (is_file("function/funkcje.php") ) {
    include("function/funkcje.php");
    echo '<!DOCTYPE html><html lang="pl"><head>';
    printHead("function/funkcje.php");
    echo '</head><body>';
    printDateTime("function/funkcje.php");
    photo();
    text();
    echo '</body></html>';
}
else {
    echo "Błąd, strona nie istnieje!!";
}


?>