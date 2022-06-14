<?php
require_once __DIR__ . "/Prodotto.php";
require_once __DIR__ . "/Cibo.php";
require_once __DIR__ . "/Utente.php";

$monge = new Cibo("Monge", "50", "cane", "20");
$selex = new Cibo("Selex", "30", "gatto", "15");

$pietro = new Utente("Pietro", "pietro@gmail.com");
$pietro->addProductToCart($monge);

var_dump($pietro);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php echo $monge->printInfo(); ?>
<br>
<?php echo $selex->printInfo(); ?>


</body>
</html>