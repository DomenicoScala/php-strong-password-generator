<?php     
    
    require __DIR__.'/function.php';
    
    
    $password= '';
    if(isset($_GET['length'])){
        $passLength = intval($_GET['length']);

        $password = generateRandomPassword($_GET['length']);
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Password Generator</title>

        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

        <!-- CSS -->
        <link rel="stylesheet" href="./css/style.css">


    </head>
    <body>
        
        <header>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="text-center my-5">
                            PASSWORD GENERATOR
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <form class="row" action="" method="GET">
                            <div class="mb-3">
                                <label for="inputPassword2" class="visually-hidden">
                                    Lunghezza Password
                                </label>

                                <input type="number" 
                                    name="length" 
                                    class="form-control" 
                                    id="inputPassword2" 
                                    placeholder="Inserisci la lunghezza della password"
                                    required
                                    min="3">
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-primary mb-3">INVIA</button>
                            </div>
                        </form>
                    </div>
                </div>

                <?php
                    if(strlen($password)> 0){
                ?>
                    <div class="row">   
                        <div class="col">
                            <h2>
                                LA PASSWORD GENERATA E':
                                <strong>
                                    <?php 
                                        echo $password
                                    ?>
                                </strong>
                            </h2>
                        </div>
                    </div>
                <?php
                    }
                ?>    
            </div>
        </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>        
    </body>
</html>