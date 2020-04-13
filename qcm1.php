<?php
 session_start();
if(isset($_POST['submit'])){
       
        $json=file_get_contents('fichier.json');
        $jd=json_decode($json,true);
        $message="";
      foreach($jd as $value){
      if($email==$value['Login'] && $password==$value['password']){
         $_SESSION['prenom']=$value['prenom'];
         $_SESSION['nom']=$value['nom'];
         $_SESSION['avatar']=$value['avatar'];
         $_SESSION['Login']=$value['Login'];
         $_SESSION['password']=$value['password'];
         if($value['role']=='Admin'){
         header('Location:QUIZ.php');
         exit;
         }
             else{
                 header("Location:user.php");
                                
                  }
                  }
                  }
                  if($value['login']!=$_POST['email']&&$value['password']==$_POST['password']){
                      $message.='<b style="color:red">Login incorrect</b>';
                  }
                  elseif($value['login']==$_POST['email']&&$value['password']!=$_POST['password']){
                    $message.='<b style="color:red">mot de pass incorrect</b>';
                  }
                  else{
                    $message.='<b style="color:red">Login et mot de pass incorrects</b>';
                  }
                  if(empty($_POST['email'])&&empty($_POST['password'])){
                    $message.='<b style="color:red">Entrer votre login et mot de pass</b>';
                  }
                  elseif($_POST['email']){
                    $message.='<b style="color:red">Entrer votre login</b>';
                  }
                  elseif(empty($_POST['password'])){
                    $message.='<b style="color:red">Entrer votre mot de pass</b>';
                  }
                  }
                      
              
            
      

      ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page de connexion</title>
    <link rel="stylesheet" href="qcm.css">
</head>
<body>
      
        <div class="font">
        <div class="logo"><img src="Images/logo-QuizzSA.png" alt="">
        </div>
        <div class="para">
            <h4>Le plaisir de jouer</h4>

        </div>
        </div>
        <div class="FONT">
        <div class="form">
        <div class="couleur">
        <h1>Login Form</h1>
        </div>
        <form action="">
        <div class="post">
        <input class="name" placeholder="Login" type="text" class="email" name="email" >
        <div class="div2"><img src="App2\icone-user.png" alt=""></div>
        </div>
       <div class="post2">
       <input class="pass" placeholder="password" type="password" class="password" name="password">
       <div class="div2"> <img src="App2\icone-password.png" alt=""></div>
       </div>
       <div class="post3">
       <input  class="connex" type="submit" class="submit" name="submit" autocomplete="off" value="Connexion">
       <p><a href="">S'inscrire pour jouer ?</a> </p>
    </div>

       </div>
       </form>
        </div>
        </div>
      
       </div>
</body>
</html>