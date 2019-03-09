<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


//Inside myfirstprogram.php

function sum($x, $y) 
{
    $z = $x + $y;
    return $z;
}

function multiplicationTable($m, $n)
{
    echo "<b>";
    echo "<table>";
    
    for ($i = 1; $i <= $m; $i++)
    {
        echo "<tr>";
        for ($j = 1; $j <= $n; $j++ )
        {
            echo "<td>".$i * $j."</td>";
        }
        echo "</tr>";
    }

}

echo multiplicationTable(100,100);
?>