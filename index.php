<?php 


?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php Strong Password</title>

        <!-- Bootstrap CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    </head>
    
    <body>
        <header class="container my-4">
            <h1>Php Strong Password</h1>
        </header>

        <main>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <form method="GET">
                        <div class="mb-3">
                            <label for="length" class="form-label">
                                Lunghezza della password <span class="text-danger">*</span>:
                            </label>

                            <input type="number" class="form-control" id="length" placeholder="Inserisci la lunghezza della password" required>
                        </div>

                        <div class="form-text mb-3">
                            <strong>N.B.:</strong> i campi contrassegnati da <span class="text-danger">*</span> sono obbligatori!
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary mb-3">Invia</button>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>