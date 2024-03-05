<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
   <div class="container">
    <div class="header">
        Header
    </div>
    <div class="main">
        <?php   

        $list = ["image/p1.jpg","image/p2.jpg","image/p3.jpg","image/p4.jpg"];
        $i = 1;
        while($i<=4){
           ?>
        <div class="product bg1">
            <?php  echo $list[$i-1] ; $i++; ?>
        </div>
        <?php   }   ?>

        
    </div>
   </div>



   <?php
$i = 1;
while($i<=4){
    echo "<h3> Ecoin $i</h3>";
    $i++;
}
?>
</body>
</html>