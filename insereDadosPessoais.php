<?php
    include_once 'conectaDB.php';

    $idConta = $_POST['idConta'];
    $flagControl = $_POST['flag-control'];

    $nome = $_POST['DadosPessoaisNomeEgresso'];
    $dataNasc = $_POST['DadosPessoaisDataNascEgresso'];
    $genero = $_POST['DadosPessoaisGeneroEgresso'];
    $cor = $_POST['DadosPessoaisCorRacaEgresso'];
    $CPF = $_POST['DadosPessoaisCPFEgresso'];
    $RG = $_POST['DadosPessoaisNumRGEgresso'];
    $OE = $_POST['DadosPessoaisOrgEmissorEgresso']; // OE = Orgão Emissor
    $celular = $_POST['DadosPessoaisCelularEgresso'];
    

    if($flagControl == 0) {
        $sql = "INSERT INTO tblaluno(cpf,idConta,nome,dataNasc,genero,cor,rg,orgaoEmissor,celular)
            VALUES('$CPF','$idConta','$nome','$dataNasc','$genero','$cor','$RG','$OE','$celular');";
        
        if(mysqli_query($conn, $sql)) {
            mysqli_close($conn);
            header('location: egressos-endereco.php');
        } else {
            mysqli_close($conn);
            header('location: egressos-dados-pessoais.php');
        }
    } else {
        $sql = "UPDATE tblaluno
                SET cpf = '$CPF', nome = '$nome', dataNasc = '$dataNasc', genero = '$genero', cor = '$cor', rg = '$RG', orgaoEmissor = '$OE', celular = '$celular'
                WHERE idConta = '$idConta'";

        $query = mysqli_query($conn,$sql);
        if($query) {
            mysqli_close($conn);
            header('location: egressos-endereco.php');
        } else {
            mysqli_close($conn);
            header('location: egressos-dados-pessoais.php');
        }
    }
?>