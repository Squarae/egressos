<?php
    include_once 'conectaDB.php';

    $idConta = $_POST['idConta'];
    $flagControl = $_POST['flag-control'];

    $qtd1 = 0;
    $qtd2 = 0;

    if($_POST['qnt_expProf'] != null) {
        $qtd1 = $_POST['qnt_expProf'];
    }

    if($_POST['qnt_curso'] != null) {
        $qtd2 = $_POST['qnt_curso'];
    }

    $empresaTrabalha = "";

    if($_POST['CurriculoEsperienciaProfissional'] != null && $_POST['CurriculoEsperienciaProfissionalDataIni'] != null) {
        $periodoInic = explode("-",$_POST['CurriculoEsperienciaProfissionalDataIni']);
        $empresaTrabalha = $_POST['CurriculoEsperienciaProfissional']."\n".$periodoInic[2]."/".$periodoInic[1]."/".$periodoInic[0];
    }

    $empresaExerceu[] = $_POST['CurriculoEsperienciaProfissionalExerceu'];
    $empresaExerceuDataInic[] = $_POST['CurriculoEsperienciaProfissionalExerceuDataIni'];
    $empresaExerceuDataFim[] = $_POST['CurriculoEsperienciaProfissionalDataFinal'];

    if($qtd1 > 0) {
        for($i = 1; $i <= $qtd1; $i++) {
            if(isset($_POST['CurriculoEsperienciaProfissionalExerceu'.$i]) && !(empty($_POST['CurriculoEsperienciaProfissionalExerceu'.$i]))) {
                $empresaExerceu[] = $_POST['CurriculoEsperienciaProfissionalExerceu'.$i];
                $empresaExerceuDataInic[] = $_POST['CurriculoEsperienciaProfissionalExerceuDataIni'.$i];
                $empresaExerceuDataFim[] = $_POST['CurriculoEsperienciaProfissionalDataFinal'.$i];
            } else {
                continue;
            }
        }
    }

    $empresaTrabalhou = "";

    for($i = 0; $i < count($empresaExerceu); $i++) {
        if($empresaExerceu[$i] != null && $empresaExerceuDataInic[$i] != null && $empresaExerceuDataFim[$i] != null) {
            $dataInicExplode = explode("-",$empresaExerceuDataInic[$i]);
            $dataFimExplode = explode("-",$empresaExerceuDataFim[$i]);
            $empresaTrabalhou .= $empresaExerceu[$i]."\n".$dataInicExplode[2]."/".$dataInicExplode[1]."/".$dataInicExplode[0]."\n".$dataFimExplode[2]."/".$dataFimExplode[1]."/".$dataFimExplode[0]."\n";
        }
    }

    $obj = $_POST['CurriculoObjetivos']; // obj = objetivos

    $curso[] = $_POST['CurriculoHabilidades'];
    $nivelCurso[] = $_POST['CurriculoHabilidadesNivel'];

    if($qtd2 > 0) {
        for($i = 1; $i <= $qtd2; $i++) {
            if(isset($_POST['CurriculoHabilidades'.$i]) && !(empty($_POST['CurriculoHabilidades'.$i]))) {
                $curso[] = $_POST['CurriculoHabilidades'.$i];
                $nivelCurso[] = $_POST['CurriculoHabilidadesNivel'.$i];
            } else {
                continue;
            }
        }
    }

    $cursos = "";

    for($i = 0; $i < count($curso); $i++) {
        if($curso[$i] != null && $nivelCurso[$i] != null) {
            $cursos .= $curso[$i]."\n".$nivelCurso[$i]."\n";
        }
    }

    $certicacao = $_POST['CurriculoCertificacoesTitulo'];

    if($flagControl == 0) {
        $sql = "INSERT INTO tblexpprofissional (idConta,empresaTrabalha,empresaTrabalhou,objetivo,cursos,certificacao)
                VALUES ('$idConta','$empresaTrabalha','$empresaTrabalhou','$obj','$cursos','$certicacao')";

        if(mysqli_query($conn, $sql)) {
            mysqli_close($conn);
            header('location: egressos-confirmacao-de-cadastro-curriculo-sucesso.php');
        } else {
            mysqli_close($conn);
            header('location: egressos-confirmacao-de-cadastro-curriculo-erro.php');
        }
    } else {
        $sql = "UPDATE tblexpprofissional
                SET empresaTrabalha = '$empresaTrabalha', empresaTrabalhou = '$empresaTrabalhou', objetivo = '$obj', cursos = '$cursos', certificacao = '$certicacao'
                WHERE idConta = '$idConta'";

        if(mysqli_query($conn, $sql)) {
            mysqli_close($conn);
            header('location: egressos-confirmacao-de-alteracao-de-dados-sucesso.php');
        } else {
            mysqli_close($conn);
            header('location: egressos-confirmacao-de-alteracao-de-dados-erro.php');
        }
    }
?>