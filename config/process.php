<?php

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

            $container = $dado["container"];

            $cnh = $dado["cnh"];

            $QUERY = "INSERT INTO new_agendamento(armador, cnh_motorista, data_agendamento, horario, nome_motorista, placa_carreta, placa_cavalo, tipo_operacao, container) VALUES(:armador, :cnh, :data, :horario, :nomeMotorista, :placaCarreta, :placaCavalo, :tipoOperacao, :container)";

            $stmt = $conn->prepare($QUERY);

            $stmt->bindParam(":armador", $armador);
            $stmt->bindParam(":cnh", $cnh);
            $stmt->bindParam(":data", $date);
            $stmt->bindParam(":horario", $horario);
            $stmt->bindParam(":nomeMotorista", $nomeMotorista);
            $stmt->bindParam(":placaCarreta", $placaCarreta);
            $stmt->bindParam(":placaCavalo", $placaCavalo);
            $stmt->bindParam(":tipoOperacao", $tipoOperacao);
            $stmt->bindParam(":container", $container);

            try{

                    $stmt->execute();
                    $_SESSION['msg'] = "Container Agendado!";

                    header("Location: ../index.php");
                    exit;


                }catch(PDOException $e) {
                    //Erro de comixão
                    $error = $e->getMessage();
                    echo "ERRO: $error";
                }
            
             header("Location: " . $BASE_URL . "../index.php");  


        }





    }else{
        $id = null;

        if(!empty($_GET)){
            $id = $_GET["id"];
        }



        if(!empty($id)){
            $QUERY = "SELECT * FROM new_agendamento WHERE id= :id";
            $stmt = $conn->prepare($QUERY);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            $informação = $stmt->fetch();
        }else{
            $QUERY = "SELECT * FROM new_agendamento";
            $informação = [];
            $stmt = $conn->prepare($QUERY);
            $stmt->execute();
            $informação = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    $conn = null;


    

?>