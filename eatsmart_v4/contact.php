<!DOCTYPE html>
<html>
    <?php ob_start();?>  <!--Démarrer la capture du contenu-->
<!-- affichage du formulaire de contact -->
<div class="contact-container" style="max-width:400px;margin:40px auto;padding:20px;background:#f9f9f9;border-radius:8px;box-shadow:0 2px 8px #ddd;">
    <h2>Contactez-nous</h2>
    <form action="submit_contact.php" method="POST">
        <label for="email">Email :</label><br>
        <input type="email" id="email" name="email" required style="width:100%;padding:8px;margin-bottom:10px;"><br>
        <label for="message">Votre message :</label><br>
        <textarea name="message" id="message" cols="30" rows="5" required style="width:100%;padding:8px;margin-bottom:10px;"></textarea><br>
        <input type="submit" value="Envoyer" style="padding:8px 16px;background:#007bff;color:#fff;border:none;border-radius:4px;cursor:pointer;">
    </form>
</div>
<?php
$content = ob_get_clean(); // Récupérer le contenu et arrêter la capture
include 'css/base.blade.php'; // Inclure le template base
?>
</html>
