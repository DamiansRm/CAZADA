<?php
    session_start();
    
    echo "<a href='salir.php'>SALIR</a>";
    
    echo '<br><br><br>';
    foreach ($_SESSION['usuario'] as $i => $u){
        echo "$i: $u<br>";
    }

