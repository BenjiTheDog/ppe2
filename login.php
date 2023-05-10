<html>
 <head>
 <meta charset="utf-8">
<style>
    body{
 background: #67BE4B;
}
#container{
 width:400px;
 margin:0 auto;
 margin-top:10%;
}
/* Bordered form */
form {
 width:100%;
 padding: 30px;
 border: 1px solid #f1f1f1;
 background: #fff;
 box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
#container h1{
 width: 38%;
 margin: 0 auto;
 padding-bottom: 10px;
}

/* Full-width inputs */
input[type=text], input[type=password] {
 width: 100%;
 padding: 12px 20px;
 margin: 8px 0;
 display: inline-block;
 border: 1px solid #ccc;
 box-sizing: border-box;
}

/* Set a style for all buttons */
input[type=submit] {
 background-color: #53af57;
 color: white;
 padding: 14px 20px;
 margin: 8px 0;
 border: none;
 cursor: pointer;
 width: 100%;
}
input[type=submit]:hover {
 background-color: white;
 color: #53af57;
 border: 1px solid #53af57;
}
</style>
 </head>
 <body>
 <div id="container">
 <!-- zone de connexion -->
 
 <form action="verification.php" method="POST">
 <h1>Connexion</h1>
 
 <label><b>Nom d'utilisateur</b></label>
 <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

 <label><b>Mot de passe</b></label>
 <input type="password" placeholder="Entrer le mot de passe" name="password" required>

 <input type="submit" id='submit' value='LOGIN' >
 <?php
 if(isset($_GET['erreur'])){
 $err = $_GET['erreur'];
 if($err==1 || $err==2)
 echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
 }
 ?>
 </form>
 </div>
 <div id="content">
 
 <a href='principale.php?deconnexion=true'><span>Déconnexion</span></a>
 
 <!-- tester si l'utilisateur est connecté -->
 <?php
 session_start();
 if(isset($_GET['deconnexion']))
 { 
 if($_GET['deconnexion']==true)
 { 
 session_unset();
 header("location:login.php");
 }
 }
 else if($_SESSION['username'] !== ""){
 $user = $_SESSION['username'];
 // afficher un message
 echo "<br>Bonjour $user, vous êtes connectés";
 }
 ?>
 
 </div>
 </body>
</html>