
<?php

include('./function.php');
init();
if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['id'])){
    $cars = edit();
}
if($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST['id'])){
    store();
    header("location:./");
    die;
}
if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['Name'])){
    destroy();
    header("location:./");
    die;
}
if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['id'])){
    update();
   header("location:./");
   die;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>Masinos</title>
</head>
<body>
  <form class="form" action="" method="POST"
  <div class="form-row">
    <div class="form-group col-sm-6">
      <label for="inputEmail4">Manufacturer</label>
      <input class="form-control" > <value="<?= (isset($cars))? $cars['Manufacturer'] : "" ?>
</div>
</div>
         <div class="form-row">
         <div class="form-group col-sm-6">
      <label for="inputEmail4">Model</label>
        <input class="form-control"> <value="<?= (isset($cars))? $cars['Model'] : "" ?>
</div>
</div>
        <div class="form-group col-sm-6">
      <label for="inputEmail4">Year</label>
      <input type="text" class="form-control" > <value="<?= (isset($cars))? $cars['Year'] : "" ?>
</div>
</div>
      <div class="form-row">
         <div class="form-group col-sm-6">
      <label for="inputEmail4">Colour</label>
      <input type="text" class="form-control" > <value="<?= (isset($cars))? $cars['Colour'] : "" ?>
</div>
</div>
       <div class="form-row">
         <div class="form-group col-sm-6">
      <label for="inputEmail4">Distance</label>
      <input type="text" class="form-control" > <value="<?= (isset($cars))? $cars['distance'] : "" ?>
</div>
</div>
       <div class="form-row">
         <div class="form-group col-sm-6">
      <label for="inputEmail4">Fuel</label>
      <input type="text" class="form-control" > <value="<?= (isset($cars))? $cars['fuel'] : "" ?>
    </div>
</div>

 <?php if(!isset($cars)){
            echo '<button class="btn btn-primary" type="submit">Prideti Automobili</button>';
    }else{
            echo '
            <input type="hidden" name="id" value="'. $cars['id'].' ">
            <button class="btn btn-info" type="submit">Redaguoti</button>';
    } ?>
    </form>



    <table class="table">
        <tr>
        <th>Id</th> 
        <th>Gamintojas</th> 
        <th>Modelis</th> 
        <th>Pagaminimo metai</th> 
        <th>Spalva</th>
        <th>Rida</th>
        <th>Kuras</th>
        </tr>


      <?php $count = 0; foreach ($_SESSION['cars'] as $cars) {  ?>
            <tr>
            <td> <?= ++$count."/".$cars['id']  ?> </td>
                <td> <?= $cars['manufacturer']  ?> </td>
                <td> <?= $cars['model']  ?> </td>
                <td> <?= $cars['year']  ?> </td>
                <td> <?= $cars['colour']  ?> </td>
                <td> <?= $cars['distance']  ?> </td>
                <td> <?= $cars['fuel']  ?> </td>
                <td><a class="btn btn-success" href="?id=<?= $animal['id']  ?>">edit</a></td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?=$Olympics['id']?>"  >
                        <button class="btn btn-danger" type="submit">delete</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
  <button class="btn btn-danger" type="submit">delete</button>
  <button class="btn btn-primary" type="submit">Prideti</button>
  </form>
</body>
</html>