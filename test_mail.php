<?php
if (mail("mestini.malak@etu.uae.ac.ma", "Test", "Ceci est un test", "From: test@wuaze.com")) {
    echo "L'email a été envoyé avec succès.";
} else {
    echo "Échec de l'envoi de l'email.";
}
?>