<?php
require_once ("functions.php");
$message="";
$nbrephrases=0;
$tab=[];//permet de sauvegarder tous les phrases saisis
$error=[];//permet de sauvegarder les erreurs 
if(isset ($_POST['valider'])){
$nbrephrases=$_POST['phrase'];
if(is_empty($nbrephrases)){
    $message="texte obligatoire";
}
else{
    if(is_chaine_numeric($nbrephrases)){
        $message="veiller saisir des phrases";
        $nbrephrases=0;
    }
    else{
        if(is_chaine_setence($nbrephrases)){
//test
            $message="valider";
        }
        else{
            $message="non valide";
        }
    }
}


}
if(isset($_POST['ok'])){
    $phrases=$_POST['phrases'];
   if(is_empty($phrases)){
       $message="texte obligatoire";
   }
    else{
        if (is_chaine_numeric($phrases)){
                $messages="saisir des phrases svp";
            }
    }
    else{
        if (is_chaine_setence($nbrephrases)){
            if
        }
        }
    }
}


?>
<!DOCTYPE html> 
    <html lang="en">
    <head>
        <link rel="stylesheet" href="">
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>
<form method="post">
<label for="m">Ecriver une  phrases</label> <br> <br>
<input type="text" name="phrase">
<p style='color:red;'><?= $message ?> </p>
<input type="submit" value="valider" name="valider"><br> <br>
<label for="text">saisissez un texte </label><br> <br>
<textarea name="phrases" id="phrases" cols="30" rows="10"></textarea>
<p style='color:green;'><?= $message ?> </p>
<input type="submit" value="resultat" name="ok">

    
</form>