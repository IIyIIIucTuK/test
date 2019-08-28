<?php
require_once 'Rectangle.php';
require_once 'Circle.php';
require_once 'Triangle.php';

//генерация рандомных объектов
for ($i = 0; $i < 3; $i++) {
    switch ($i) {
        case 0:
            ${'var'.$i} = new rectangle(mt_rand(1, 10), mt_rand(2, 20));
            $arr['rect'] = ${'var'.$i};
            break;
        case 1:
            ${'var'.$i} = new triangle(mt_rand(5, 10), mt_rand(5, 10), mt_rand(5, 10));
            $arr['tria'] = ${'var'.$i};
            break;
        case 2:
            ${'var'.$i} = new circle(mt_rand(1, 10));
            $arr['circle'] = ${'var'.$i};
            break;
    }
}
//запись в файл
$json = json_encode($arr, JSON_FORCE_OBJECT);

file_put_contents("config.json", $json);

//чтение из файла
$file = json_decode(file_get_contents("config.json"));


foreach ($arr as $res) {
    $rectangle = $arr['rect'];
    $circle = $arr['circle'];
    $triangle = $arr['tria'];
}

$count = count($arr);
$final = [];
//подсчет площади и запись в массив
for($i = 0; $i < $count; $i++) {
    switch ($i) {
        case 0:
            $rsquare = new rectangle($rectangle->a, $rectangle->b);
            $final[] = $rsquare->getSquare();
            break;
        case 1:
            $csquare = new circle($circle->radius);
            $final[] = $csquare->getSquare();
            break;
        case 2:
            $tsquare = new triangle($triangle->a, $triangle->b, $triangle->c);
            $final[] = $tsquare->getSquare();
            break;
    }
}
//сортировка
rsort($final, SORT_NUMERIC);
echo "<pre>";
//вывод на экран
print_r($final);
echo "</pre>";

