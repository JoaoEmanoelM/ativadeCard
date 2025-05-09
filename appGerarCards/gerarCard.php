<?php

require_once('./modelo/Card.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $jogo = new Card(
        $_POST['nomeJogo'],
        $_POST['desenvolvedorJogo'],
        $_POST['anoJogo'],
        $_POST['linkImgJogo'],
        $_POST['generoJogo']
    );

    echo "<div class='container mt-5 text-center'>
            <h2>Seu Card de Jogo</h2>
            " . $jogo . "
          </div>";
}

