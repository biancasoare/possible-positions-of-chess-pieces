<?php

/*
3.  sah
    ganditi-va la o tabla de sah! (este un tabel de 8x8)
    am realizat un script care preia 2 numere (x,y) mai mici decat 8 si:
    1. evidentiaza pozitia pe care se afla plus toate casutele care reprezinta 'bataia unui nebun' aflat in pozitia (x,y)
    2. evidentiaza pozitia pe care se afla plus toate casutele care reprezinta 'bataia unui turn' aflat in pozitia (x,y).
    3. evidentiaza pozitia pe care se afla plus toate casutele care reprezinta 'bataia unei regine' aflata in pozitia (x,y).
    4. evidentiaza pozitia pe care se afla plus toate casutele care reprezinta 'bataia unui rege' aflat in pozitia (x,y).
    5. evidentiaza pozitia pe care se afla plus toate casutele care reprezinta 'bataia unui cal' aflat in pozitia (x,y).
        OBS: functia abs() ne da valoarea absoluta a unui numar: ex. abs(-8) = 8, abs(8) = 8
*/
//dimensiune tabel
$m = 8;

//pozitia in tabel de inceput este (x,y)
$x = 6;
$y = 5;

echo '<br />1.nebun<br />';
$tabel = "<table border=1>";
for ($i=1; $i<=$m; $i++) {
  $tabel .= "<tr>";
  for ($j=1; $j<=$m; $j++) {
    if (abs($x-$i) == abs($y-$j)) {
      $tabel .= "<td style=\"background-color:red\">$i$j</td>";
    } else {
      $tabel .= "<td>0</td>";
    }
  }
  $tabel .= "</tr>";
}
$tabel .= "</table>";

echo $tabel;


echo '<br />2.tura<br />';
$tabel = "<table border=1>";
for ($i=1; $i<=$m; $i++) {
  $tabel .= "<tr>";
  for ($j=1; $j<=$m; $j++) {
    if ($x == $i || $y == $j) {
      $tabel .= "<td style=\"background-color:red\">$i$j</td>";
    } else {
      $tabel .= "<td>0</td>";
    }
  }
  $tabel .= "</tr>";
}
$tabel .= "</table>";

echo $tabel;


echo '<br />3.regina<br />';
$tabel = "<table border=1>";
for ($i=1; $i<=$m; $i++) {
  $tabel .= "<tr>";
  for ($j=1; $j<=$m; $j++) {
    if (abs($x-$i) == abs($y-$j) || ($x == $i || $y == $j)) {
      $tabel .= "<td style=\"background-color:red\">$i$j</td>";
    } else {
      $tabel .= "<td>0</td>";
    }
  }
  $tabel .= "</tr>";
}
$tabel .= "</table>";

echo $tabel;


echo '<br />4.rege<br />';
$tabel = "<table border=1>";
for ($i=1; $i<=$m; $i++) {
  $tabel .= "<tr>";
  for ($j=1; $j<=$m; $j++) {
    //if ((abs($x-$i) == abs($y-$j) || ($x == $i || $y == $j)) && $i<=$y && $i>($m-$x) && $j>=$x && $j<$m)
    if ($i<=($x+1) && $i>=($x-1) && $j>=($y-1) && $j<=($y+1)) {
      $tabel .= "<td style=\"background-color:red\">$i$j</td>";
    } else {
      $tabel .= "<td>0</td>";
    }
  }
  $tabel .= "</tr>";
}
$tabel .= "</table>";

echo $tabel;


echo '<br />5.cal<br />';
$tabel = "<table border=1>";
for ($i=1; $i<=$m; $i++) {
    $tabel .= "<tr>";
    for ($j=1; $j<=$m; $j++) {
        if ((abs($j - $x) == 2 && abs($i - $y) == 1) || ($j == $x && $i == $y) || (abs($j - $x) == 1 && abs($i - $y) == 2)) {
            $tabel .= "<td style=\"background-color:red\">$i$j</td>";
        } else {
            $tabel .= "<td>0</td>";
        }
    }
    $tabel .= "</tr>";
}
$tabel .= "</table>";

echo $tabel;

