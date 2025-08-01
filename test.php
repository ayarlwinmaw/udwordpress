<h1>Udemy</h1>
<?php
function greeting($message){
    echo $message . '<br/>';
}
greeting('Hi');
greeting('Hey');

$food = array(
    'Pizza', 'Mohinga', 'Sushi'
);
var_dump($food);
$count = 0;
while($count < count($food)){
    echo $food[$count] . '<br/>';
    $count++;
}

define('NAME', 'Luis');
define('LAST_NAME', 'Lane');
echo NAME;
echo LAST_NAME;
?>