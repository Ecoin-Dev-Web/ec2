<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EC</title>
</head>
<body>
<?php

$price = 25000;
$promo  = "CHF25";
// if($promo == "CHF50"){
//      $price = $price - $price * 0.5;
// }else if($promo == "CHF30"){
//     $price = $price - $price * 0.3;
// }else if($promo == "CHF25"){
//     $price = $price - $price * 0.25;
// }



switch($promo){
    case "CHF50":
        $price = $price - $price * 0.5;
        break;
    case "CHF30":
        $price = $price - $price * 0.3;
        break;
    case "CHF25":
        $price = $price - $price * 0.25;
        break;
}



?>

<h1>New Price is <?php echo $price;  ?></h1>




</body>
</html>