<?php

    // $name = 'Samiksha';
    // echo "Hellooooo , $name";

    // $greeting = "Hello world";


    // $names = [
    //     'Jeff',
    //     'John',
    //     'Jane',
    // ];

    // foreach($names as $name){
    //     echo $name . ',';
    // }

    $person = [
        'age' => 31,
        'hair' => 'brown',
        'career' => 'web dev'
    ];

    $person['name'] = 'Jeffery';
    // echo '<pre>';
    //    var_dump($person);
    // echo '</pre>';


    unset($person['age']);

    //die -> statement written after this does not execute


    require "in.view.php";

?>
