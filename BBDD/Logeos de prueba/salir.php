<?php

    session_start();
    
    unset($_SESSION['usuario']);
    
    if(!isset($_SESSION['usuario'])){
        header('Location: index.php');
    }
