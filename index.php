<?php

class Main 
{
    public function count()
    {
        echo "Choose a number N : ";
        $handle = fopen ("php://stdin","%d");
        $number = fgets($handle);
        $number = trim((int) $number);

        // Checking the input
        if(empty($number)) {
            echo "N is empty or not a number!\n";
            exit;
        }
        
        // if (!ctype_digit($number)) {
        //     echo "N is not a number!\n";
        //     exit;
        // }
                
        fclose($handle);
        echo "\n";

        for ($i = 1; $i <= $number; $i++) {
            if ($i % 3 == 0 && $i % 5 != 0) {
                echo("TLD\n");
            } elseif($i % 3 != 0 && $i % 5 == 0) {
                echo("VIE\n");
            } elseif($i % 3 == 0 && $i % 5 == 0) {
                echo("TLD_VIE\n");
            } else {
                echo($i . "\n");
            }
        }
    }
}

$obj = new Main;
$obj->count();


?>