<?php


    session_start();
    include_once("conexao.php");
    include_once("url.php");

    $dado = $_POST;

    if(!empty($dado)){

        if($dado["type"] == "create"){

            $tipoOperacao = $dado["tipoOperacao"];

            $armador = $dado["armador"];

            $date = $dado["data"];

            $horario = $dado["horario"];

            $placaCavalo = $dado["placaCavalo"];

            $placaCarreta = $dado["placaCarreta"];

            $nomeMotorista = $dado["nomeMotorista"];

            $cnh = $dado["cnh"];

            $QUERY = "INSERT INTO new_agendamento(armador, cnh_motorista, data_agendamento, horario, nome_motorista, placa_carreta, placa_cavalo, tipo_operacao) VALUES(:armador, :cnh, :data, :horario, :nomeMotorista, :placaCarreta, :placaCavalo, :tipoOperacao)";

            $stmt = $conn->prepare($QUERY);

            $stmt->bindParam(":armador", $armador);
            $stmt->bindParam(":cnh", $cnh);
            $stmt->bindParam(":data", $date);
            $stmt->bindParam(":horario", $horario);
            $stmt->bindParam(":nomeMotorista", $nomeMotorista);
            $stmt->bindParam(":placaCarreta", $placaCarreta);
            $stmt->bindParam(":placaCavalo", $placaCavalo);
            $stmt->bindParam(":tipoOperacao", $tipoOperacao);

            try{

                    $stmt->execute();
                    echo "Agendamento Realizado";

                }catch(PDOException $e) {
                    //Erro de comixão
                    $error = $e->getMessage();
                    echo "ERRO: $error";
                }
            


        }






    }


    

?>