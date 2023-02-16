<?php 

$a = 5;
// this will be 6
echo 'The value of $a is ' . ++$a . '<br/>';

// this will still be 6
echo 'Now $a is ' . $a . '<br/';

// exit();

$a = 5;
// this will still be 5
echo 'The value of $a is ' . $a++ . '<br/>';

// this will be 6
echo 'Now $a is ' . $a . '<br/';

?>

<?php 

$a = 5;
// this will be 6
echo 'The value of $a is ' . --$a . '<br/>';

// this will still be 6
echo 'Now $a is ' . $a . '<br/';

// exit();

$a = 5;
// this will still be 5
echo 'The value of $a is ' . $a-- . '<br/>';

// this will be 6
echo 'Now $a is ' . $a . '<br/';

?>

<?php 
$a = 'A';
echo '$a is ' . ++$a . '<br/>';

$a = 1;

$a *= 5; // you can use / before =

echo $a;
?>