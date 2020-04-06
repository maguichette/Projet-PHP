<?php
    require_once'functions.php';
    $sentenc='';
    $erreur = "";
    $phrase=[];
    if (isset($_POST['envoyer'])) {
        $ph=$_POST['phrase'];
        if (is_empty($sentenc)) {
            $erreur = 'Veuillez saisir une phrase svp!';
        }else {
            $sentenc = preg_replace('/\.\s+/','.',$sentenc);
            $phrase = is_cut_sentence($sentenc);
            for($i=0; $i<long_chaine($phrase) ;$i++) {
                if (is_chaine_setence($phrase[$i])) {
                    if (long_chaine($phrase[$i])<=200) {
                        $phrase[$i] = is_space_sentence($phrase[$i]);
                    }
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mon.css">
        <title>Exercice 4</title>
    </head>
    <body>
        <div class="style">
            <form method="post">
                <Label>Saisir</Label>
                <textarea name="phrase"><?=$sentenc?></textarea>
                <input type="submit" name="envoyer" value="Envoyer">  
                <?php if (isset($_POST['envoyer'])) { ?>
                <span><?= $erreur ?></span>
                <textarea readonly="yes"><?php for ($i=0; $i < long_chaine($erreur) ; $i++) { ?>
                <?php } for ($i=0; $i <long_chaine($phrase) ; $i++) { if (is_chaine_setence($phrase[$i])) { if (long_chaine($phrase[$i])<=200) {
                echo $phrase[$i].' '; } } } ?>
                </textarea><?php } ?>
            </form>
        </div>
    </body>
</html>