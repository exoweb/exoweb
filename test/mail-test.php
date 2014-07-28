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
var_dump($_SESSION);
?>
        
        <div id="contact-form">    

            <form id="contact" class="pure-form" method="post" action="sendmsg.php">
                <fieldset>    

                    <label for="name">Imię</label>
                    <input type="text" name="name" <?php if (getFS('name') !== '') 
                        echo 'value="'.$_SESSION['name'].'"' ?> >

                    <label for="email">E-mail</label>
                    <input type="email" name="email" <?php if (getFS('email') !== '') 
                        echo 'value="'.$_SESSION['email'].'"' ?> >

                    <label for="phone">Telefon</label>
                    <input type="text" name="phone" <?php if (getFS('phone') !== '') 
                        echo 'value="'.$_SESSION['phone'].'"' ?> >
                    
                    <label for="message">Wiadomość</label>
                    <textarea name="message"><?php if (getFS('message') !== '') 
                        echo $_SESSION['message'] ?></textarea>

                    <input type="submit" name="submit" id="submit" value="Wyślij" />

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
