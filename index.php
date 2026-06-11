<?php

include_once("config/url.php");
include_once("templates/header.php");
include_once("config/process.php");


if (isset($_SESSION['msg'])) {
    $printMsg = $_SESSION["msg"];
    $_SESSION["msg"] = "";
}

?>

<!-- HEADER (faixa cinza) -->
<div class="header-titulo">


    <div class="container">


        <h2 class="fw-bold m-0">Agendamentos de Containers</h2>


        <?php if (isset($printMsg) && $printMsg != ""): ?>
            <div class="alert-success-custom" id="msg">
                <span><?= $printMsg ?></span>

                <button class="close-alert" onclick="fecharAlerta()">
                    &times;
                </button>
            </div>
        <?php endif; ?>
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
                        <h4 class="mb-0"><?= count($agendamento)?></h4>
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

                <a class="btn btn-primary w-100 btn-agendar" href="<?= $BASE_URL ?>newAgendamento.php">+ Novo Agendamento</a>

            </div>
        </div>

    </div>

</div>

<div class="container mt-4">

    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-body">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="mb-0">Lista de Agendamentos</h4>
            </div>

            <div class="table-responsive">
                <?php if (count($agendamento) > 0): ?>
                    <table class="table table-hover align-middle">

                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Container</th>
                                <th>Operação</th>
                                <th>Armador</th>
                                <th>Data</th>
                                <th>Horário</th>
                                <th>Motorista</th>
                                <th>Status</th>
                                <th>Ações</th>
                            </tr>
                        </thead>

                        <?php foreach ($agendamento as $coluna): ?> <tbody>

                                <tr>
                                    <td><?= $coluna["id"] ?></td>
                                    <td><?= $coluna["container"] ?></td>
                                    <td><?= $coluna["tipo_operacao"] ?></td>
                                    <td><?= $coluna["armador"] ?></td>
                                    <td><?= $coluna["data_agendamento"] ?></td>
                                    <td><?= $coluna["horario"] ?></td>
                                    <td><?= $coluna["nome_motorista"] ?></td>

                                    <td>
                                        <span class="badge bg-warning text-dark">
                                            Pendente
                                        </span>
                                    </td>

                                    <td>
                                        <button class="btn btn-sm btn-outline-primary">
                                            Editar
                                        </button>

                                        <button class="btn btn-sm btn-outline-danger">
                                            Excluir
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach ?>

                            </tbody>

                    </table>
                <?php else: ?>
                    <div id="empty-list-text">
                        <h5>Nenhum agendamento encontrado</h5>

                        <p>
                            Você ainda não possui agendamentos cadastrados.
                        </p>

                        <a href="<?= $BASE_URL ?>newAgendamento.php">
                            + Criar primeiro agendamento
                        </a>
                    </div>
                <?php endif ?>
            </div>

        </div>
    </div>

</div>



<script>
    function fecharAlerta() {
        document.getElementById("msg").style.display = "none";
    }
</script>

</body>

</html>