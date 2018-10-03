#!/usr/bin/php
<?PHP

$input;

print("Enter a number: ");
while (1)
{
    $input = fgets(STDIN);
    $temp = $input;
    $input = trim($input);
    if ($temp == NULL)
    {
        echo "^D\n";
        break ;
    }
    else
    {
        if (is_numeric($input))
        {
            if ($input % 2 == 0)
                print("The number $input is even.\n");
            else
                print("The number $input is odd.\n");
        }
        else
            print("'$input' is not a number.\n");
    }
    print("Enter a number: ");
}

?>