<!doctype html>
<html lang="pl">
    <head>
        <meta charset="utf-8"> 
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/forms.css">
    </head>
    <body>
        
<?php 
session_start(); 
//var_dump($_SESSION);
?>
        
        <div id="contact-form">    

            <form id="contact" class="pure-form" method="post" action="sendmsg.php">
                <fieldset>    

                    <div><label for="name">Imię i Nazwisko</label></div>
                    <div><input type="text" name="name" <?php if (getFS('name') !== '') 
                        echo 'value="'.$_SESSION['name'].'"' ?> ></div>

                    <div><label for="email">E-mail</label></div>
                    <div><input type="email" name="email" <?php if (getFS('email') !== '') 
                        echo 'value="'.$_SESSION['email'].'"' ?> ></div>

                    <div><label for="phone">Telefon</label></div>
                    <div><input type="text" name="phone" <?php if (getFS('phone') !== '') 
                        echo 'value="'.$_SESSION['phone'].'"' ?> ></div>
                    
                    <div><label for="message">Wiadomość</label></div>
                    <div><textarea name="message"><?php if (getFS('message') !== '') 
                        echo $_SESSION['message'] ?></textarea></div>

                    <div><input type="submit" name="submit" id="submit" value="Wyślij" /></div>

                </fieldset>
            </form>

        </div><!-- /end #contact-form -->

    </body>
</html>

<?php
// getFS - get from session
function getFS($name) {
    if (isset($_SESSION[$name])) {
        return $_SESSION[$name];
    } else {
        return '';
    }
}

?>
