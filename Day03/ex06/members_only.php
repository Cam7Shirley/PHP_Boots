<?PHP

header("Content-type: text/plain");
$str = file_get_contents("../img/42.png");
if ($_SERVER['PHP_AUTH_USER'] == "zaz" && $_SERVER['PHP_AUTH_PW'] == "jaimelespetitsponeys")
{
    $encoded = base64_encode($str);
    echo $encoded;
}
else
{
    
}

?>