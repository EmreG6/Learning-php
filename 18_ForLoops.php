<?php 

$i=10;
while ($i < 10) {
    echo "<p>$i</p>";
    $i++;
}

for ($i=0; $i < 10; $i++) { 
    echo "<p>$i</p>";
}
?>

<?php 

$colors = array('red' , 'blue', 'green', 'yellow');

for ($i=0 ; $i < sizeof($colors) ; $i++ ) { 
    echo '<p>' . $colors[$i] . '</p>';
}

?>