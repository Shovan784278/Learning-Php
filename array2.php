<?php


// String to Array(use explode), Array to String(use join), Multiple Delimiters,,

//delimeter array 

    $vegitables = explode(', ','brookley, tomato, carrot');

    // print_r($vegitables);

    // echo $vegitables[0];


    //Array to String

    $vegitableString = join(', ',$vegitables);
    echo $vegitableString;

    echo "\n";
    echo count($vegitables); //for count array

    echo "\n";

//if another value comes in the array with space or not then we will use regular expression function ( preg_split )..for example

    $vegitables = preg_split('/(, |,)/','brookley, tomato, carrot,potato, brinjal');
    print_r($vegitables);

    echo "\n";

    echo "Here is the multidimesional array starts";

    echo "\n";

//Nested Array OR Multi-dimensional Array

    $food = [

        $vegitables = explode(', ','Brookley, Tomato, Potato, Ginjer'),
        $fruits = explode(', ','Orange, Apple, Strawberry'),
        $drinks = explode(', ','Milk, Water')

    ];

    print_r($food);

    echo "\n";

    //multidimensional Array example

    $example = [

        'example1' => [

            'example2' => [

                'a',
                'b',
                'c',
                'd'

            ]

            ],

    ];

    echo $example['example1']['example2'][2];

    echo "\n";

    // This is serialized and unserialized data -- Example with Json as well.

    $student = array(

        'fname' => 'Shovan',
        'lname' => 'Nag',
        'Age'   => 32,
        'gender'=> 'male'
    );

    $serialized = serialize($student);

    $unserialized = unserialize($serialized);

    print_r($unserialized);

    echo "Here is the json using bellow";
    echo "\n";
    $jsondata = json_encode($student); //we can call array by json_encode() function
    //echo $jsondata;
    print_r($student); //output

