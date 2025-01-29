<?php
    setlocale(LC_ALL, "pt_BR.utf-8");
    require_once 'crud_functions.php';
?>
<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="icon" href="https://phproberto.gallerycdn.vsassets.io/extensions/phproberto/vscode-php-getters-setters/1.2.3/1525759974843/Microsoft.VisualStudio.Services.Icons.Default" type="image/gif" sizes="16x16">
        <style>
            #del:hover{
                color: red;
            }

            #del{
                color: pink;
            }

            button{
                margin: 10px;
            }
        </style>
        <title>PHP - CRUD</title>
    </head>
    <body>
        <a href="add.php"><button type="button" class="btn btn-success">Adicionar <i class="fas fa-plus"></i></button></a>
        <br>
        
        <table class="table table-hover table-bordered table-striped col-10 offset-1">
            <thead class='thead-dark text-center'>
                <tr class="d-flex">
                    <th class="col-1">ID</th>
                    <th class="col-5">NOME</th>
                    <th class="col-1">IDADE</th>
                    <th class="col-3">EMAIL</th>
                    <th class="col-1">Deletar</th>
                    <th class="col-1">Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($prep as $key => $value) {
                        echo "<tr class=\"d-flex\">
                        <td class=\"col-1 text-center\">$value[id]</td>
                        <td class=\"col-5\">$value[nome]</td>
                        <td class=\"col-1 text-center\">$value[idade]</td>
                        <td class=\"col-3\">$value[email]</td>
                        <td class=\"col-1 text-center\"><a href=\"delete.php?del=$value[id]\" id=\"del\"><i class=\"fas fa-trash-alt\" ></i></a></td>
                        <td class=\"col-1 text-center\"><a href=\"editar.php?id=$value[id]\" ><i class=\"fas fa-pencil-alt\"></i></a></td>
                    </tr>";
                    };
                ?>
            </tbody>
        </table>
        <script src="https://kit.fontawesome.com/ec29234e56.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script type="text/javascript" src="crud.js"></script>
    </body>
</html>