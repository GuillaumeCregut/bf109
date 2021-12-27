<?php
/* Smarty version 3.1.30, created on 2021-03-10 15:57:47
  from "C:\wamp\www\bf109\templates\error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6048ec7bc11b14_90831405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '533431308e9efe1c239db078933ae6e184e3b000' => 
    array (
      0 => 'C:\\wamp\\www\\bf109\\templates\\error.tpl',
      1 => 1615391819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6048ec7bc11b14_90831405 (Smarty_Internal_Template $_smarty_tpl) {
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
            <p>Une erreur s'est produite.</p>
            <p><?php echo $_smarty_tpl->tpl_vars['ERREUR']->value;?>
</p>
            <p>Je suis d&eacute;sol&eacute; pour la g&ecirc;ne occasionn&eacute;e.</p>
            <p>Guillaume Cr&eacute;gut</p>
            <p><a href="index.html">Retour à l'accueil</a></p>
        </div>
    </main>
    <footer>
        <div class="conteneur">
            <div>Copyright 2021, G. Crégut, Editiel98</div>
            <nav class="footernav">
                <ul class="menu_footer">
                    <li><a href="apropos.html">Me contacter</a></li>
                </ul>
            </nav>
        </div>
    </footer>
</body>

</html><?php }
}
