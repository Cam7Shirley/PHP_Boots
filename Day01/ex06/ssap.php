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

$all_words = array();

?>