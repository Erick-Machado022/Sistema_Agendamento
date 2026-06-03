<?php

include_once("config/url.php");
include_once("config/conexao.php");
include_once("templates/header.php")

?>

<div class="header-titulo">
    <div class="container">
        <h2 class="fw-bold m-0">Novo Agendamento</h2>
    </div>
</div>

<div class="container">
    <a href="#" class="text-decoration-none text-secondary mb-3 d-inline-block">
        <i class="bi bi-arrow-left"></i>Voltar para agendemantos
    </a>

    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-body p-4 p-md-5">
            <div class="card-header-custom bg-white">
                <h3 class="fw-bold text-dark mb-1">Formulário de Agendamento</h3>
                <p class="text-muted mb-0">Preencha todos os campos para solicitar seu agendamento</p>
            </div>

            <form action="" method="POST">
                <div class="row g-4">
                    
                    <div class="col-md-6">
                        <label class="form-label">
                            <i class="bi bi-file-earmark-text"></i>Tipo de Operação *
                        </label>
                        <div class="mt-1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tipoOperacao" id="entrega" value="entrega" checked>
                                <label class="form-check-label" for="entrega">Entrega</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tipoOperacao" id="coleta" value="coleta">
                                <label class="form-check-label" for="coleta">Coleta</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="armador" class="form-label">Armador *</label>
                        <select class="form-select text-muted" id="armador">
                            <option selected>Selecione o armador</option>
                            <option value="1">CMA CGM</option>
                            <option value="2">Maerk</option>
                            <option value="2">MSC</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="data" class="form-label">
                            <i class="bi bi-calendar3"></i>Data *
                        </label>
                        <input type="date" class="form-control text-muted" id="data">
                    </div>
                    <div class="col-md-6">
                        <label for="horario" class="form-label">
                            <i class="bi bi-clock"></i>Horário *
                        </label>
                        <select class="form-select text-muted" id="horario">
                            <option selected>Selecione o horário</option>
                            <option value="08:00">08:00 - 09:00</option>
                            <option value="08:00">09:00 - 10:00</option>
                            <option value="08:00">10:00 - 11:00</option>
                            <option value="08:00">11:00 - 12:00</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="placaCavalo" class="form-label">
                            <i class="bi bi-truck"></i>Placa do Cavalo *
                        </label>
                        <input type="text" class="form-control" id="placaCavalo" placeholder="ABC-1234">
                    </div>
                    <div class="col-md-6">
                        <label for="placaCarreta" class="form-label">Placa da Carreta *</label>
                        <input type="text" class="form-control" id="placaCarreta" placeholder="XYZ-9876">
                    </div>

                    <div class="col-md-6">
                        <label for="nomeMotorista" class="form-label">
                            <i class="bi bi-person"></i>Nome do Motorista *
                        </label>
                        <input type="text" class="form-control" id="nomeMotorista" placeholder="Nome completo do motorista">
                    </div>
                    <div class="col-md-6">
                        <label for="cnhMotorista" class="form-label">CNH do Motorista *</label>
                        <input type="text" class="form-control" id="cnhMotorista" placeholder="12345678901">
                    </div>

                    <div class="col-12">
                        <label for="transportadora" class="form-label">Transportadora *</label>
                        <input type="text" class="form-control" id="transportadora" placeholder="Nome da empresa transportadora">
                    </div>
                </div>
            </form>

        </div>
    </div>







</div>