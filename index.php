<?php

function generatePassword() {
    $result = "";
    $lowerCase = "abcdefghijklmnopqrstuvwxyz";
    $upperCase = strtoupper($lowerCase);
    $numChar = "0123456789";
    $specialChar = "!£$%&/()=?^@#,;.:";
    $charNumber = strlen($lowerCase);

    $allowedChar = $lowerCase . $upperCase . $numChar . specialChar;

    for ($i = 0; $i < $length; $i++) {
        $randonNum = rand(0, $charNumber-1);
        $currentChar = $lowerCase[$randonNum];
        $result .= $currentChar;

    }

    return htmlspecialchars($result);
}

$result = "";
if( isset($_GET["pswlen"])) {
    $pswLength = $_GET["pswlen"];
    $result = generatePassword($pswLength);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            
            <div class="col-12">
                <h1 class="my-3">STRONG PASSWORD GENERATOR</h1>
            </div>
            <?php if($result){ ?>
                <div class="col-12">
                    <div class="alert alert-primary" role="alert">
                        <?php echo $result ?>
                    </div>
                </div>
            <?php } ?>
            
            <div class="col-12">
                <form action="index.php" method="get">
                    <label for="pswlength"></label>
                    <input type="number" name="pswlength" id="pswlength" placeholder="Lunghezza password" min=8 max=32>

                    <button type="submit" class="btn btn-primary">Invia</button>
                    <button type="reset" class="btn btn-danger">Pulisci</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
