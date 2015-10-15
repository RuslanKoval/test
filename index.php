<p>Числа фибоначи</p>
<?php
function fibonacci($n)
{
    if ($n < 3) {
        return 1; 
    }
    else {
        return fibonacci($n-1) + fibonacci($n-2);
    }
}

for ($n = 1; $n <= 16; $n++) {
    echo(fibonacci($n) . ", ");
}
echo("...\n")
?>

<p>Факториал</p>

<?php
function factorial($n)
{
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

for ($n = 0; $n <= 16; $n++) {
    echo($n . "! = " . factorial($n) . "\n");
}
echo("...\n")
?>
