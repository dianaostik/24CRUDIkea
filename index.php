<?php

include "./controllers/ItemController.php";

$edit = false;
if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    if(isset($_POST['save'])){
        ItemController::store();
        header("Location: ./index.php");
        die;
    }      

    if(isset($_POST['edit'])){
    
        $item = ItemController::show();
        $edit = true;
    }  

    if(isset($_POST['update'])){
        
        ItemController::update();
        header("Location: ./index.php");
        die;
    }

    if(isset($_POST['destroy'])){
        ItemController::destroy();
        header("Location: ./index.php");
        die;
    }
}

$items = ItemController::index();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color: #F2F4F7">
<div class="row mb-3" >
            <div class="col-3">
        <a href="./index.php">
            <img src="./images/ikea.jpg" alt="" width="100" height="60" class="row ms-2 pt-2" >
        </a></div>
        <div class="input-group pt-2" style= "width:400px">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <button type="button" class="btn btn-outline-primary">search</button>
        </div>
</div>
    <div class="container">
        <div class="row mb-3" >
            <div class="col-1"></div>
            <form action="" method="post" class="col-10 border border-primary rounded">

                <div class="form-group">
                    <label for="f1">Prekės pavadinimas:</label>
                    <input type="text"  style="background-color: #F9FBFC" name="name" id="f1" class="form-control" value="<?= ($edit)? $item->name : "" ?>">
                </div>
                <div class="form-group">
                    <label for="f2">Kategorija:</label>
                    <input type="text" style="background-color: #F9FBFC" name="category" id="f2" class="form-control"  value="<?= ($edit)? $item->category : "" ?>">
                </div>
                <div class="form-group">
                    <label for="f3">Kaina:</label>
                    <input type="number" style="background-color: #F9FBFC" name="price" id="f3" class="form-control"  value="<?= ($edit)? $item->price : "" ?>">
                </div>
                <div class="form-group">
                    <label for="f4">Prekės aprašymas:</label>
                    <textarea name="about" cols="40" rows="3" id="f4" class="form-control" > <?= ($edit)? $item->about : "" ?> </textarea>
                </div>
                <?php if($edit){ ?>
                    <input type="hidden" name="id" value="<?=$item->id?>">
                    <button type="submit" name="update" class="btn btn-outline-success mt-3 mb-3">Atnaujinti</button>
                <?php } else { ?>
                    <button type="submit" name="save" class="btn btn-outline-primary mt-3 mb-3">Išsaugoti</button>
                <?php } ?>
            </form>
            
            <div class="col-1"></div>
        </div>
    </div>

        <table class="table">
            <thead class="table-primary">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>category</th>
                    <th>price</th>
                    <th>about</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $item) { ?>
                <tr>
                        <td> <?=$item->id?> </td>
                        <td> <?=$item->name?> </td>
                        <td> <?=$item->category?> </td>
                        <td> <?=$item->price . "€"?> </td>
                        <td> <?=$item->about?> </td>
                        <td>
                            <form action="" method="post">
                                <input type="hidden" name="id" value=" <?=$item->id?>">
                                <button type="submit" name="edit" class="btn btn-outline-primary">edit</button>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <input type="hidden" name="id" value=" <?=$item->id?>">
                                <button type="submit" name="destroy" class="btn btn-outline-danger">delete</button>
                            </form>
                        </td>

                </tr>
                <?php  } ?>
            </tbody>
        </table>

</body>
</html>