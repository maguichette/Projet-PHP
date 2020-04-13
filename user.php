


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page admin</title>
    <link rel="stylesheet" href="user.css">
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
        <div class="monprofil">
          <h2>S'INSCRIRE</h2>
          <h3>Pour tester votre niveau de culture general</h3> 
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
          <div class="myprofil">
              <img src="<?=$_SESSION['avatar']?>" alt="">
          </div>
              <p class=jouer>Avatar du joueur</p>
          
           </div>