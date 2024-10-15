<?php
$students = [];
$cars = [];
$students[] = [
    'firstname' => 'Natalia',
    'lastname' => 'Kaminski',
    'isStudent' => true,
    'grades' => [
        'php' => 5,
        'javascript' => 3,
        'ajax' => 3
    ]
];
$students[] = [
    'firstname' => 'Jerzy',
    'lastname' => 'Kaplica',
    'isStudent' => false,
];
$students[] = [
    'firstname' => 'Bartosz',
    'lastname' => 'Krwaczyk',
    'isStudent' => true,
    'grades' => [
        'php' => 3,
        'javascript' => 3,
        'ajax' => 2
    ]
];
$cars[] = [
    'speed' => 'szybkie',
    'marka' => 'BMW',
    'cena' => 10000,
];
$cars[] = [
    'speed' => 'calkiem calkiem',
    'marka' => 'Skoda',
    'cena' => 3000,
];
foreach ($students as $whatever => $student) {
    echo "$student[firstname] $student[lastname]";
    if($student['isStudent']) {
        echo ", jest studentem/studentką i ma następujące oceny: <br>";
        foreach ($student['grades'] as $subject => $grade) {
            echo "  $subject: $grade ";
            switch ($grade) {
                case 2:
                    echo "<span style='color:red;'>Nie zaliczono</span>";
                    break;
                case 3 || 4 || 5:
                    echo "<span style='color:green;'>Zaliczono</span>";
                    break;
                    default:
                        break;
            }
            echo "<br>";
        }
    } else {
        echo ", nie jest studentem/studentką.";
    }
    echo "<br>";
}

foreach ($cars as $car) {
    echo "$car[marka] kosztuje: $car[cena], a jezeli chodzi o predkosc to jest: $car[speed]<br>";
    echo "<br>";
}

foreach ($cars as $car) {
    if ($car['cena'] > 5000) {
        echo "$car[marka] to luksusowe auto";
        echo "<br>";
    }
    else {
        echo "$car[marka] to zwyczajne auto";
        echo "<br>";
    }
}