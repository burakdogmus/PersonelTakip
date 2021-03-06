<?php
/*
TO CREATE A NEW LANGUAGE, COPY THE en-us.php to your own localization code name.
We are going to keep these files in the iso xx-xx format because that will also
allow us to autoformat numbers on the sites.
PLEASE put your name somewhere at the top of the language file so we can get in touch with
you to update it and thank you for your hard work!
PLEASE NOTE: DO NOT ADD RANDOM KEYS in the middle of the translations.  In order to make it easier to tell what language keys are missing, from this point forward, we are going to add all new language keys at the BOTTOM of this file. The number of lines in your language file will tell you which keys still need to be translated.  If you have questions please ask on the forums or on Discord.
UserSpice
An Open Source PHP User Management System
by the UserSpice Team at http://UserSpice.com
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

/*
%m1% - Dymamic markers which are replaced at run time by the relevant index.
*/

/*
Translated by Telnz, Alexandre FLEURET, moonwatch.fr, pousterlus, and Simple Electronics
*/

$lang = array();
//important strings
//You definitely want to customize these for your language
$lang = array_merge($lang,array(
  "THIS_LANGUAGE"	=>"French",
  "THIS_CODE"			=>"fr-FR",
  "MISSING_TEXT"	=>"Texte manquant",
));

//Database Menus
$lang = array_merge($lang,array(
  "MENU_HOME"			=> "Accueil",
  "MENU_HELP"			=> "Aide",
  "MENU_ACCOUNT"	=> "Compte",
  "MENU_DASH"			=> "Administration",
  "MENU_USER_MGR"	=> "Utilisateurs",
  "MENU_PAGE_MGR"	=> "Pages",
  "MENU_PERM_MGR"	=> "Autorisations",
  "MENU_MSGS_MGR"	=> "Messages",
  "MENU_LOGS_MGR"	=> "Logs",
  "MENU_LOGOUT"		=> "D??connexion",
));

// Signup
$lang = array_merge($lang,array(
  "SIGNUP_TEXT"					=> "Inscription",
  "SIGNUP_BUTTONTEXT"		=> "S'inscrire",
  "SIGNUP_AUDITTEXT"		=> "Inscrit",
));

// Signin
$lang = array_merge($lang,array(
  "SIGNIN_FAIL"				=> "** ??CHEC DE LA CONNEXION **",
  "SIGNIN_PLEASE_CHK" => "Acc??s refus??, v??rifiez vos identifiants",
  "SIGNIN_UORE"				=> "Nom d'utilisateur ou email",
  "SIGNIN_PASS"				=> "Mot de passe",
  "SIGNIN_TITLE"			=> "Connectez-vous",
  "SIGNIN_TEXT"				=> "Connexion",
  "SIGNOUT_TEXT"			=> "D??connexion",
  "SIGNIN_BUTTONTEXT"	=> "S'identifier",
  "SIGNIN_REMEMBER"		=> "Se souvenir de moi",
  "SIGNIN_AUDITTEXT"	=> "Connect??",
  "SIGNIN_FORGOTPASS"	=> "Mot de passe oubli??",
  "SIGNOUT_AUDITTEXT"	=> "D??connect??",
));

// Account Page
$lang = array_merge($lang,array(
  "ACCT_EDIT"					=> "Modifier mes infos",
  "ACCT_2FA"					=> "Authentification ?? 2 facteurs",
  "ACCT_SESS"					=> "G??rer les sessions",
  "ACCT_HOME"					=> "Mon compte",
  "ACCT_SINCE"				=> "Membre depuis",
  "ACCT_LOGINS"				=> "Nombre de connexions",
  "ACCT_SESSIONS"			=> "Nombre de sessions actives",
  "ACCT_MNG_SES"			=> "Cliquez sur le bouton 'G??rer les sessions' ?? gauche pour plus d'informations.",
));

