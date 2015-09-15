<h1>Задание 1</h1>

<?php
//Создайте массив $date с пятью элементами
$lenght = 5;
$date = array();
$i = 0;
while($i < $lenght){
    mt_srand(time());
	$date[$i]=rand(1,time());
	$i++;
}
//print_r($date);

// Вычисляем наименьший день
$day=array();
for($i = 0; $i < $lenght; $i++){
	$day[$i]=date('d', $date[$i]);
}
sort($day);
//print_r($day);
$min=array_shift($day);
    echo 'Наименьший день:' .$min.'<br />';
// Вычисляем наибольший месяц
$month=array();
for($i = 0; $i < $lenght; $i++){
	$month[$i]=date('m', $date[$i]);
}
sort($month);
//print_r($month);
$max=array_pop($month);
    echo 'Наибольший месяц: '.$max.'<br />';

//Отсортируйте массив по возрастанию дат
sort($date);
//print_r($date);
//С помощью функция для работы с массивами извлеките последний элемент массива в новую переменную $selected
$selected = array_pop($date);
print_r($selected);
//C помощью функции date() выведите $selected на экран в формате "дд.мм.ГГ ЧЧ:ММ:СС"
echo '<br />'.date('d.m.Y H:i:s', $selected);

//Выставьте часовой пояс для Нью-Йорка, и сделайте вывод снова, чтобы проверить, что часовой пояс был изменен успешно
date_default_timezone_set('America/New_York');
//Часовой пояс изменен
echo '<br />'.date_default_timezone_get();
?>


<?php 

?>


