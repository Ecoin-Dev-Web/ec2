<?php 

$lib  = [
    ['images/p1.jpg',1500,'product1'],
    ['images/p2.jpg',455,'product2'],
    ['images/p3.jpg',9865,'product3']
];
echo "<pre>";
print_r($lib);
echo "</pre>";

for($i = 0 ;$i<count($lib);$i++){  ?>
  <div class="product">
    <img style="width:50%" src="<?php echo $lib[$i][0];   ?>" alt="">
    <h3>Price : <?php  echo $lib[$i][1];  ?></h3>
    <h4>Product Name : <?php  echo $lib[$i][2];  ?></h4>
  </div>
    
    <?php    }   ?>