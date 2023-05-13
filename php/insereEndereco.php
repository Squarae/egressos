<?php
    include_once 'conectaDB.php';

    $idConta = $_POST['idConta'];
    $flagControl = $_POST['flag-control'];

    $rua = $_POST['EnderecoRuaEgresso'];
    $numero = $_POST['EnderecoNumeroEgresso'];
    $bairro = $_POST['EnderecoBairroEgresso'];
    $cidade = $_POST['EnderecoCidadeEgresso'];
    $estado = $_POST['EnderecoEstadoEgresso'];
    $CEP = $_POST['EnderecoCEPEgresso'];
    $complemento = $_POST['EnderecoComplementoEgresso'];

    if($flagControl == 0) {
        $sql = "INSERT INTO tblendereco (idConta,logradouro,numero,bairro,cidade,estado,cep,complemento)
            VALUES('$idConta','$rua','$numero','$bairro','$cidade','$estado','$CEP','$complemento')";

        if(mysqli_query($conn, $sql)) {
            mysqli_close($conn);
            header('location: egressos-formacao-academica.php');
        } else {
            mysqli_close($conn);
            header('location: egressos-endereco.php');
        }
    } else {
        $sql = "UPDATE tblendereco
                SET logradouro = '$rua', numero = '$numero', bairro = '$bairro', cidade = '$cidade', estado = '$estado', cep = '$CEP', complemento = '$complemento'
                WHERE idConta = '$idConta'";

        $query = mysqli_query($conn,$sql);
        if($query) {
            mysqli_close($conn);
            header('location: egressos-formacao-academica.php');
        } else {
            mysqli_close($conn);
            header('location: egressos-endereco.php');
        }
    }

    
?>