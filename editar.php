<?php
    setlocale(LC_ALL, "pt_BR.utf-8");
    $id =  filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    require_once 'editar_functions.php';
?>

<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=yes">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="icon" href="https://image.flaticon.com/icons/png/512/1216/1216733.png" type="image/png" sizes="16x16">
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/ec29234e56.js" crossorigin="anonymous" defer></script>
        <style>
            #barra{
                background-color: tomato;
                width: 100%;
            }
            div a{
                color: white;
                font-weight: bold;
            }
            div a:hover{
                text-decoration: none;
                color: white;
            }
            h3{
                text-align: center;
            }

            #form-container{
                background-color: lightblue;
                border-radius: 15px;
                box-shadow: 0px 0px 5px gray;
                padding: 10px;
            }

            h1{
                text-align: center;
            }
        </style>
        <title>PHP - Teste</title>
    </head>
    <body>
        <div id="barra"><a href="crud.php">Voltar</a></div>
        <h1>Alterar Usuário</h1>
        <div class="col-4 offset-4" id="form-container">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" name="nome" id="nome" required="" value="<?=$info['nome']?>" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="idade class="form-label"">Idade:</label>
                    <input type="number" name="idade" id="idade" required="" value="<?=$info['idade']?>" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" name="email" id="email" value="<?=$info['email']?>" class="form-control">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Alterar <i class="fas fa-pencil-alt"></i></button>
                </div>
            </form>
        </div>
    </body>
</html>