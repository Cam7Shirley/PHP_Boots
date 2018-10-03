#!/usr/bin/php
<?PHP

$num = 0;
$total = 0;

while($num < 100)
{
    print("X");
    $num++;
    $total++;
    if ($num == 100 && $total < 1000)
    {
        $num = 0;
        print("\n");
    }
}
print("\n");

?>