<?php require_once('vendor/autoload.php');$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);$dotenv->load();

echo "hello world";
$a = array('Aryan', 123, 'a');
for ($i = 0; $i < count($a); $i++) {
    echo "\n arraay is " . $a[$i];
}
echo " \n Associative arrays \n";
$as = array('A' => 1, 'B' => 2, 'C' => 3);
foreach ($as as $key => $value) {
    echo "<br> key: " . $key . " value: " . $value;
}
