<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="my-3">STRONG PASSWORD GENERATOR</h1>
            </div>
            <div class="col-12">
                <form action="index.php" method="get">
                    <label for="pdwlength"></label>
                    <input type="number" name="pdwlength" placeholder="Lunghezza password">

                    <button type="submit" class="btn btn-primary">Invia</button>
                    <button type="reset" class="btn btn-danger">Pulisci</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
