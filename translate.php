<?php
if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["string"]) && isset($_POST["lang"])){
const TRANSLATIONS = [
"Hello!" => "Olá!",
"Welcome!" => "Bem-vindo(a)!"
];
function translate(String $string, String $lang){
$translated = "";
if($lang === "eng"){
$translated = array_flip(TRANSLATIONS);
$translated = $translated[$string];
} else {
$translated = TRANSLATIONS[$string];
}
return $translated;
}
function sendMessage(Array $message){
echo "'" . $message[0] . "' traduzido para '" .  translate($message[0], $message[1]) . "'.";
}
sendMessage(
[$_POST["string"], $_POST["lang"]]
);
}
?>