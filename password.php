<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <title>PHP Strong Password Generator - Result</title>
    </head>
    <body>
        <main class="py-5">
            <div class="container text-center">
                <h2 class="mb-5">
                    Ecco la tua password
                </h2>
                <div class="row justify-content-center">
                    <div class="col-6 p-3 text-center border border-info rounded-3 bg-info bg-opacity-50">
                        <h5>
                            <?php echo $_SESSION['password'] ?>
                        </h5>
                    </div>
                </div>
            </div>
        </main>

    </body>
</html>