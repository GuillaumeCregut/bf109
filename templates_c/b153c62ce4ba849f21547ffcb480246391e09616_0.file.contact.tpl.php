<?php
/* Smarty version 3.1.30, created on 2021-03-10 16:23:46
  from "C:\wamp\www\bf109\templates\contact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6048f2926a36d0_09834526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b153c62ce4ba849f21547ffcb480246391e09616' => 
    array (
      0 => 'C:\\wamp\\www\\bf109\\templates\\contact.tpl',
      1 => 1615393415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6048f2926a36d0_09834526 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/menu.css">
    <link rel="stylesheet" href="styles/contact.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="192x192" href="img/logo_messerschmitt192.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/logo_messerschmitt16.png">
    <?php echo '<script'; ?>
 src="script/contact.js"><?php echo '</script'; ?>
>
    <title>A propos</title>
</head>

<body>
    <header>
        <div class="conteneur">
            <div class="header-logo">
                <div class="logo">
                    <img src="img/logo.png" alt="logo">
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="conteneur">
            <h1>Me contacter</h1>
            <div id="formulaire">
                <form name="contact" method="post" action="#">
                    <p>Votre nom : <input type="text" name="nom" id="nom"></p>
                    <p>Votre adresse mail : <input type="text" name="admail" id="admail"></p>
                    <p>Votre message :</p>
                    <p> <textarea name="message" rows="6" cols="100" id="message"></textarea></p>
                    <p><?php echo $_smarty_tpl->tpl_vars['chiffre1']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['operation']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['chiffre2']->value;?>
</p>
                    <p>Veuillez saisir le r&eacute;sultat de l'op&eacute;ration ci-dessus : <input type="text" name="result"></p>
                    <p><input type="button" value="envoyer" onclick="Verifie_Donnees(0)"></p>
                </form>
            </div>
            <p><a href="index.html">Retour à l'accueil</a></p>
        </div>

    </main>
    <footer>
        <div class="conteneur">
            <div>Copyright 2021, G. Crégut, Editiel98</div>
            <nav class="footernav">
                <ul class="menu_footer">
                    <li><a href="apropos.html">À propos</a></li>
                </ul>
            </nav>
        </div>
    </footer>
</body>

</html><?php }
}
