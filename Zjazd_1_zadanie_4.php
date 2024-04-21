<?php
echo "Program wczytujący plik lorem_ipsum.txt.";
function usunPunktatory($word) {
    $punctuationMarks = ['.', ',', ';', ':', '!', '?', '"'];
    if (in_array(substr($word, 0, 1), $punctuationMarks)) {
        do {
            $word = substr($word, 1);
        } while (in_array(substr($word, 0, 1), $punctuationMarks));
    }
    
    if (in_array(substr($word, -1), $punctuationMarks)) {
        do {
            $word = substr($word, 0, -1);
        } while (in_array(substr($word, -1), $punctuationMarks));
    }
    print_r($word);
    return $word;
}

function utworzTabliceAsocjacyjna($words) {
    $tablicaAsocjacyjna = [];
    foreach ($words as $index => $value) {
        if ($index % 2 == 0) {
            $nextValue = isset($words[$index + 1]) ? $words[$index + 1] : null;
            $tablicaAsocjacyjna[$value] = $nextValue;
        }
    }
    return $tablicaAsocjacyjna;
}

$plik = file_get_contents('lorem_ipsum.txt');
// $plik = "\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\"";

echo "Dzieli plik na słowa i umieszcza w tablicy \"wyrazy\"\n";

$words = explode(' ', $plik);
echo "Usuwa znaki interpunkcyjne z tablicy \"wyrazy\"\n";

for ($i = 0; $i < count($words); $i++) {
    $words[$i] = usunPunktatory($words[$i]);
}
echo "Utworzenie i wydruk tablicy asocjacyjnej\n";
$tablicaAsocjacyjna = utworzTabliceAsocjacyjna($words);

print_r($tablicaAsocjacyjna);