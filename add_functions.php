<?php
    require_once 'conection.php';
    if($_POST['nome'] !='' && $_POST['idade'] !=''){        
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

        $sql_check_email = 'select id from usuarios where email = :email';
        $result = $conection->prepare($sql_check_email);
        $result->bindParam(':email', $email);
        $result->execute();

        if ($result->rowCount() != 0) {
            header('location: add.php');
            exit;
        } else {
            $sql = "insert into usuarios(nome, idade, email) values( :nome, :idade, :email)";
            $insert = $conection->prepare($sql);
            $insert->bindValue(':nome', $nome); // Associa a um valor que é enviado no momento da execução do código.
            $insert->bindParam(':idade', $idade); // Associação com variável, se mudada a variável esse valor é anviado depois.
            $insert->bindParam(':email', $email);
            $insert->execute();
            header('location: crud.php');
            exit;
        };
    };
?>