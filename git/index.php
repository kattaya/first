<?php
echo 'hello';

echo '00';
echo '0';

$pricelist= array(
    0=> array(
      'name'=>'hamburger', 'price'=>4.95, 'quantity'=>0
    ),
    1=> array(
      'name'=>'coctail', 'price'=>1.95, 'quantity'=>0
    ),
    2=> array(
      'name'=>'coka-cola', 'price'=>0.85, 'quantity'=>0
    ),
    3=> array(
      'name'=>'salad', 'price'=>7.90, 'quantity'=>0
    ),
);

print_r($pricelist);
$pricelist[0]['quantity']=2;
$pricelist[1]['quantity']=1;
$pricelist[2]['quantity']=1;
print_r($pricelist);
$summ=0;
$tax=0;
define("TAX", 0.075);
define("TIPS", 0.16);
$tips=0;
$total=0;
for ($i=0; $i<count($pricelist); $i++) {
     $summ+=$pricelist[$i]['price']*$pricelist[$i]['quantity'];
     $tax=round($summ*TAX, 2);
     $tips=round(($summ+$tax)*TIPS, 2);
     $total=$summ+$tax+$tips;
}

echo "<br>";
echo "Order: ".$summ.'$';
echo "<br>";
echo "Tax: ".$tax.'$';
echo "<br>";
echo "Tips: ".$tips.'$';
echo "<br>";
echo "Total summ: ".$total.'$';

list ($pricelist[4])= array(
    'name'=>'meat', 'price'=>17.90, 'quantity'=>0
);
print_r($pricelist);
echo "<br>";
echo "Order: ".$summ.'$';
echo "<br>";
echo "Tax: ".$tax.'$';
echo "<br>";
echo "Tips: ".$tips.'$';
echo "<br>";
echo "Total summ: ".$total.'$';
