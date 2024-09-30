<?php
$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Blanditiis ad eaque aut esse natus at fugiat omnis! Dolorum, reiciendis cumque ullam eum dolorem temporibus laboriosam? 
    Accusantium labore officiis pariatur adipisci. Accusantium labore officiis pariatur adipisci.";

echo "<p>$loremIpsum</p>";
echo "Panjang karakter : " . strlen($loremIpsum) . "<br>";
echo "Panjang kata : " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";

?>