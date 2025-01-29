<?php
    require_once 'conection.php';

    $del = filter_input(INPUT_GET, 'del', FILTER_SANITIZE_NUMBER_INT);
    if($del){        
        deleteUser($del);
        header('location: crud.php');
        exit;
    };
    
    function deleteUser($id){
        global $conection;
        $sql = "delete from usuarios where id = :id";
        $delete = $conection->prepare($sql);
        $delete->bindParam(':id',  $id);
        $delete->execute();
    };
?>