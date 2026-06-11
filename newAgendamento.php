<?php

include_once("config/url.php");
include_once("config/conexao.php");
include_once("templates/header.php")

?>


<div class="container">
    <a href="<?= $BASE_URL ?>index.php" class="btn btn-outline-primary back-btn">
        <i class="bi bi-arrow-left"></i>Voltar para agendemantos
    </a>

    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-body p-4 p-md-5">
            <div class="card-header-custom bg-white">
                <h3 class="fw-bold text-dark mb-1">Formulário de Agendamento</h3>
                <p class="text-muted mb-0">Preencha todos os campos para solicitar seu agendamento</p>
            </div>

            <form action="<?= $BASE_URL ?>config/process.php" method="POST">
                <input type="hidden" name="type" value="create">
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
                        <select class="form-select text-muted" id="armador" name="armador" required>
                            <option value="" disabled selected>Selecione o armador</option>
                            <option value="CMA CGM">CMA CGM</option>
                            <option value="Maersk">Maerk</option>
                            <option value="MSC">MSC</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="numeroContainer" class="form-label">
                            <i class="bi bi-box-seam"></i> Número do Container *
                        </label>
                        <input
                            type="text"
                            class="form-control"
                            id="numeroContainer"
                            name="container"
                            placeholder="nº container"
                            maxlength="11" required>
                    </div>

                    <div class="col-md-6">
                        <label for="data" class="form-label">
                            <i class="bi bi-calendar3"></i>Data *
                        </label>
                        <input type="date" class="form-control text-muted" id="data" name="data" required>
                    </div>
                    <div class="col-md-6">
                        <label for="horario" class="form-label">
                            <i class="bi bi-clock"></i>Horário *
                        </label>
                        <select class="form-select text-muted" id="horario" name="horario" required>
                            <option selected>Selecione o horário</option>
                            <option value="08:00 - 09:00">08:00 - 09:00</option>
                            <option value="09:00 - 10:00">09:00 - 10:00</option>
                            <option value="10:00 - 11:00">10:00 - 11:00</option>
                            <option value="11:00 - 12:00">11:00 - 12:00</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="placaCavalo" class="form-label">
                            <i class="bi bi-truck"></i>Placa do Cavalo *
                        </label>
                        <input type="text" class="form-control" id="placaCavalo" placeholder="ABC-1234" name="placaCavalo" required>
                    </div>
                    <div class="col-md-6">
                        <label for="placaCarreta" class="form-label">Placa da Carreta *</label>
                        <input type="text" class="form-control" id="placaCarreta" name="placaCarreta" placeholder="XYZ-9876" required>
                    </div>

                    <div class="col-md-6">
                        <label for="nomeMotorista" class="form-label">
                            <i class="bi bi-person"></i>Nome do Motorista *
                        </label>
                        <input type="text" class="form-control" id="nomeMotorista" name="nomeMotorista" placeholder="Nome completo do motorista" required>
                    </div>
                    <div class="col-md-6">
                        <label for="cnhMotorista" class="form-label">CNH do Motorista *</label>
                        <input type="text" class="form-control" id="cnhMotorista" name="cnh" placeholder="12345678901" required>
                    </div>

                     <div class="col-12">  <!--pegar transportadora direto do dado do login -->
                        <label for="transportadora" class="form-label">Transportadora *</label>
                        <input type="text" class="form-control" id="transportadora" placeholder="Nome da empresa transportadora">
                    </div>

                    <!-- BOTÃO -->
                    <div class="col-md-3">
                            
                            <button type="submit"  class="btn btn-primary w-100 btn-agendar">Realizar agendamento</button>
                    </div>


                </div>
            </form>

        </div>
    </div>







</div>