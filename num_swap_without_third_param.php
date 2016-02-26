<?php

echo "<BR> How to swap two numbers without using a temporary variable in PHP? ";

function swap_me()
{
    $x = 25;
    $y = 14;

    echo "<br>Before Swapping: x = ".$x.", y = ".$y;

    // Code to swap "$x" and "$y"
    $x = $x + $y;  // $x now becomes 39
    $y = $x - $y;  // $y becomes 25
    $x = $x - $y;  // $x becomes 14

    echo "<BR>After Swapping: x = ".$x.", y = ".$y;
}

// call the function
swap_me();


function swap_me1()
{
    $x = 25;
    $y = 14;

    echo "<br>Before Swapping: x = ".$x.", y = ".$y;

    // Code to swap "$x" and "$y"
    $x = $x * $y;  // x now becomes 350
    $y = $x / $y;  // y becomes 25
    $x = $x / $y;  // x becomes 14

    echo "<BR>After Swapping: x = ".$x.", y = ".$y;
}

// call the function
swap_me1();


function swap_me2()
{
    $x = 25;
    $y = 14;

    echo "<br>Before Swapping: x = ".$x.", y = ".$y;

    // Code to swap 'x' (11001) and 'y' (1110)
    $x = $x ^ $y;  // x now becomes 15 (100111)
    $y = $x ^ $y;  // y becomes 10 (11001)
    $x = $x ^ $y;  // x becomes 5 (1110)

    echo "<BR>After Swapping: x = ".$x.", y = ".$y;
}

// call the function
swap_me2();
?>