<?php
    require_once 'conection.php';

    if (is_numeric($id)) { //Preenche a página editar.php com os dados requeridos
        $info = [];
        $sql = "select * from usuarios where id = :id";
        $getData = $conection->prepare($sql);
        $getData->bindValue(':id', $id);
        $getData->execute();
        if ($getData->rowCount() > 0) {
            $info = $getData->fetch(PDO::FETCH_ASSOC);
        } else {
            header('location: crud.php');
            exit;
        };            
    };

    if( !empty($_POST['nome']) && !empty($_POST['idade'])){        
        $nome = filter_input(INPUT_POST, 'nome', FILTER_UNSAFE_RAW);
        $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $id =  filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
       
        updateUser($id, $nome, $idade, $email);
    };

    function updateUser($id, $nome, $idade, $email){
        global $conection;
        $sql = "update usuarios set nome = :nome, idade = :idade, email = :email where id = :id";
        $update = $conection->prepare($sql);
        $update->bindParam(':nome', $nome);
        $update->bindParam(':idade', $idade);
        $update->bindParam(':email', $email);
        $update->bindParam(':id', $id);
        $update->execute();
        header('location: crud.php');
        exit;      
    };
?>