<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Contact</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body class="page-contact">

    <!-- <br />
<b>Warning</b>:  include(header.php): failed to open stream: No such file or directory in <b>/Applications/MAMP/htdocs/premierWordpress/wp-content/themes/chimmo/page-contact.php</b> on line <b>16</b><br />
<br />
<b>Warning</b>:  include(): Failed opening 'header.php' for inclusion (include_path='.:/Applications/MAMP/bin/php/php7.2.10/lib/php') in <b>/Applications/MAMP/htdocs/premierWordpress/wp-content/themes/chimmo/page-contact.php</b> on line <b>16</b><br />
 -->

    <div class="container">

        <div>
            Vous souhaitez plus d'informations ?
        </div>

        <div class="formulaire">

            <div class="ensemble">
                <div class="input">
                    <input type="text" id="nom" name="nom" placeholder="Nom" required>
                </div>

                <div class="input">
                    <input type="text" id="prenom" name="prenom" placeholder="Prénom" required>
                </div>
            </div>

            <div class="ensemble">
                <div class="input">
                    <input type="text" id="add" name="add" placeholder="Rue et n°" required>
                </div>
            </div>

            <div class="ensemble">
                <div class="input">
                    <input type="text" id="ville" name="ville" placeholder="Ville" required>
                </div>

                <div class="input">
                    <input type="text" id="cp" name="cp" placeholder="Code Postal" required>
                </div>
            </div>

            <div class="ensemble">
                <div class="input">
                    <input type="text" id="tel" name="tel" placeholder="Tél." required>
                </div>

                <div class="input">
                    <input type="text" id="mail" name="mail" placeholder="Email" required>
                </div>
            </div>

            <div class="ensemble">
                <div class="input">
                    <TEXTAREA name="message" placeholder="Your message" required></TEXTAREA>
                </div>
            </div>

        </div>

        <div class="contact">

            <div>
                <p><img src="http://localhost:8888/premierWordpress/wp-content/themes/chimmo/img/svg/arrow-right2.svg"
                        width=30 height=30 alt=""> INFOS CONTACT</p>
            </div>

            <div>
                <p>Résidence Jowa</p>
                <p>Fond Jowa</p>
                <p>4890 Thimister-Clermont</p>
                <p><i class="fas fa-location-arrow"></i> Google map ></p>
            </div>

            <div>
                <p><img src="http://localhost:8888/premierWordpress/wp-content/themes/chimmo/img/svg/ic_local_phone_48px.svg"
                        alt style="background-color:black;"> +32 4 351 92 98</p>
                <p><i class="far fa-envelope"></i> info@ch-immo.be</p>
            </div>

            <div>
                <img src="http://localhost:8888/premierWordpress/wp-content/themes/chimmo/img/svg/logoCheneTravaux.svg"
                    alt="">
                <p>Rue Norivaux 23 - 4870 TROOZ</p>
            </div>


        </div>

    </div>

</body>

</html>