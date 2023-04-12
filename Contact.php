<!DOCTYPE html>
<html>
    <head>
        <title>GarageRoy - Contact</title>
        <link rel="stylesheet" href="style.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="shortcut icon" href="icon.png" type="image/x-icon">
    </head>
    <body>
        <header>
            <h1><a href="Accueil.html"></a><img class="logobar" src="Logo2.png">           <form action="#" method="get">
                <input type="text" placeholder="Rechercher sur GarageRoy"> <!--Barre de recherche a rendre fonctionnel-->
            </form>
        </h1>
        </header>
        <header>
            <H3 class="barre">&nbsp;</H3>
            <H3><center><a class="link" href="Accueil.html">Accueil</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  class="link" href="Catalogue.php">Catalogue</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  class="link" href="Actu.html">Actualités</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  class="link" href="Contact.php">Contact</a></center></H3>            
            <H3 class="orange"><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;‾‾‾‾‾‾‾‾‾</center></H3>
        </header>
        <a href="Contact.html"></a><img src="Roy.png">
        <H1 class="txtroy">Johnny Roy était un homme aux multiples talents et passions. Depuis son plus jeune âge, il avait toujours été curieux de découvrir de nouveaux horizons et de relever de nouveaux défis. Il avait ainsi exercé de nombreux métiers au fil des années.</br></br>
        À 18 ans, il avait commencé sa carrière en tant que pompier.</br>
        Mais Johnny Roy avait toujours eu une soif de connaissances et un désir de comprendre le monde qui l'entourait. Il avait donc décidé de poursuivre ses études et de devenir médecin.</br>
        Après avoir obtenu son diplôme, Johnny avait décidé de mettre ses compétences médicales au service de la NASA en devenant astronaute. </br>
        Mais malgré son succès dans ces métiers, Johnny avait toujours été un amoureux de la nature. Il avait donc décidé de se lancer dans une nouvelle carrière en devenant jardinier.</br></br>
        Cependant, après plusieurs années à explorer différents métiers, Johnny avait finalement décidé de suivre sa passion pour les voitures. Il avait donc créé son propre garage, qu'il avait nommé <u>GarageRoy</u>.
        </H1>
        <div class="cntct">
        </br></br></br>
            <H1><center>‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾</center></H1>
            <H1>Contacter J. Roy : </H1>
</br>
            <?
$Motif = array(
    1 =>'Achat de véhicule',
    2 =>'Services',
    3 =>'Autres',
);
?>
            <table border="1" width="100%" height="700">
        <tr>
            <td colspan="2" align="center"><img src="logo.png" width="150">
            </td>
        </tr>
        <tr>
            <td valign="top">
                <p>
                    <b>Nous contacter par téléphone :</b> 09.69.69.69.69
                </p>
                <p><b>Venir au garage</b> : 42 rue Roger Salengro - 32000 Auch</p>
                <table>
                    <tr>
                        <td class="contact">
                            <div class="mapouter">
                                <div class="gmap_canvas"><iframe width="400" height="400" id="gmap_canvas"
                                        src="https://maps.google.com/maps?q=42%20rue%20Roger%20Salengro%20auch&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                    <style>
                                        .mapouter {
                                            position: relative;
                                            text-align: right;
                                            height: 400px;
                                            width: 400px;
                                        }
                                    </style><a href="https://www.embedgooglemap.net"></a>
                                    <style>
                                        .gmap_canvas {
                                            overflow: hidden;
                                            background: none !important;
                                            height: 400px;
                                            width: 400px;
                                        }
                                    </style>
                                </div>
                            </div>
                        </td>
                        <td class="contact">
                            <!-- le formulaire -->
                            <form action="messageEnvoye.php" method="get" >
                                <fieldset>
                                    <legend>Contacter le Garage Roy</legend>
                                    <fieldset>
                                        <legend>Motif</legend>
                                        <select size=1>
                                        <? foreach ($Motif as $key => $value) {
                                           echo "<option value=\"$key\">$value</option>";
                                        } ?>
                                        </select>
                                    </fieldset><br />
                                    <fieldset>
                                        <legend>Horaire préférée</legend>
                                        <input name="horaire" type="radio" value="Matin" /> <label for="Matin">Matin</label>
                                        <input name="horaire" type="radio" value="Midi" /> <label for="Midi">Midi</label>
                                        <input name="horaire" type="radio" value="Après-midi" /> <label for="Après-midi">Après-Midi</label>
                                        <input name="horaire" type="radio" value="Soir" /> <label for="Soir">Soir</label>
                                        <br />
                                    </fieldset>
                                    <br />
                                    <fieldset>
                                        <legend>Informations</legend>
                                        <label for="name">Votre nom</label><br>
                                        <input type="message" id="name" name="fname"><span id="msgname"></span><br>
                                        <label for="email">Votre email</label><br>
                                        <input type="email" id="email" name="lname" onkeyup="validate()"><span
                                            id="msgemail"></span><br><br>
                                        <label for="message">Votre message</label><br>
                                        <textarea id="message" name="message" rows="4" cols="50"></textarea><span
                                            id="msgmessage"></span><br><br>
                                    </fieldset>
                                    <input type="submit" value="Envoyer"><input type="reset" value="Annuler" />
                                </fieldset>
                            </form>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <script>
        function checkEmail(email) {
            var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }
        function validate() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var message = document.getElementById("message").value;
            var retour = true;

            if (name != null && name != "") {
                document.getElementById("msgname").innerHTML = 'Nom valide';
                document.getElementById("msgname").style = 'color:green';
            } else {
                document.getElementById("msgname").innerHTML = 'Veuillez renseigner votre nom';
                document.getElementById("msgname").style = 'color:red';
                retour = false;
            }

            if (checkEmail(email)) {
                document.getElementById("msgemail").innerHTML = 'Adresse e-mail valide';
                document.getElementById("msgemail").style = 'color:green';
            } else {
                document.getElementById("msgemail").innerHTML = 'Adresse e-mail non valide';
                document.getElementById("msgemail").style = 'color:red';
                retour = false;
            }

            if (message != null && message != "") {
                document.getElementById("msgmessage").innerHTML = 'Message valide';
                document.getElementById("msgmessage").style = 'color:green';
            } else {
                document.getElementById("msgmessage").innerHTML = 'Veuillez renseigner votre message';
                document.getElementById("msgmessage").style = 'color:red';
                retour = false;
            }
            return retour;
        }
        function confirmation() {
            if (!validate()) {
                alert("Veuillez corriger le formulaire");
                return false;
            }
            var retVal = confirm("Voulez-vous continuer?");
            if (retVal == true) {
                alert("Message envoyé!");
                return true;
            } else {
                alert("Le message n'a pas été envoyé");
                return false;
            }
        }

    </script>
        </div>
    </body>