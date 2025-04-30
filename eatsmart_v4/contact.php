<!DOCTYPE html>
<html>
    <?php require_once(__DIR__ . '/header.php'); ?>
    <form action = "submit_contact.php" method = "GET">
        <br>
        <label for = "email"> Email: </label><br>
        <input type = "text" id = "email" name = "email"><br>
        <label for = "message"> Votre message: </label><br>
        <textarea name = "message" id = "message" cols = "20" rows = "4"></textarea><br>
        <input type = "submit" value = "Envoyer" />
    </form>
    <?php require_once(__DIR__ . '/footer.php'); ?>
</html>