//General Terms
$lang = array_merge($lang,array(
  "GEN_ENABLED"			=> "Activ??",
  "GEN_DISABLED"		=> "D??sactiv??",
  "GEN_ENABLE"			=> "Activer",
  "GEN_DISABLE"			=> "D??sactiver",
  "GEN_NO"					=> "Non",
  "GEN_YES"					=> "Oui",
  "GEN_MIN"					=> "min",
  "GEN_MAX"					=> "max",
  "GEN_CHAR"				=> "car", //as in characters
  "GEN_SUBMIT"			=> "Envoyer",
  "GEN_MANAGE"			=> "G??rer",
  "GEN_VERIFY"			=> "V??rifier",
  "GEN_SESSION"			=> "session",
  "GEN_SESSIONS"		=> "sessions",
  "GEN_EMAIL"				=> "Email",
  "GEN_FNAME"				=> "Pr??nom",
  "GEN_LNAME"				=> "Nom",
  "GEN_UNAME"				=> "Nom d'utilisateur",
  "GEN_PASS"				=> "Mot de passe",
  "GEN_MSG"					=> "Message",
  "GEN_TODAY"				=> "Aujourd'hui",
  "GEN_CLOSE"				=> "Fermer",
  "GEN_CANCEL"			=> "Annuler",
  "GEN_CHECK"				=> "[cocher tout / tout d??cocher]",
  "GEN_WITH"				=> "avec",
  "GEN_UPDATED"			=> "Mis ?? jour",
  "GEN_UPDATE"			=> "Mettre ?? jour",
  "GEN_BY"					=> "par",
  "GEN_FUNCTIONS"		=> "fonctions",
  "GEN_NUMBER"			=> "nombre",
  "GEN_NUMBERS"			=> "nombres",
  "GEN_INFO"				=> "Information",
  "GEN_REC"					=> "Enregistr??",
  "GEN_DEL"					=> "Effac??",
  "GEN_NOT_AVAIL"		=> "Indisponible",
  "GEN_AVAIL"				=> "Disponible",
  "GEN_BACK"				=> "Retour",
  "GEN_RESET"				=> "R??initialiser",
  "GEN_REQ"					=> "requis",
  "GEN_AND"					=> "et",
  "GEN_SAME"				=> "doit ??tre identique",
));

//validation class
$lang = array_merge($lang,array(
  "VAL_SAME"				=> "doit ??tre identique",
  "VAL_EXISTS"			=> "existe d??j??. Merci d'en choisir un autre",
  "VAL_DB"					=> "Erreur de la base de donn??es",
  "VAL_NUM"					=> "doit ??tre un nombre",
  "VAL_INT"					=> "doit ??tre un nombre entier",
  "VAL_EMAIL"				=> "doit ??tre une adresse email valide",
  "VAL_NO_EMAIL"		=> "ne peut pas ??tre une adresse email",
  "VAL_SERVER"			=> "doit appartenir ?? un serveur valide",
  "VAL_LESS"				=> "doit ??tre inf??rieur ??",
  "VAL_GREAT"				=> "doit ??tre sup??rieur ??",
  "VAL_LESS_EQ"			=> "doit ??tre inf??rieur ou ??gal ??",
  "VAL_GREAT_EQ"		=> "doit ??tre sup??rieur ou ??gal ??",
  "VAL_NOT_EQ"			=> "ne doit pas ??tre ??gal ??",
  "VAL_EQ"					=> "doit ??tre ??gal ??",
  "VAL_TZ"					=> "doit ??tre un fuseau horaire valide",
  "VAL_MUST"				=> "doit ??tre",
  "VAL_MUST_LIST"		=> "doit ??tre l'un des suivants",
  "VAL_TIME"				=> "doit ??tre une heure valide",
  "VAL_SEL"					=> "n'est pas une s??lection valide",
  "VAL_NA_PHONE"		=> "doit ??tre un num??ro de t??l??phone Nord-Am??ricain valide",
));

//Time
$lang = array_merge($lang,array(
  "T_YEARS"			=> "Ann??es",
  "T_YEAR"			=> "Ann??e",
  "T_MONTHS"		=> "Mois",
  "T_MONTH"			=> "Mois",
  "T_WEEKS"			=> "Semaines",
  "T_WEEK"			=> "Semaine",
  "T_DAYS"			=> "Jours",
  "T_DAY"				=> "Jour",
  "T_HOURS"			=> "Heures",
  "T_HOUR"			=> "Heure",
  "T_MINUTES"		=> "Minutes",
  "T_MINUTE"		=> "Minute",
  "T_SECONDS"		=> "Secondes",
  "T_SECOND"		=> "Seconde",
));


