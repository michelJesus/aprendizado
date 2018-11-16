<?php

for ($i = 0; $i <= 10; $i++) {
    echo $i . "<br>";
}

$frutas = [
    'Banana',
    'Maçã',
    'Laranja',
    'Melância',
    'Pêra'
];

for ($i = 0; $i < count($frutas); $i++) {
    echo $frutas[$i] . '<br>';
}