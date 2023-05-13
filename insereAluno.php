<?php
    include_once 'conectaDB.php';

    $email = $_POST['emailEgresso'];
    $senha = $_POST['senhaEgresso'];

    $sql = "INSERT INTO tblconta(email,senha)
            VALUES('$email','$senha')";

    if(mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        header('location: egressos-confirmacao-de-cadastro-sucesso.php');
    } else {
        mysqli_close($conn);
        header('location: egressos-confirmacao-de-cadastro-erro.php');
    }

?>