//Passwords
$lang = array_merge($lang,array(
  "PW_NEW"		=> "Nouveau mot de passe",
  "PW_OLD"		=> "Ancien mot de passe",
  "PW_CONF"		=> "Confirmer le mot de passe",
  "PW_RESET"	=> "R??initialiser mot de passe",
  "PW_UPD"		=> "Le mot de passe a ??t?? mis ?? jour",
  "PW_SHOULD"	=> "Le mot de passe devrait...",
  "PW_SHOW"		=> "R??v??ler le mot de passe",
  "PW_SHOWS"	=> "R??v??ler les mots de passe",
));


//Join
$lang = array_merge($lang,array(
  "JOIN_SUC"			=> "Bienvenue chez ",
  "JOIN_THANKS"		=> "Merci pour votre inscription !",
  "JOIN_HAVE"			=> "Avoir au moins ",
  "JOIN_CAP"			=> " lettre majuscule",
  "JOIN_TWICE"		=> "Doit ??tre saisi correctement deux fois",
  "JOIN_CLOSED"		=> "Les inscriptions sont actuellement d??sactiv??es. Contactez l'administrateur du site pour toute question ou probl??me.",
  "JOIN_TC"				=> "Conditions d'utilisation",
  "JOIN_ACCEPTTC" => "J'accepte les conditions d'utilisation",
  "JOIN_CHANGED"	=> "Nos conditions d'utilisation ont ??volu??",
  "JOIN_ACCEPT" 	=> "Accepter les conditions d'utilisation et continuer",
));

//Sessions
$lang = array_merge($lang,array(
  "SESS_SUC"	=> "Expiration de ",
));

//Messages
$lang = array_merge($lang,array(
  "MSG_SENT"			=> "Votre message a ??t?? envoy?? !",
  "MSG_MASS"			=> "Votre campagne a ??t?? envoy??e !",
  "MSG_NEW"				=> "Nouveau message",
  "MSG_NEW_MASS"	=> "Nouvelle campagne",
  "MSG_CONV"			=> "Conversations",
  "MSG_NO_CONV"		=> "Aucune discussion",
  "MSG_NO_ARC"		=> "Aucune discussion",
  "MSG_QUEST"			=> "Notifier les emails si activ?? ?",
  "MSG_ARC"				=> "Discussions archiv??es",
  "MSG_VIEW_ARC"	=> "Voir les discussions archiv??es",
  "MSG_SETTINGS"  => "Param??tres des messages",
  "MSG_READ"			=> "Ouvrir",
  "MSG_BODY"			=> "Contenu",
  "MSG_SUB"				=> "Sujet",
  "MSG_DEL"				=> "D??livr??",
  "MSG_REPLY"			=> "R??pondre",
  "MSG_QUICK"			=> "R??pondre vite",
  "MSG_SELECT"		=> "S??lectionner un destinataire",
  "MSG_UNKN"			=> "Destinataire inconnu",
  "MSG_NOTIF"			=> "Notifications des emails",
  "MSG_BLANK"			=> "Le message ne peut pas ??tre vide",
  "MSG_MODAL"			=> "Cliquez ici ou appuyez sur Alt+R pour vous concentrer ici OU appuyez sur Maj+R pour agrandir le volet de r??ponse !",
  "MSG_ARCHIVE_SUCCESSFUL"        => "Vous avez correctement archiv?? %m1% discussions",
  "MSG_UNARCHIVE_SUCCESSFUL"      => "Vous avez correctement d??sarchiv?? %m1% discussions",
  "MSG_DELETE_SUCCESSFUL"         => "Vous avez correctement supprim?? %m1% discussions",
  "USER_MESSAGE_EXEMPT"         	=> "L'utilisateur est %m1% exempt?? de messages.",
  "MSG_MK_READ"		=> "Lu",
  "MSG_MK_UNREAD"	=> "Non lu",
  "MSG_ARC_THR"		=> "Archiver les discussions s??lectionn??es",
  "MSG_UN_THR"		=> "D??sarchiver les discussions s??lectionn??es",
  "MSG_DEL_THR"		=> "Supprimer les discussions s??lectionn??es",
  "MSG_SEND"			=> "Envoyer le message",
));

