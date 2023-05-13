<?php
    include_once 'conectaDB.php';

    $idConta = $_POST['idConta'];
    $flagControl = $_POST['flag-control'];

    $escolaridadeConcl = $_POST['formacaoConclEgresso'];
    $bolsa = $_POST['formacaoBolsaConclEgresso'];
    $instituicao = $_POST['formacaoEscolaEgresso'];
    $anoInic = $_POST['formacaoInicioEscolaEgresso'];
    $anoConcl = $_POST['formacaoConclusaoEscolaEgresso'];
    $universidade = $_POST['formaocaoUniversidadeEgresso'];
    $monografia = $_POST['formacaoMonografiaEgresso'];
    $orientador = $_POST['formacaoOrientadorEgresso'];
    $escolaridadeEmAnd = $_POST['formacaoEmAndamentoEgresso'];
    $polo = $_POST['formacaoInstituicaoEgresso'];
    $anoInic2 = $_POST['formacaoInicioEmAndamentoEscolaEgresso'];

    if($flagControl == 0){
        $sql = "INSERT INTO tblformacao (idConta,escolaridadeConcl,bolsa,instituicao,anoInic,anoConcl,universidade,monografia,orientador,escolaridadeEmAnd,polo,anoInicAnd)
                VALUES ('$idConta','$escolaridadeConcl','$bolsa','$instituicao','$anoInic','$anoConcl','$universidade','$monografia','$orientador','$escolaridadeEmAnd','$polo','$anoInic2')";

        if(mysqli_query($conn, $sql)){
            mysqli_close($conn);
            header('location: egressos-area-profissional.php');
        } else{
            mysqli_close($conn);
            header('location: egressos-formacao-academica.php');
        }
    } else{
        $sql = "UPDATE tblformacao
                SET escolaridadeConcl = '$escolaridadeConcl', bolsa = '$bolsa', instituicao = '$instituicao', anoInic = '$anoInic', anoConcl = '$anoConcl', universidade = '$universidade', monografia = '$monografia', orientador = '$orientador', escolaridadeEmAnd = '$escolaridadeEmAnd', polo = '$polo', anoInicAnd = '$anoInic2'
                WHERE idConta = '$idConta'";

        $query = mysqli_query($conn,$sql);
        if($query) {
            mysqli_close($conn);
            header('location: egressos-area-profissional.php');
        } else {
            mysqli_close($conn);
            header('location: egressos-formacao-academica.php');
        }
    }
?>