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


echo("Меню:\n");
echo("1. XXXX \n");
echo("2. XXXX \n");
echo("3. XXXX \n");
$choice = readline(":> ");

switch ($choice){
    case 1: 
        $str_input = readline("input: ");
        $str = str_split($str_input);

        $sort = alphabeticalOrde($str);
        $output = implode("", $sort); 
        echo ("output: " . $output);
        
        break;
    case 2:

        break;
    case 3: 

        break;
}

