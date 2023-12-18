

<html>
<head>
<title>PHP Program To count the number of Vowels, Consonants and Whitespaces of a given line of text</title>
</head>
<body>
<form method="post">
<table border="0">
<tr>
<td> <input type="text" name="input" value="" placeholder="Enter input"/> </td>
</tr>
<tr>
<td> <input type="submit" name="submit" value="Submit"/> </td>
</tr>
</table>
</form>
<?php
if(isset($_POST['submit'])) {
$str = $_POST['input'];
$str1 = $str;
echo "Given input :".$str1."\n";
//Counter variable to store the count of vowels and consonant
$vCount = 0;
$cCount = 0;
//Converting entire string to lower case to reduce the comparisons
$str = strtolower($str);
for($i = 0; $i < strlen($str); $i++)
{
//Checks whether a character is a vowel
if( $str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'o' || $str[$i] == 'u')
{
//Increments the vowel counter
$vCount++;
}
//Checks whether a character is a consonant
else if($str[$i] >= 'a' && $str[$i] <= 'z')
{
//Increments the consonant counter
$cCount++;
}
}
substr_count($str, ' ');
echo "Number of vowels : " , $vCount."</br>";
echo "Number of consonants : " , $cCount."</br>";
echo "Number of spaces :" . substr_count($str," ")."</br>";
}
?>
</body>
</html>