<?php
    session_start();
    include_once 'conectaDB.php';
    
    $loginEmail = $_POST['loginEmail'];
    $loginSenha = $_POST['loginSenha'];

    $sql = "SELECT * FROM tblconta
            WHERE email = '$loginEmail' AND senha = '$loginSenha'";

    $query = mysqli_query($conn,$sql);

    if(mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_array($query);
        $_SESSION['id'] = $data['idConta'];
        $_SESSION['login'] = $loginEmail;
        $_SESSION['senha'] = $loginSenha;
        mysqli_close($conn);
        header('location: indexlogin.php');
    } else {
        mysqli_close($conn);
        header('location: index.php');
    }
?>