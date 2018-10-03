<?PHP

function ft_split($a)
{
    $my_arr = explode(" ", $a);
    sort($my_arr);
    $fact = array();
    foreach ($my_arr as $key)
    {
        if (!empty($key))
            $fact[] = $key;
    }
    return ($fact);
}

?>