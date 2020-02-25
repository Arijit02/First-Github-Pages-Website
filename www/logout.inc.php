<?php
    
        session_start();
        session_unset();
        session_destroy();
    
        header("Location: http://localhost/www/logout.php?logout=successful");    

   
