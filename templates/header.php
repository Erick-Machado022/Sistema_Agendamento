<?php
    session_start();
    include_once("config/url.php")

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">

    <title>Agendamentos</title>
</head>

<body>

<!-- NAVBAR -->
<header class="bg-white border-bottom">
    <nav class="navbar px-3">
        <div class="container">

            <div class="d-flex align-items-center">
                <img src="https://cdn-icons-png.flaticon.com/512/679/679720.png" class="logo-icon">
                <strong>Agendamento Container</strong>
            </div>

            <div class="d-flex align-items-center gap-3 ms-auto">
                <span>João Silva</span>

                <button class="btn btn-outline-danger btn-sm">
                    Sair
                </button>
            </div>

        </div>
    </nav>
</header>