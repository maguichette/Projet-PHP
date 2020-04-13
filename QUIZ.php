<?php
session_start();
echo $_SESSION['prenom'];
echo $_SESSION['nom'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page admin</title>
    <link rel="stylesheet" href="quiz.css">
</head>
<body>
      
        <div class="font">
        <div class="logo"><img src="Images/logo-QuizzSA.png" alt="">
        </div>
        <div class="para">
            <p>Le plaisir de jouer</p>
            <div class="FONT">
        <div class="form">
        <div class="couleur">
        <h1>CRÉEZ ET PARAMÉTREZ VOS QUIZZ</h1>
        <a href="deconnexion.php"><input  class="connex" type="submit" class="submit" name="submit" value="Déonnexion"></a>
        </div>
           <div class="profil">
          <h2>S'INSCRIRE</h2>
          <h3>Pour proposer des quizz</h3> 
          <div class="bar"></div>
          <div class=myinput>
          <label >Prénom</label>
          <input type="text" placeholder="prénom">
          <label >Nom</label>
          <input type="nom" placeholder="nom">
          <label >Login</label>
          <input type="login" placeholder="login">
          <label >Password</label>
          <input type="password" placeholder="password">
          <label >confirmer Password</label>
          <input type="confirmer password" placeholder="confirmer password">
          <button id="btn1">Choisir un fichier</button>
          <p class="avatar">Avatar</p>   
          <input type="submit" name=" compte" value="créer compte" class="btn2">
          </div>
          <div class="myprofil"></div>
           </div>
           <div class="menu">
               <div class="image"></div>
               <div class="quiz">
                   <p class="question">Listes des Questions</p>
                   <img src="Images\ic-liste.png"  alt="">
               </div>
               <div class="admin">
                   <p class="creer">Créer Admin</p>
               </div>
               <div class="liste">
                   <p class="joueur">Listes Joueurs</p>

               </div>
               <div class="qtn">
                <p class="création">Créer Questions</p>
               </div>
           </div>
        </div>
        </div>