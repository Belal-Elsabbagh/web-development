<?php

define("ARRAY_ERROR", "NOT AN ARRAY!<br>");

function printTitle()
{
    echo "Webpage Title";
}
function printArray($arr)
{
    if (!is_array($arr)) {
        echo ARRAY_ERROR;
        return;
    }
    foreach ($arr as $i)
        echo $i . " ";
    echo "<br>";
}

function RUN_sortArray()
{
    $arr = array(54, 14, 1, 21);
    echo "Unsorted array: ";
    echo printArray($arr) . "<br>";
    mySortArray($arr, 4);
}

function sortArray($arr)
{
    sort($arr);
    echo "Sorted array: ";
    printArray($arr); echo "<br>";
}

function mySortArray($arr, $size)
{
    if (!is_array($arr)) {
        echo ARRAY_ERROR;
        return;
    }
    for ($i = 0; $i < $size - 1; $i++)
        for ($j = $i + 1; $j < $size; $j++)
            if ($arr[$i] > $arr[$j]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
    echo "Sorted array: "; 
    printArray($arr); 
    echo"\n";
}
function RUN_isPrime()
{
    $n = 27;
    if (isPrime($n) == 1) {
        echo $n . " is a prime number\n";
        return;
    }
    echo $n . " is NOT a prime number\n";
}
function isPrime($num)
{
    if ($num == 0 || $num == 1) {
        return -1;
    }

    for ($i = 2; $i <= $num / 2; ++$i) {
        if ($num % $i == 0) {
            return -1;
        }
    }
    return 1;
}

function RUN_reverseDigits()
{
    $n = 1234;
    echo "<br>".$n . " reversed is: ";
    echo reverseDigits($n);
    echo "<br>";
}

function reverseDigits($num)
{
    return strrev($num);
}
function RUN_majority()
{
    $a = array(1, 2, 3, 4, 5, 5, 5, 5, 5, 5, 6);
    echo "Most frequent element is: ";
    echo majority($a);
    echo "<br>";
}

function majority($arr)
{
    if (!is_array($arr)) {
        echo ARRAY_ERROR;
        return;
    }

    $idx = 0;
    $ctr = 1;
    
    for($i=1; $i<sizeof($arr); $i++)
    {
        if ($arr[$idx] == $arr[$i])
        {
            $ctr += 1;
        }
        else
         {
            $ctr -= 1;
            if ($ctr == 0)
            {
                $idx = $i;
                $ctr = 1;
            }
      }   
    }      
return $arr[$idx];
}

function RUN_lengthOfLastWord()
{
    $s = "This is today's lab";
    echo "The length of last word is: ";
    echo lengthOfLastWord($s);
    echo "<br>";
}

function lengthOfLastWord($s)
{
    if (strlen(trim($s)) == 0)
    {
        return "Blank String";
    }
    
    $words = explode(' ', $s);
    
    if (sizeof($words) >1)
        return strlen(substr($s, strrpos($s, ' ') + 1));
    return "Single word";
}

function RUN_isPower()
{
    $n = 27;
    $m = 3;
    if (isPower($n, $m) == 1) {
        echo $n . "is a power of " . $m;
        echo "<br>";
        return;
    }
    echo $n . " is NOT a power of " . $m;
    echo "<br>";
}

function isPower($num, $base)
{
    for ($i = 0; $i <= $num; $i++) {
        if ($num == $base ** $i)
            return 1;
    }
    return -1;
}

function RUN_calculateAge()
{
    $diff = calculateAge(new DateTime('26.11.2002'));
    echo " Your age: ".$diff->y." years, ".$diff->m." month, ".$diff->d." days\n";
    echo "<br>";
}

function calculateAge($bday)
{
    $today = new Datetime(date('m.d.y'));
    return $today->diff($bday);
}

function RUN_sequence123()
{
    $a = array (6,3,6,7,3,5,1,2,3,5,7,3);
    if (sequence123($a) == 1) {
        echo "Sequence 123 exists in array<br>";
        return;
    }
    echo "Sequence 123 does NOT exist in array<br>";
}

function sequence123($arr)
{
    if (!is_array($arr)) {
        echo ARRAY_ERROR;
        return -1;
    }

    for($i = 0; $i < count($arr); $i++)
        if($arr[$i] == 1 && $arr[$i+1] == 2 && $arr[$i+2] == 3) return 1;
    return -1;
}

function RUN_useless()
{
    echo useless("Java")."<br>";
}

function useless($str)
{
    $newstr = "";
    for($i = 0; $i < 4; $i++)
    {
        $newstr = $newstr.substr($str, 0, 2);
    }
    return $newstr;
}

function RUN_near100()
{
    $n1 = 97;
    $n2 = 102;
    echo near100($n1, $n2)." is nearer to 100<br>";
}

function near100($n1, $n2)
{
    if($n1 == $n2) return 0;
    if(abs($n1 - 100) > abs($n2 - 100)) return $n2;
    return $n1;
}

function RUN_sum30()
{
    $a = 16; $b = 14;
    $res = sum30($a, $b);
    echo "$a + $b = 30: $res<br>"; 
}

function sum30($x, $y)
{
    if($x == 30 || $y == 30) return "true";
    if($x+$y == 30) return "true";
    return "false";
}

function RUN_sumx3()
{
    $a = 2; $b = 2; $res = sumx3($a, $b);
    echo "$a + $b = $res"; 
}

function sumx3($x1, $x2)
{
    if( $x1 == $x2)
        return ($x1 + $x2)*3;
    return $x1 + $x2;
}

function RUN_multTable()
{
    multTable();
    echo "<br>";
}

function RUN_colorlist()
{
    $color = array('white', 'green', 'red');
    colorlist($color);
}

function colorlist($arr)
{
    sort($arr);
    echo "<ul>";
    for($i = 0; $i < count($arr) ; $i++)
        echo "<li> $arr[$i] </li>";
    echo "</ul>";
}

function multTable()
{
    for ($i = 1; $i <= 6; $i++) {
        for ($j = 1; $j <= 6; $j++)
            echo ($i * $j) . "\t";
        echo "<br>";
    }
}