//2 Factor Authentication
$lang = array_merge($lang,array(
  "2FA"				=> "Authentification ?? 2 facteurs",
  "2FA_CONF"	=> "??tes-vous certain de vouloir d??sactiver 2FA ? Votre compte ne sera plus prot??g??.",
  "2FA_SCAN"	=> "Scannez ce code QR avec votre application d'authentification ou saisissez manuellement la cl??",
  "2FA_THEN"	=> "Entrez ensuite l'une de vos cl??s d'acc??s ?? usage unique ici",
  "2FA_FAIL"	=> "Impossible de v??rifier 2FA. V??rifier votre connexion Internet ou contactez l'assistance.",
  "2FA_CODE"	=> "Code 2FA",
  "2FA_EXP"		=> "Empreinte expir??e",
  "2FA_EXPD"	=> "Expir??e",
  "2FA_EXPS"	=> "En cours d'expiration",
  "2FA_ACTIVE"=> "Sessions actives",
  "2FA_NOT_FN"=> "Aucune empreinte trouv??e",
  "2FA_FP"		=> "Empreintes",
  "2FA_NP"		=> "<strong>??chec de connexion</strong> Pas d'authentification ?? 2 facteurs. R??essayez.",
  "2FA_INV"		=> "<strong>??chec de connexion</strong> Authentification ?? 2 facteurs invalide. R??essayez.",
  "2FA_FATAL"	=> "<strong>Erreur</strong> Contactez l'administrateur du syst??me.",
));

//Redirect Messages - These get a plus between each word
$lang = array_merge($lang,array(
  "REDIR_2FA"						=> "D??sol??,+l'authentification+??+2+facteurs+est+d??sactiv??e",
  "REDIR_2FA_EN"				=> "L'authentification+??+2+facteurs+est+activ??e",
  "REDIR_2FA_DIS"				=> "L'authentification+??+2+facteurs+est+desactiv??e",
  "REDIR_2FA_VER"				=> "L'authentification+??+2+facteurs+est+v??rifi??e+et+activ??e",
  "REDIR_SOM_TING_WONG" => "Erreur.+R??essayez.",
  "REDIR_MSG_NOEX"			=> "Cette+discussion+ne+vous+appartient+pas+ou+n'existe+pas.",
  "REDIR_UN_ONCE"				=> "Le+nom+d'utilisateur+a+d??j??+??t??+chang??.",
  "REDIR_EM_SUCC"				=> "Mise+??+jour+de+l'adresse+email+r??ussie",
));

//Emails
$lang = array_merge($lang,array(
  "EML_CONF"			=> "Confirmez votre adresse email",
  "EML_VER"				=> "V??rifiez votre adresse email",
  "EML_CHK"				=> "Un email vous a ??t?? envoy?? contenant un lien de v??rification. N'oubliez pas de v??rifier votre dossier 'Spam', le lien expire dans ",
  "EML_MAT"				=> "Votre adresse email ne correspond pas.",
  "EML_HELLO"			=> "Bonjour depuis ",
  "EML_HI"				=> "Bonjour ",
  "EML_AD_HAS"		=> "Un administrateur a r??initialis?? votre mot de passe.",
  "EML_AC_HAS"		=> "Un administrateur a cr???? votre compte.",
  "EML_REQ"				=> "Vous devrez cr??er votre mot de passe en cliquant sur le lien ci-dessus.",
  "EML_EXP"				=> "Attention, le lien de cr??ation de votre mot de passe expire dans ",
  "EML_VER_EXP"		=> "Attention, le lien de v??rification de votre adresse email expire dans ",
  "EML_CLICK"			=> "Cliquez ici pour vous connecter.",
  "EML_REC"				=> "Il est conseill?? de changer de mot de passe apr??s votre premi??re connexion.",
  "EML_MSG"				=> "Vous avez un nouveau message de",
  "EML_REPLY"			=> "Cliquez ici pour r??pondre ou lire la discussion",
  "EML_WHY"				=> "Nous avons bien re??u votre demande de r??initialisation de votre mot de passe. Si vous n'avez pas demand?? ?? r??initialiser votre mot de passe, vous pouvez ignorer ce message.",
  "EML_HOW"				=> "Pour modifier votre mot de passe, veuillez suivre ce lien :",
  "EML_EML"				=> "Une demande de modification de votre email a ??t?? faite ?? partir de votre compte.",
  "EML_VER_EML"		=> "Merci pour votre inscription. D??s que vous aurez v??rifi?? votre adresse email, vous serez pr??t ?? vous connecter ! Cliquez sur le lien ci-dessous pour valider le processus de v??rification.",

));

