<?php
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
["Hello!", "pt-br"]
);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Tradutor</title>
</head>
<body>
<h1>...</h1>
</body>
</html>