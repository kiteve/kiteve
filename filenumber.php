<?php
// Replace with your full name
$fullName = "YOUR FULL NAME";

// Create a folder with your full name
if (!file_exists($fullName) && !is_dir($fullName)) {
    mkdir($fullName);
    echo "Folder '$fullName' created successfully.<br>";

    // Create a file named "fileNUMBER" inside the folder
    $folderPath = "./$fullName";
    $fileNumber = 1;
    $fileName = "file" . $fileNumber;

    while (file_exists($folderPath . '/' . $fileName)) {
        $fileNumber++;
        $fileName = "file" . $fileNumber;
    }

    $filePath = $folderPath . '/' . $fileName;

    // List of numbers to be saved
    $numbers = "12, 23, 45, 4, 21, 78, 25, 12, 25, 90, 9";

    // Save the numbers to the file
    file_put_contents($filePath, $numbers);
    echo "File '$fileName' created inside folder '$fullName' with the numbers.<br>";

    // Read the file and count number frequencies
    $fileContent = file_get_contents($filePath);
    $numberArray = array_map('trim', explode(',', $fileContent));
    $numberCounts = array_count_values($numberArray);

    echo "Number frequencies in '$fileName':<br>";
    foreach ($numberCounts as $number => $count) {
        echo "$number: $count times<br>";
    }
} else {
    echo "Folder '$fullName' already exists.<br>";
}
?>