//Verification
$lang = array_merge($lang,array(
  "VER_SUC"			=> "Votre adresse email a ??t?? v??rifi??e !",
  "VER_FAIL"		=> "Nous n'arrivons pas ?? v??rifier votre adresse email. Merci de r??essayer.",
  "VER_RESEND"	=> "Envoyer un nouvel email de v??rification",
  "VER_AGAIN"		=> "Saisissez votre adresse mail et essayez de nouveau",
  "VER_PAGE"		=> "<li>Relevez votre boite aux lettres ??lectronique et cliquez sur le lien qui vous a ??t?? envoy??</li><li>Termin??</li>",
  "VER_RES_SUC" => "<p>Un lien de v??rification vous a ??t?? envoy?? par email.</p><p>V??rifiez votre adresse en cliquant sur le lien pr??sent dans l'email. Pensez ?? v??rifier aussi vos courriers ind??sirables si l'email n'est pas dans votre bo??te de r??ception.</p><p>Le lien de v??rification est valable ",
  "VER_OOPS"		=> "Quelque chose n'a pas fonctionn?? : peut-??tre avez-vous cliqu?? sur un lien expir?? ou d??j?? utilis??. Cliquez ci-dessous pour r??essayer",
  "VER_RESET"		=> "Votre mot de passe a ??t?? r??initialis?? !",
  "VER_INS"			=> "<li>Entrez votre adresse email et cliquez sur 'R??initialiser'</li> <li>Relevez votre boite aux lettres ??lectronique et cliquez sur le lien qui vous a ??t?? envoy??.</li><li>Suivez ensuite les instructions ?? l'??cran</li>",
  "VER_SENT"		=> "<p>Le lien de r??initialisation de votre mot de passe a ??t?? envoy?? ?? votre adresse email.</p>
  <p>Cliquez sur le lien dans l'email pour r??initialiser votre mot de passe. Pensez ?? v??rifier aussi vos courriers ind??sirables si l'email n'est pas dans votre bo??te de r??ception.</p><p>Le lien de r??initialisation est valable ",
  "VER_PLEASE"	=> "Veuillez modifier votre mot de passe",
));

//User Settings
$lang = array_merge($lang,array(
  "SET_PIN"				=> "R??initialiser le PIN",
  "SET_WHY"				=> "Pourquoi je ne peux pas changer ??a ?",
  "SET_PW_MATCH"	=> "Doit ??tre identique ?? celui pr??c??demment saisi",

  "SET_PIN_NEXT"	=> "Vous pourrez changer le PIN la prochaine fois que vous effectuerez une v??rification",
  "SET_UPDATE"		=> "Modifier vos informations personnelles",
  "SET_NOCHANGE"	=> "L'administrateur a interdit le changement de nom d'utilisateur.",
  "SET_ONECHANGE"	=> "L'administrateur n'a autoris?? qu'un seul changement de nom d'utilisateur et vous l'avez d??j?? effectu??.",

  "SET_GRAVITAR"	=> "<strong>Vous voulez changer votre avatar ? </strong><br> Visitez <a href='https://en.gravatar.com/'>https://en.gravatar.com/</a> et cr??ez votre compte avec la m??me adresse email que celle utilis??e sur ce site. Cela fonctionne sur des millions de sites. C'est rapide et facile !",

  "SET_NOTE1"			=> "<p><strong>Attention</strong> une demande de modification de votre adresse email est en cours vers ",

  "SET_NOTE2"			=> ".</p><p>Veuillez cliquer sur le lien pr??sent dans l'email de v??rification que nous vous avons envoy??.</p>
  <p>Si vous avez besoin d'un nouvel email de v??rification, veuillez saisir une nouvelle fois ci-dessous votre adresse email et validez la demande ?? nouveau.</p>",

  "SET_PW_REQ" 		=> "n??cessaire pour modifier le mot de passe, l'adresse email, ou r??initialiser le PIN",
  "SET_PW_REQI" 	=> "N??cessaire pour modifier le mot de passe",

));

