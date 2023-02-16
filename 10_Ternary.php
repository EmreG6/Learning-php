<?php 
$is_logged_in = true;

/*
if ($is_logged_in) {
    $messsage = 'Welcome back!';
} else {
    $messsage = 'Hello there!';
}
*/

# Ternary

$messsage = $is_logged_in ? "Welcome back!" : "Hello there!";
echo    $messsage;

?>


<?php
$is_logged_in = false;
$messsage = "Welcome " . ($is_logged_in ? " back!" : "!");

echo $messsage;

?>

<?php
$is_logged_in = false;
echo "Welcome " . ($is_logged_in ? " back!" : "!");
?>

<?php
$is_logged_in = true;
$name = null;

// echo "Welcome " . ($is_logged_in ? " back!" : "!");

$name = $name ?: 'Joe';
echo $name;

?>