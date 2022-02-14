<?php


spl_autoload_register(function($className) {
    include './classes/' . $className . 'php';
});

$fichier1 = file_get_contents('./files/corbeau.txt');

echo "<pre>";
echo $fichier1;
echo "</pre>";

echo "<hr />";

$fichier1 = file('./files/corbeau.txt');
var_dump($fichier1);

echo "<hr />";

$html = "<blockquote>";

    for ($i = 0; $i < count($fichier1); $i++){
        $html .= $fichier1[$i];
        $html .= "<br />";
}

$html .= "</blockquote>";

echo $html;

echo "<hr />"; 

//Affiche le fichier avecmise en forme d'origine (retours chariots remplacés par <br />)
echo nl2br(file_get_contents('./files/corbeau.txt'));

echo "<hr />"; 
 
readfile('./files/corbeau.txt');

echo "<hr />"; 
// Lit un fichier, et le place dans une chaîne

$filename = './files/corbeau.txt';
$handle = fopen($filename, "r");
//filesize renvoie la longueur du fichier
$contents = fread($handle, filesize($filename));
fclose($handle);

var_dump($contents);

$test = new File('./files/corbeau.txt', 'r');
var_dump($test->lecture());

