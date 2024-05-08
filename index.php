<?php

require_once __DIR__ . '/utilities.php';

$email = $_POST['email'] ?? null;

if ($email !== null) {
    var_dump(validate($email));
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Newsletter</title>
</head>

<body>
    <main>
        <section class="py5">
            <div class="container">
                <h2>Iscrizione News letter</h2>
                <form action="" method="POST">
                    <p>
                        <input required type="text" placeholder="Email address" class="form-control" name="email">

                    </p>
                    <input type="submit" class="btn btn-primary" value="iscriviti">

                    <?php
                    if ($email !== null) {
                    ?>
                        <div class="mt-5">
                            <?php
                            if (validate($email)) {
                            ?>

                                <div class="alert alert-success" role="alert">
                                    Iscrizione avvenuta con successo
                                </div>
                            <?php
                            } else {
                            ?>
                                <div class="alert alert-danger" role="alert">
                                    La mail non è valida
                                </div>
                        <?php
                            }
                        }
                        ?>






                </form>
            </div>
        </section>
    </main>
</body>

</html>