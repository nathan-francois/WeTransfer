<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Etat du transfert</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="Assets/CSS/main.css" />
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand justify-content-md-center">
        <img class="logoH" id="logoH" src="Assets/images/logo.png">
        </nav>
    </header>
    
    <div class="container">
        <div id="contact" >
            <h3><img class="logo" id="logo" src="Assets/images/logo.png"></h3>
            <h1>État du téléchargement</h1>
            <p><?= $message?></p>

                <!-- Le bouton envoyer -->
            <div> 
                <fieldset>
                        <button name="retour" src="http://localhost/projets/Jan2019/WeTransfer/" class="francais mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Retour à l'accueil
                    </button>
                </fieldset>
            </div>

        </div>  
    </div>
        
</body>
</html>

<?php

// $mail = $_POST['destinataire']; // Déclaration de l'adresse de destination.

// if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.

// {

//     $passage_ligne = "\r\n";

// }

// else

// {

//     $passage_ligne = "\n";

// }

//=====Déclaration des messages au format texte et au format HTML.

// $message_txt = "Wubba lubba dub dub! {{mailE}} vous a envoyé des fichiers ! Cliquez sur le bouton ci-dessous pour les télécharger ! © R&M Transfer ";

// $message_html = '<!doctype html><html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head><title></title><!--[if !mso]><!-- --><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]--><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><style type="text/css">#outlook a { padding:0; }
// .ReadMsgBody { width:100%; }
// .ExternalClass { width:100%; }
// .ExternalClass * { line-height:100%; }
// body { margin:0;padding:0;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%; }
// table, td { border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt; }
// img { border:0;height:auto;line-height:100%; outline:none;text-decoration:none;-ms-interpolation-mode:bicubic; }
// p { display:block;margin:13px 0; }</style><!--[if !mso]><!--><style type="text/css">@media only screen and (max-width:480px) {
//   @-ms-viewport { width:320px; }
//   @viewport { width:320px; }
// }</style><!--<![endif]--><!--[if mso]>
// <xml>
// <o:OfficeDocumentSettings>
// <o:AllowPNG/>
// <o:PixelsPerInch>96</o:PixelsPerInch>
// </o:OfficeDocumentSettings>
// </xml>
// <![endif]--><!--[if lte mso 11]>
// <style type="text/css">
// .outlook-group-fix { width:100% !important; }
// </style>
// <![endif]--><!--[if !mso]><!--><link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet" type="text/css"><style type="text/css">@import url(https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700);</style><!--<![endif]--><style type="text/css">@media only screen and (min-width:480px) {
// .mj-column-per-100 { width:100% !important; max-width: 100%; }
// }</style><style type="text/css">@media only screen and (max-width:480px) {
// table.full-width-mobile { width: 100% !important; }
// td.full-width-mobile { width: auto !important; }
// }</style></head><body style="background-color:#bedae6;"><div style="background-color:#bedae6;"><!--[if mso | IE]><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]--><div style="background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;"><tbody><tr><td style="direction:ltr;font-size:0px;padding:0px;text-align:center;vertical-align:top;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:600px;" ><![endif]--><div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%"><tbody><tr><td style="vertical-align:top;padding:0px;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%"><tr><td align="center" style="font-size:0px;padding:0px;word-break:break-word;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;"><tbody><tr><td style="width:600px;"><img alt="header image" height="auto" src="Assets/Images/rickmail.png" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;" width="600"></td></tr></tbody></table></td></tr></table></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]--><div style="background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px;"><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;"><tbody><tr><td style="direction:ltr;font-size:0px;padding:0px;padding-bottom:20px;padding-top:10px;text-align:center;vertical-align:top;"><!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:600px;" ><![endif]--><div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%"><tbody><tr><td style="vertical-align:top;padding:0px;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%"><tr><td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;"><div style="font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:20px;line-height:1;text-align:center;color:#512d0b;"><strong>Wubba lubba dub dub!</strong></div></td></tr><tr><td align="center" style="font-size:0px;padding:0 25px;word-break:break-word;"><div style="font-family:Arial;font-size:18px;line-height:1;text-align:center;color:#000000;">{{mailE}}<br>vous a envoyé des fichiers !</div></td></tr><tr><td align="center" style="font-size:0px;padding:0 25px;padding-top:20px;word-break:break-word;"><div style="font-family:Arial, sans-serif;font-size:25px;font-weight:bold;line-height:35px;text-align:center;color:#489BDA;">Cliquez sur le bouton<br><span style="font-size:25px" font-weight="bold">ci-dessous pour les télécharger!</span></div></td></tr><tr><td align="center" vertical-align="middle" style="font-size:0px;padding:20px 0 0 0;word-break:break-word;"><table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;line-height:100%;"><tr><td align="center" bgcolor="#FF4081" role="presentation" style="border:none;border-radius:3px;cursor:auto;padding:10px 25px;background:#FF4081;" valign="middle"><a href="https://mjml.io" style="background: #FF4081; font-family: Arial, sans-serif; font-size: 16px; font-weight: bold; line-height: 120%; Margin: 0; text-transform: none; text-decoration: none; color: inherit;" target="_blank">Télécharger</a></td></tr></table></td></tr><tr><td align="center" style="font-size:0px;padding:0 25px;padding-top:40px;word-break:break-word;"><div style="font-family:Arial, sans-serif;font-size:18px;line-height:1;text-align:center;color:#000000;">© R&M Transfer<p></p></div></td></tr></table></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><![endif]--></div></body></html>';

//==========

 

//=====Création de la boundary

// $boundary = "-----=".md5(rand());

// //==========

 

// //=====Définition du sujet.

// $sujet = "Transfert de fichiers";

// //=========

 

// //=====Création du header de l'e-mail.

// $header = "From: \"Kevos\"<kevin.bernard@zoho.com>".$passage_ligne;

// $header.= "Reply-to: \"KevinB\" <kevin.bernard@zoho.com>".$passage_ligne;

// $header.= "MIME-Version: 1.0".$passage_ligne;

// $header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;

// //==========

 

// //=====Création du message.

// $message = $passage_ligne."--".$boundary.$passage_ligne;

// //=====Ajout du message au format texte.

// $message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;

// $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;

// $message.= $passage_ligne.$message_txt.$passage_ligne;

// //==========

// $message.= $passage_ligne."--".$boundary.$passage_ligne;

// //=====Ajout du message au format HTML

// $message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;

// $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;

// $message.= $passage_ligne.$message_html.$passage_ligne;

// //==========

// $message.= $passage_ligne."--".$boundary."--".$passage_ligne;

// $message.= $passage_ligne."--".$boundary."--".$passage_ligne;

// //==========

 

// //=====Envoi de l'e-mail.

// mail($mail,$sujet,$message,$header);

// //==========

// ?>