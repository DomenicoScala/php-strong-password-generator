<?php     
    
    session_start();


    require __DIR__.'/function.php';
    
    
    $password= '';
    if(isset($_GET['length'])){
        $passLength = intval($_GET['length']);

        $password = generateRandomPassword($_GET['length']);
    }

    $_SESSION['password']= $password;

    header('Location: ./result.php')
?>