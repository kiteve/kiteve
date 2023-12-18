<?php
$data = [ 
    ["key" => "A", "value" => 10], 
    ["key" => "B", "value" => 15], 
    ["key" => "A", "value" => 20], 
    ["key" => "C", "value" => 5], 
    ["key" => "B", "value" => 8] 
];

$sums = []; 
 
foreach ($data as $item) { 
    $key = $item["key"]; 
    $value = $item["value"]; 
 
    if (isset($sums[$key])) { 
        $sums[$key] += $value; 
    } else { 
        $sums[$key] = $value; 
    } 
} 
 
print_r($sums);
?>
