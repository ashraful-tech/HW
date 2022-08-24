<?php

$students = [
    'cse' => [
        ['name' => 'Himel', 'email' => 'himel@gmail.com', 'result' => '4'],
        ['name' => 'Zarin', 'email' => 'zarin@gmail.com', 'result' => '4'],
        ['name' => 'Dip', 'email' => 'dip@gmail.com', 'result' => '4'],
    ],
    'bba' => [
        ['name' => 'Tamim', 'email' => 'tamim@gmail.com', 'result' => '4'],
        ['name' => 'Kafi', 'email' => 'kafi@gmail.com', 'result' => '3.9'],
    ]
];

echo "<pre>";
//print_r($students);
array_change_key_case($students, CASE_UPPER);
foreach ($students as $dept => $dept_value) {
    echo "<br>";
    echo "Department: ".$dept."<br>";
    echo "Students:";
    
    foreach ($dept_value as $dept_values => $st_values) {
        echo "<br>SL No: ".$dept_values;
        foreach ($st_values as $key => $value) {
            echo ",".$key.": ".$value;
        }
        
    }
}
?>