<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Esercizio 7.3</title>
        <meta charset="utf-8">
        <meta name="author" content="Paolo Aimar">
        <script>
            "use strict";
            function validateForm(formId){
                let n1 = document.getElementById(formId).val1.value;
                let n2 = document.getElementById(formId).val2.value;
                if(n1 != "" && n2 !== ""){
                    return true;
                }else{
                    window.alert("è necessario inserire un valore dentro le caselle di input...");
                    return false;
                }
                    

            }
        </script>
    </head>
    <body>
        <h1>Ecco la somma che è stata richiesta</h1>
        <?php
            if(isset($_GET["val1"]) && $_GET["val1"] != "" && isset($_GET["val2"]) && $_GET["val2"] != ""){
                //anche se è già stato fatto un controllo dal lato client, provvedo a farlo anche dal lato server per evitare problemi 
                //di ricezione dati
                $var1 = $_GET["val1"];
                //si dovrebbe utilizzare REQUEST invece di GET perchè non sappiamo (forse) di quale pagina HTML può contattare il server
                $var2 = $_GET["val2"];
                $sum = $var1 + $var2;
                echo "<p>$var1 + $var2 = $sum</p>";
            }else if(!isset($_GET["val1"]) && $_GET["val1"] == "")
                echo "Il valore 1 non è stato inserito";
            else if(!isset($_GET["val2"]) && $_GET["val2"] == "")
                echo "Il valore 2 non è stato inserito";
            echo "<a href=\"LAB7_3.html\">Tornare alla pagina iniziale<a>";
        ?>
    </body>
</html>