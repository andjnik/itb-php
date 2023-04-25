<?php

    $pol = 'z';
    $godine = 24;

    if ($pol == 'm' )
    {
        if ($godine >= 18)
        {
            echo "<p>Musko, punoletno</p>";
        }
        else
        {
            echo "<p>Musko, maloletno</p>";
        }
    }
    else
    {
        if ($godine >=18)
        {
            echo "<p>Zensko, punoletno</p>";
        }
        else
        {
            echo "<p>Zensko, punoletno</p>";
        }
    }

    if ($pol  == 'm' && $godine >= 18)
    {
        echo "<p>Musko, punoletno</p>";
    }
    elseif ($pol == 'm' && $godine < 18)
    {
        echo "<p>Musko, maloletno</p>";
    }
    elseif ($pol == 'z' && $godine >= 18)
    {
        echo "<p>Zensko, punoletno</p>";
    }
    else
    {
        echo "<p>Zensko, maloletno</p>";
    }

    // Zadatak 13
    $n = 13;
    if(!($n % 2 == 0))
    {
        echo "<p>$n je neparan</p>";
    }

    // Zadatak 17, ponovo
    $a = 5;
    $b = 9;
    $c = -3;
?>