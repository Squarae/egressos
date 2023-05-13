<?php
    include_once 'conectaDB.php';

    $idConta = $_POST['idConta'];
    $flagControl = $_POST['flag-control'];

    $exerce = $_POST['flexRadioDefault'];
    $exercia = $_POST['flexRadioDefault-1'];

    $empresaExerce = $_POST['atvdProfissionalSimInstituicao'];
    $dataInicioExerce = $_POST['atvdProfissionalSimData'];
    $empresaExercia = $_POST['atvdProfissionalExerciaInstituicao'];
    $dataInicioExercia = $_POST['atvdProfissionalExerciaDataDeInicio'];
    $dataFimExercia = $_POST['atvdProfissionalExerciaDataDeFinal'];

    $LE = $_POST['atvdProfissionalLingEstrangEgresso']; // LE = Língua Estrangeira
    $desempenho = $_POST['atvdProfissionalLingEstrangEgressoDesemp'];

    if($flagControl == 0) {
        $sql = "INSERT INTO tblareaprofissional (idConta,exerce,exercia,empresaExerce,dataInicioExerce,empresaExercia,dataInicioExercia,dataFimExercia,linguaEstrangeira,desempenho)
                VALUES ('$idConta','$exerce','$exercia','$empresaExerce','$dataInicioExerce','$empresaExercia','$dataInicioExercia','$dataFimExercia','$LE','$desempenho')";

        if(mysqli_query($conn, $sql)){
            mysqli_close($conn);
            header('location: egressos-esperiencia-profissional.php');
        } else{
            mysqli_close($conn);
            header('location: egressos-area-profissional.php');
        }
    } else {
        $sql = "UPDATE tblareaprofissional
                SET exerce = '$exerce', exercia = '$exercia', empresaExerce = '$empresaExerce', dataInicioExerce = '$dataInicioExerce', empresaExercia = '$empresaExercia', dataInicioExercia = '$dataInicioExercia', dataFimExercia = '$dataFimExercia', linguaEstrangeira = '$LE', desempenho = '$desempenho'
                WHERE idConta = '$idConta'";

        $query = mysqli_query($conn,$sql);
        if($query) {
            mysqli_close($conn);
            header('location: egressos-esperiencia-profissional.php');
        } else {
            mysqli_close($conn);
            header('location: egressos-area-profissional.php');
        }
    }
?>