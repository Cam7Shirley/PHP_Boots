#!/usr/bin/php
<?PHP

function ft_split($s)
{
    $arr = explode(" ", $s);
    $temp = array();
    foreach($arr as $stuff)
    {
        if (!empty($stuff))
            $temp[] = $stuff;
    }
    return ($temp);
}

$index = 0;
$words = ft_split($argv[$argc - 1]);
foreach($words as $things)
{
    print($words[$index]);
    $index++;
    if (!empty($words[$index]))
        echo " ";
}
echo "\n";

?>