<?php
$word = "computer";
$vowels = "";
$consonants = "";

for ($i = 0; $i < strlen($word); $i++) {
    $ch = strtolower($word[$i]);
    if (in_array($ch, ['a', 'e', 'i', 'o', 'u'])) {
        $vowels .= $ch . " ";
    } else {
        $consonants .= $ch . " ";
    }
}

echo "Word: " . $word . "<br>";
echo "Vowels: " . $vowels . "<br>";
echo "Consonants: " . $consonants;
?>
