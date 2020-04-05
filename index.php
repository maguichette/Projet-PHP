<?php
require_once ("functions.php");
$message="";
$nbreChamps=0;
$tabmots=[];//permet de sauvegarder tous les mots saisis
$error=[];//permet de sauvegarder les erreurs de chaque champ
$motsavecM=[];
if(isset ($_POST['valider'])){
$nbreChamps=$_POST['nbre'];
if(is_empty($nbreChamps)){
    $message="champ obligatoire";
}
else{
    if(!is_chaine_numeric($nbreChamps)){
        $message="veiller saisir un entier";
    }
}
}
//  if(isset($_POST['resultat'])){
//      var_dump($_POST);
//      $nbreChamps=$_POST['nbre'];
//      for($i=0;$i<$nbreChamps;$i++){
//          $mot=$_POST['mot_'.$i]; 
        
//      }
//  }
 if (isset($_POST['resultat'])){
     $nbrChamps =$_POST['nbre'];
         for ($i=0;$i<$nbrChamps;$i++){
             $mot = $_POST['mot_'.($i)];
             $tabmots[] = $mot;
             if (long_chaine($mot)>20){
                 $errors[$i][] = 'Le mot ne doit etre inferieur ou égal à 20 caractères';
             }
            if (!is_chaine_alpha($mot)){
                 $errors[$i][] = 'Ecriver des lettres seulement';
             }
             if (is_car_present_in_chaine(delete_spc_before_after($mot),' ')){
                 $errors[$i][] = 'Un seul mot';
             }
            if (isset($errors[$i]) && empty($errors[$i])){
                 unset($errors[$i]);
             }
             if(is_empty($mot)){
                 $errors[$i][] = 'Champ vide';
             }
         }
          if (empty($errors)){
               echo'les mots saisis sont :';
              foreach ($tabmots as $m){
                  if (is_car_present_in_chaine('M',$m)){
                      $motsAvecM[] = $m;
                  }
             }
      }

 }
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <link rel="stylesheet" href="css.css">
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>
<form method="post">
<div class="plan">
<label for="m"> <p> Entrer le nombre de champ </p></label> <br> <br>
<div class="nbrechamps">
<input  type="text" name="nbre" value="<?= $nbreChamps?>" placeholder="entrer le nombre de champ"  > 
</div>
<p style='color:red;'><?= $message?> </p>
<div class="submit">
<button type="submit" name="valider" class="valider">valider</button>
<button type="submit" name="annuler" class="annuler">annuler</button>
</div>
<?php for($i=0;$i<$nbreChamps;$i++){?>
    <div class="Mots">
<label for="m" ><h4> MOT N°<?= $i+1 ?> </h4></label>

    <span class="erreur" ><?= isset($errors[$i]) ?  print_error($errors[$i])  : '' ?></span>
  
<input type="text" autocomplete="off" value="<?= isset($tabmots[$i]) ? $tabmots[$i] : '' ?>" class="numero" name="mot_<?= $i ?>" >
<?php } ?>
<?php if ($nbreChamps && empty($message)){ ?>
<button type="submit" name="resultat"class="resultat" >Resultats</button>
</div>
    <?php } ?>
     

<?php if (empty($errors) && isset($_POST['resultat'])){ ?>
        <div class="affiche">
            <h2 >Vous avez saisi <?= $nbrChamps ?> Mot(s) dont <?= count($motsAvecM) ?> avec la lettre M</h2>
        
    </div>
<?php } ?>

</form>
</body>
</html>
