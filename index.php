<?php

    include_once("config/url.php");
    include_once("templates/header.php");

?>

<!-- HEADER (faixa cinza) -->
<div class="header-titulo">
    <div class="container">
        <h2 class="fw-bold m-0">Agendamentos de Containers</h2>
    </div>
</div>

<!-- CONTEÚDO -->
<div class="container mt-4">

    <div class="row g-3">

        <!-- TOTAL -->
        <div class="col-md-3">
            <div class="card card-custom">
                <div class="d-flex align-items-center gap-3">
                    <div class="icon-box icon-blue">
                        <img src="img/caixa-azul.png" class="icon-img">
                    </div>
                    <div>
                        <small>Total</small>
                        <h4 class="mb-0">2</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- PENDENTES -->
        <div class="col-md-3">
            <div class="card card-custom">
                <div class="d-flex align-items-center gap-3">
                    <div class="icon-box icon-yellow">
                        <img src="img/pendente.png" class="icon-img">
                    </div>
                    <div>
                        <small>Pendentes</small>
                        <h4 class="mb-0">1</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- CONFIRMADOS -->
        <div class="col-md-3">
            <div class="card card-custom">
                <div class="d-flex align-items-center gap-3">
                    <div class="icon-box icon-green">
                        <img src="img/caminhao.png" class="icon-img">
                    </div>
                    <div>
                        <small>Confirmados</small>
                        <h4 class="mb-0">1</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- BOTÃO -->
        <div class="col-md-3">
            <div class="card card-custom d-flex justify-content-center align-items-center h-100">
                
                   <a  class="btn btn-primary w-100 btn-agendar" href="<?= $BASE_URL ?>newAgendamento.php">+ Novo Agendamento</a>
            
            </div>
        </div>

    </div>

</div>

</body>
</html>