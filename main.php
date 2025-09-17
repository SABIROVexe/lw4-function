<?php
function alphabeticalOrde($str){
$length = count($str);

for($i = 0; $i < $length - 1; $i++){
    for($j = 0; $j < $length - $i - 1; $j++ ){
        if($str[$j] > $str[$j + 1]){
            $temp = $str[$j];
            $str[$j] = $str[$j + 1];
            $str[$j + 1] = $temp;
        }
    }
}
return $str;
}

function perfect_number(){
    while (true) {
    echo ("Введите элемент массива (stop для остановки ввода): ");
    $input = readline(":> ");

    if ($input === 'stop') {
        break; 
    }

 
    if (is_numeric($input)) {
        $array[] = (int)$input; 
    } else {
        echo ("Пожалуйста, введите числовое значение.\n");
    }
}


echo ("Введенные числа: " . implode(", ", $array) . "\n");
echo ("Введите число для поиска делителей: ");
$number = (int)readline(":> ");


if (in_array($number, $array)) {
    
    for ($i = 1; $i < $number; $i++) { 
        if ($number % $i == 0) {
            $arr[] = $i; 
        }
    }

    // Вывод делителей
    echo ("Делители числа $number: ");
    echo implode(" ", $arr) . "\n"; 

    // Вычисление суммы делителей
    for($i = 0; $i < count($arr); $i++){
        $sum += $arr[$i];
    }

    echo "Сумма делителей: " . $sum . "\n";
    if($sum == $number){
        echo ("число является идеальным\n");
    }
    else{
         echo ("число не является идеальным\n");
    }
} 
}


$array = [];
$arr = []; 
$sum = 0; 
$rep;

do{

echo("Меню:\n");
echo("1. Сортировка \n");
echo("2. Идеальное число \n");
echo("3. Поиск \n");
$choice = readline(":> ");

switch ($choice){
    case 1: 
        $str_input = readline("input: ");
        $str = str_split($str_input);

        $sort = alphabeticalOrde($str);
        $output = implode("", $sort); 
        echo ("output: " . $output . "\n");
        
        break;

    case 2:

        perfect_number();
        break;

    case 3: 

        break;
}

echo("Хотите повторить выполнение прграммы?\n");
echo("Y/N\n");
$rep = readline(":> ");

}while($rep == 'Y' || $rep == 'y');

