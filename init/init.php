<?php 
    include 'config.php';
    $BASE_URL='http://localhost/mvcdam2';
    
    $action=$_GET['action']??"";
    if($action=='') include 'views/home/home.php';
    else{
        $notfound=false;
        include 'controllers/controller.php';
        if($notfound) include 'views/404.php';
    }
?>