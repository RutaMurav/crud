<?php


function init()
{
    session_start();
    if( !isset( $_SESSION['cars'])  ){
        $_SESSION['cars'] = [];
        $_SESSION['id'] = 1;
    }
}

if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['id'])){
    foreach($_SESSION['olympics'] as $entry) {
        if($entry['id'] == $_GET['id']){
            $athlet = $entry;
            break;
        }
    }
}

function edit(){
    foreach ($_SESSION['cars'] as $entry) {
        if($entry['id'] == $_GET['id']){
           return $entry;
        }
     }
}
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $cars['id'] = $_SESSION['id'];
    $cars['manufaturer'] = $_POST['manufacturer'];
    $cars['model'] = $_POST['model'];
    $cars['year'] = $_POST['year'];
    $cars['colour'] = $_POST['colour'];
    $cars['distance'] = $_POST['distance'];
    $cars['fuel'] = $_POST['fuel'];

    $_SESSION['id']++;
}

function store(){
    $cars = [];
    $cars['id'] = $_SESSION['id'];
    $cars['manufaturer'] = $_POST['manufacturer'];
    $cars['model'] = $_POST['model'];
    $cars['year'] = $_POST['year'];
    $cars['colour'] = $_POST['colour'];
    $cars['distance'] = $_POST['distance'];
    $cars['fuel'] = $_POST['fuel'];
    
    $_SESSION['id']++;
}

function destroy(){
    foreach ($_SESSION['athlete'] as $key => $cars) {
        if($cars['id'] == $_POST['id']){
         unset($_SESSION['athlete'][$key]);
         return;
        }
    }
}

function update(){
    foreach ($_SESSION['Masinos'] as &$cars) {
        if($olympics['id'] == $_POST['id']){
        $cars['id'] = $_SESSION['id'];
    $cars['manufaturer'] = $_POST['manufacturer'];
    $cars['model'] = $_POST['model'];
    $cars['year'] = $_POST['year'];
    $cars['colour'] = $_POST['colour'];
    $cars['distance'] = $_POST['distance'];
    $cars['fuel'] = $_POST['fuel'];
            return;
        }  
    }
}


?>