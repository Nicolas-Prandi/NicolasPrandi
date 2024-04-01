<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $code_attendu = "Socrate2425";
    $code_saisi = $_POST["code_acces"];
    if ($code_saisi === $code_attendu) {
        header("Location: espaceetudiant.html");
        exit();
    } else {
        header("Location: page_connexion.php?erreur=1");
        exit();
    }
} else {
    header("Location: espaceetudiant.html");
    exit();
}
?>
