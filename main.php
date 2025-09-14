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

        break;
    case 3: 

        break;
}

echo("Хотите повторить выполнение прграммы?\n");
echo("Y/N\n");
$rep = readline(":> ");

}while($rep == 'Y' || $rep == 'y');

