function Verifie_Donnees(rien) {
    Exp = document.getElementById('nom').value;
    Sujet = document.getElementById('admail').value;
    Message = document.getElementById('message').value;
    if ((Exp == '') || (Sujet == '') || (Message == '')) {
        alert('Veuillez remplir les champs obligatoires');
    } else {
        document.contact.submit();
    }
}