<?php
/*****************************************/
/********** Conditions Simples ***********/
/*****************************************/
### Exemple ###//
echo "CONDITIONS SIMPLES <br><br>";

$animal = "Chat";
// La condition doit répondre à la question:
echo "1.Est-ce un chat : ";

if($animal == "Chat") {
  //condition vraie
  echo "Oui";
}
else {
  //condition fausse
  echo "Non";
}
echo "<br><br>";


/*###############################################*/
/*################# ACTIVITÉS ###################*/
/*###############################################*/
// Écrire la condition qui affiche "Non" quand $chat vaut "Chien" et affiche "Oui" quand $chat vaut "Chat" ###//


echo "2.Est-ce un chat : ";

$animal = "Chat";
$chien = "Chien";
// TODO mettre votre code ici

if ($animal === "Chien"){
    echo  "Oui";
}
elseif ($chat = "chat")
    echo "oui";
else {
    echo "Non";
}
echo "<br><br>";

//----------------------------------------
// Écrire la condition qui affiche "Oui" quand $chat vaut true et affiche "Non" dans le cas contraire ###//
$chat = true;
echo "3.Est-ce un chat : ";

// TODO mettre votre code ici
if($chat === false){
    echo "Oui";
}
elseif ($chat === true){
    echo "Chat n est pas strictement egal false ";
}
elseif ($chat === false){
    echo "Non";
}

echo "<br><br>";


