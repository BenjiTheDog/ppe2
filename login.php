
<html>
 <head>
 <meta charset="utf-8">
<style>
body{
 background: black;
 color: #fff;
}
#container{
 width:380px;
 margin:0 auto;
 margin-top:10%;
 padding-top: 20px;
}
/* Bordered form */
form {
 width:100%;
 padding: 30px;
 border: 1px solid #403E3E;
 background: #403E3E;
 box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
#container h1{
 width: 100%;
 margin: 0 auto;
 padding-bottom: 10px;
 color: #fff;
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
 background-color: blue;
 color: white;
 padding: 14px 20px;
 margin: 8px 0;
 border: none;
 cursor: pointer;
 width: 100%;
}
input[type=submit]:hover {
 background-color: #403E3E;
 color: blue;
 border: 1px solid blue;
}
.btn{
 background-color: blue;
 color: white;
 padding: 14px 20px;
 margin: 8px 0;
 border: none;
 cursor: pointer;
 width: 100%;

}
.btn:hover{
    background-color: #403E3E;
 color: blue;
 border: 1px solid blue;
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

 <input type="submit" id='submit' value='Se connecter' >
 <button class="btn" type="button" onclick="window.location.href='inscription.php'">S'inscrire</button>
 <button class="btn" type="button" onclick="window.location.href='Accueil.html'">Revenir à l'accueil</button>

 <?php
 if(isset($_GET['erreur'])){
 $err = $_GET['erreur'];
 if($err==1 || $err==2)
 echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
 }
 ?>
 
    
 </form>
 </div>

</script>
 </body>
</html>