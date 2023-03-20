<?php 
    session_name('myApp');
    session_start([
        'cookie_lifetime'=>60
    ]);
   
    // $_SESSION['counter'] = $_SESSION['counter'] ?? 0;
    // $_SESSION['counter']++;
    $_SESSION['name'] = 'Shovan';
    echo $_SESSION['name'];
    // session_destroy();