<?php
// A single "if" always goes first
// The forst condition to evaluate as true will be the one that runs, the rest will be ignored
// The else statement always goes last -- it serves as a catchcall if none of the conditions are true

$a = 4;
$b = 4;

if($a > $b ){
    echo '$a is greater than $b';
} else if ($b > $a ){
    echo '$b is greater than $a';
} else {
    echo '$a and $b appear to be equal';
}
?>


<?php

if (10<1) {
    echo '<p> we stopped at if</p>';
} elseif (10<4) {
    echo '<p> we stopped at the first else if</p>';
} elseif (10 < 11) {
    echo '<p> we stopped at the second else if</p>';
} elseif (10<20) {
    echo '<p> we stopped at the third else if</p>';
} else {
    echo '<p> None of the conditions are true, we never stopped, so this is the else</p>';
}


#   Yoda Conditionals

#   Good
# if (10 == $i) { /* do sth */ }

#   Bad
# if ($i == 10) { /* do sth */ }
?>

