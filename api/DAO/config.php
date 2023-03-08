<?php

function conexaoPDO() {
    return new PDO( 'mysql:dbname=acmecursos;host=localhost;', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ] );
}

?>
