<?php

class Coffee {

    var $coffee_name;
    var $roast;
    var $costperpound;
    var $amountinpounds;

    function total_cost() {
        $total_cost = $this->amountinpounds * $this->costperpound;
        return "The total cost is $$total_cost";
    }

    function display_order() {
        return "You ordered $this->amountinpounds pounds of $this->coffee_name. 
        It is a $this->roast roast.";
    }
}

$myfirstorder = new Coffee;

$myfirstorder->coffee_name = 'Suplicar Clemencia';
$myfirstorder->amountinpounds = '5';
$myfirstorder->costperpound = '11.95';
$myfirstorder->roast = 'dark';

$mysecondorder = new Coffee;

$mysecondorder->coffee_name = 'Summer Seasonal – Colombia Tolima';
$mysecondorder->amountinpounds = '3';
$mysecondorder->costperpound = '13.95';
$mysecondorder->roast = 'light';

echo $myfirstorder->display_order();
echo "<br>";
echo $myfirstorder->total_cost(); 

echo "<p>";
echo "------------------------------------------------------------------------------------------";
echo "</p>";

echo $mysecondorder->display_order();
echo "<br>";
echo $mysecondorder->total_cost(); 
?>