<?php 
// Unlike if statements, they dont terminate upon finding a true statement
// Break statements are absolutely crucial
// Default serves as the catchcall
// You can group cases together

$total = 10;

switch ( $total ) {

    case 1:
        echo '$total is 1. ';
        break;

    case 2:
        echo 'total is 2. ';
        break;
    
    default:
        echo '$total is more than 2.';
}


$turtle     = 'Leo';
$bandana    = '';

switch ($turtle) {
    case 'Leo':
        $bandana = 'blue';
        break;

    case 'Raph':
        $bandana = 'red';
        break;

    case 'Mike':
        $bandana = 'orange';
        break;

    case 'Don':
        $bandana = 'purple';
        break;
}

echo "<p> $bandana </p>";


$turtle     = 'Don';
$bandana = match($turtle){

    'Leo'   => 'blue',
    'Raph'  => 'red',
    'Mike'  => 'orange',
    'Don'   => 'purple',
    default => 'red',

};

echo "<p> $bandana </p>";

?>