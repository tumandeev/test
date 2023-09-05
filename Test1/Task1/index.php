<?php
//task - 1

$studentsCount = rand(1, 1000000);
$studentsCount = 1173;
$declinationWordStudent = "Студент|Студента|Студентов";

$declinationWordStudentArray = explode('|', $declinationWordStudent);

$lastSymbol = substr($studentsCount, -2);

if($lastSymbol > 19){
    $lastSymbol = substr($studentsCount, -1);
}

if($lastSymbol == 0 || $lastSymbol > 4){
    $word = $declinationWordStudentArray[2];
}elseif ($lastSymbol == 1){
    $word = $declinationWordStudentArray[0];
}else{
    $word = $declinationWordStudentArray[1];
}

print_r($studentsCount);
echo " - ";
print_r($word);