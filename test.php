<?php


$text = file_get_contents("text.txt");

$text = strtolower($text);

$words = str_word_count($text, 1);

$wordCount = array_count_values($words);


$mostRecent = array_search(max($wordCount), $wordCount);
$frequency = $wordCount[$mostRecent];


echo ("Самое частое слово: '$mostRecent' (встречается $frequency раз)");

