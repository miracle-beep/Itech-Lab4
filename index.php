<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML+PHP</title>
</head>

<body>
	<?php
	function generateRandomArray() {
    $array = [];
	$count = 0;
    for ($i = 0; $i < 10; $i++) {
        $array[] = rand(1, 50);
    }
    return $array;
}
	function customReverseArray($array) {
    $reversedArray = [];
    foreach ($array as $element) {
        array_unshift($reversedArray, $element);
    }
    return $reversedArray;
}
	function removeByValue($array, $value){
		$temp = array_filter($testarray, function($val) {
		return $val != $value;
})
		
	}
	$testarray = [3,5,10,20,13];
	$array1 = generateRandomArray();
	$array2 = generateRandomArray();
	$tmparray = [];
	echo "Масив 1: " . implode(', ', $array1) . "<br>";
	echo "Масив 2: " . implode(', ', $array2) . "<br>";
	
	foreach ($array1 as $elem) {
		if (in_array($elem, $array2)){
		echo "rep " . $elem . "<br>";
		$count++;
		$tmparray[] = $elem;
	}
    else{
		continue;
	}
    }
	echo "Масив повторень: " . implode(', ', $tmparray) . "<br>";
	if($count == 0){
		echo "Немає повторюваних елементів " . "<br><br>";
		echo "Нічого видаляти.". "<br><br>";
	} 	else{
		echo "К-ть повторюваних елементів " . $count . "<br><br>";
		foreach($tmparray as $rep_em){
		echo "Масив 1 (без повторень): " . implode(', ', removeByValue($array1, $rep_em)) . "<br>";
		echo "Масив 2 (без повторень): " . implode(', ', removeByValue($array2, $rep_em)) . "<br>";
		}
	}
	echo "Масив до развороту: " . implode(', ', $testarray) . "<br>";
	echo "Масив після развороту: " . implode(', ', customReverseArray($testarray)) . "<br>";
	echo "Масив після видалення конкретного числа: " . implode(', ', removeByValue($testarray, 13)) . "<br>";
    ?>
</body>

</html>