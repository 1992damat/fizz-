<?php
echo "Fizz Buzz Cola\n";
$handle = fopen ("php://stdin","r");
echo "F\n";
$a = fgets($handle);
echo "B\n";
$b = fgets($handle);
echo "N\n";
$c = fgets($handle);

for ($i = 1; $i <= $c; $i++)
{
    $output = '';

    if ($i % $a == 0)
    {
        $output .= 'F';
    }

    if ($i % $b == 0)
    {
        $output .= 'B';
    }

    if (!$output)
    {
        $output = $i;
    }

    echo $output . " ";
}