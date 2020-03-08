<?php
for($i = 1; $i <= 100; $i++) {
    if ($i % 15 == 0)
        echo "SunFinance\n";
    if( $i % 3==0) 
        echo "Sun\n" ;
    elseif( $i % 5==0) 
        echo "Finance\n";
    else
        echo $i. "\n";
}