//Errors
$lang = array_merge($lang,array(
  "ERR_FAIL_ACT"		=> "Impossible de terminer la session en cours. Erreur : ",
  "ERR_EMAIL"				=> "Une erreur a emp??ch?? l'envoi de l'email. Veuillez contacter l'administrateur du site.",
  "ERR_EM_DB"				=> "Cette adresse email n'existe pas dans notre base de donn??es",
  "ERR_TC"					=> "Merci de lire et d'accepter les conditions d'utilisation",
  "ERR_CAP"					=> "??chec du test captcha, esp??ce de robot !",
  "ERR_PW_SAME"			=> "Votre nouveau mot de passe doit ??tre diff??rent de l'ancien",
  "ERR_PW_FAIL"			=> "??chec de la v??rification du mot de passe actuel. ??chec de la mise ?? jour. Veuillez r??essayer.",
  "ERR_GOOG"				=> "<strong>ATTENTION :</strong> Si ?? l'origine vous vous ??tes inscrits via votre compte Google / Facebook, utilisez la fonctionnalit?? 'Mot de passe oubli??' avant de chercher ?? modifier de mot de passe... sauf si vous voulez vraiment essayer de deviner.",
  "ERR_EM_VER"			=> "La v??rification d'email n'est pas activ??e. Veuillez contacter l'administrateur du site.",
  "ERR_EMAIL_STR"		=> "Quelque chose s'est mal pass??. Merci de rev??rifier votre adresse email. Nous sommes d??sol??s pour la g??ne occasionn??e.",

));

//Maintenance Page
$lang = array_merge($lang,array(
  "MAINT_HEAD"		=> "Nous serons bient??t de retour !",
  "MAINT_MSG"			=> "Nous effectuons actuellement des op??rations de maintenance, nous sommes d??sol??s pour la g??ne occasionn??e.<br> Le site sera op??rationnel tr??s rapidement.",
  "MAINT_BAN"			=> "Mince. Vous avez ??t?? exclu. Si vous pensez que c'est une erreur, veuillez contacter l'administrateur.",
  "MAINT_TOK"			=> "Il y avait une erreur dans votre formulaire. Veuillez retourner en arri??re et r??essayer. Attention : rafra??chir la page peut causer une erreur. Si cela continue de se produire, veuillez contacter l'administrateur.",
  "MAINT_OPEN"		=> "Un framework open-source de gestion d'utilisateurs en PHP",
  "MAINT_PLEASE"	=> "Vous avez correctement install?? UserSpice !<br>Pour savoir comment bien d??marrer, veuillez consulter notre documentation sur"
));

//dataTables Added in 4.4.08
//NOTE: do not change the words like _START_ between the two _ symbols!
$lang = array_merge($lang,array(
  "DAT_SEARCH"    => "Chercher",
  "DAT_FIRST"     => "Premier",
  "DAT_LAST"      => "Dernier",
  "DAT_NEXT"      => "Suivant",
  "DAT_PREV"      => "Pr??c??dent",
  "DAT_NODATA"        => "Pas de donn??es disponibles dans la table",
  "DAT_INFO"          => "Affichage de _START_ ?? _END_ des _TOTAL_ entr??es",
  "DAT_ZERO"          => "Affichage de 0 ?? 0 des 0 entr??es",
  "DAT_FILTERED"      => "(filtr?? de _MAX_ entr??es au total)",
  "DAT_MENU_LENG"     => "Affichage de _MENU_ entr??es",
  "DAT_LOADING"       => "Chargement...",
  "DAT_PROCESS"       => "Traitement...",
  "DAT_NO_REC"        => "Pas d'enregistrements correspondant trouv??s",
  "DAT_ASC"           => "Activer pour trier par ordre croissant",
  "DAT_DESC"          => "Activer pour trier par ordre d??croissant",
));


///////////////////////////////////////////////////////////////

//Backend Translations for UserSpice
$lang = array_merge($lang,array(
  "BE_DASH"    			=> "Tableau de bord",
  "BE_SETTINGS"     => "Param??tres",
  "BE_GEN"					=> "G??n??ral",
  "BE_REG"					=> "Inscription",
  "BE_CUS"					=> "Param??tres personnalis??s",
  "BE_DASH_ACC"			=> "Acc??s au tableau de bord",
  "BE_TOOLS"				=> "Outils",
  "BE_BACKUP"				=> "Sauvegarde",
  "BE_UPDATE"				=> "Mises ?? jour",
  "BE_CRON"				  => "Planifications",
  "BE_IP"				  	=> "Gestionnaire IP",
));



//LEAVE THIS LINE AT THE BOTTOM.  It allows users/lang to override these keys
if(file_exists($abs_us_root.$us_url_root."usersc/lang/".$lang["THIS_CODE"].".php")){
  include($abs_us_root.$us_url_root."usersc/lang/".$lang["THIS_CODE"].".php");
}
?>
