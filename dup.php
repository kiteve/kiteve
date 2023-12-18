<?php
$array = [1, 2, 5, 6, 7, 1, 7, 9, 0, 2, 9, 6];
$sum=0;
$seen=[];

foreach($array as $element)
{
	var_dump($element);
	if (array_key_exists($element, $seen)) {
        $seen[$element]++;
        if ($seen[$element] == 2) {
            $sum += $element;
        }
    } else {
        $seen[$element] = 1;
    }
}
print_r($seen);

echo "Sum of duplicated elements: " . $sum . "\n";