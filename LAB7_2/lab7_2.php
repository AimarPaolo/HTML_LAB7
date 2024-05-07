<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Esercizio 7.2</title>
        <meta charset="utf-8">
        <meta name="author" content="Paolo Aimar">
    </head>
    <body>
        <h1>Testo che è stato ricevuto dal server: </h1>
        <?php
            if(isset($_REQUEST['testo']) && $_REQUEST['testo'] != ""){
                $testo = $_REQUEST['testo'];
                echo "<p>il testo inserito nel form è: $testo</p>";
            }else
                echo "<p>DOVEVI INSERIRE UN VALORE NEL CAMPO DI TESTO</p>"
            //non si possono inserire le parentesi graffe se il valore è
            //uno solo, è necessario avere più valori se le si vuole aggiungere
        ?>
    </body>
</html>