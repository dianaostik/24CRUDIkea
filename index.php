
<?php include "./routes.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color: #F2F4F7">
<!-- /Search bar -->
<form action="" method="get">
<div class="row mb-3" >
    <div class="col-3">
        <a href="./index.php">
            <img src="./images/ikea.jpg" alt="" width="100" height="60" class="row ms-2 pt-2" >
        </a></div>
    <div class = "col-9"> 
        <div class="row mt-2">
            <div class="col-4"></div>
            <div class="col-8 pe-3">
               <div class="input-group pt-2">
                <form action="" method="get" >
                <input type="text" name="search" class="form-control rounded" placeholder="..." aria-label="Search" aria-describedby="search-addon"/>
                <button type="submit" class="btn btn-outline-primary">Ieškoti</button>
             </form>
            </div>    
        </div>        
        </div>
    </div> 
</div>
</form>
<!-- Forma isideti prekes -->
    <div class="container">
        <div class="row mb-3" >
            <div class="col-1"></div>
            <?php include "./components/form.php" ?>
            <div class="col-1"></div>
        </div>
    </div>

<!-- Filtravimas -->      
<?php include "./components/filter.php" ?>

<!-- Sarasas prekiu -->
<?php include "./components/table.php" ?>

</body>
</html>