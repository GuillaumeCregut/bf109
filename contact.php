<?php
session_start();
include("include/smarty.class.php");
$CheminTpl='templates/';
$moteur=new Smarty();
if (isset($_POST["admail"]))
{
	//On récupere les infos et on envoie le mail
	$adresse=$_POST["admail"];
	$Message=nl2br($_POST["message"]);
	$Nom=$_POST["nom"];
	$LeResultat=$_POST["result"];
	if ($LeResultat!=$_SESSION['Captcha'])
	{
		$moteur->set_file('index','error.tpl');
		$moteur->assign('RETOUR','contact.php');
		$moteur->assign('ERREUR',"La v&eacute;rification a &eacute;chou&eacute;e. Veuillez recommencer l'op&eacute;ration.");
		$moteur->display($CheminTpl.'error.tpl');
	}
	else
	{
		$dest='gcregut@free.fr';
		$LeSujet="Site Bf109 : contact formulaire";
		$Entete="From: $adresse \n";
		$Entete.="Reply-to: $adresse\n";
		//$Entete.="Bcc: gcregut@free.fr \n";
		$LeMessage="Site : Bf109\nMr/Mme $Nom a envoyer cet email suivant.\nL'adresse pour lui répondre est : $adresse.\n$Message";
		if(@mail($dest,$LeSujet,$LeMessage,$Entete))
		{
			$moteur->display($CheminTpl.'mail_ok.tpl');
		}
		else
		{
			$moteur->assign('ERREUR',"Un probl&egrave;me technique a emp&ecirc;ch&eacute; l'envoi du courriel");
			$moteur->display($CheminTpl.'error.tpl');
		}
	}
}
else
{
	//Récupération des nombres pour le calcul
    $Nombre1=rand(0,10);
    $Nombre2=rand(0,10);
    $Operation=rand(0,2);
    $TabOp=array('+','-','*');
    $Symbole=$TabOp[$Operation];
    $ResultatOp=0;
    switch($Operation)
    {
        case 0 : 
            $ResultatOp=$Nombre1+$Nombre2;
            break;
        case 1:
            $ResultatOp=$Nombre1-$Nombre2;
            break;
        case 2 :
            $ResultatOp=$Nombre1*$Nombre2;
            break;
    }
    //calcul du résutat
    $_SESSION['Captcha']=$ResultatOp;
    $moteur->assign('chiffre1',$Nombre1);
    $moteur->assign('chiffre2',$Nombre2);
    $moteur->assign('operation',$Symbole);
    //on affiche le formulaire
	$moteur->display($CheminTpl.'contact.tpl');
}  
?>