<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Esercizio 7.5</title>
        <meta charset="utf-8">
        <meta name="author" content="Paolo Aimar">
    </head>
    <body>
        <?php
            if(isset($_REQUEST["nomeProd"]) && $_REQUEST["nomeProd"] != "" && isset($_REQUEST["prezzoProd"]) && $_REQUEST["prezzoProd"] != "" && isset($_REQUEST["button1"]) && $_REQUEST["button1"] != ""){
                //in questo caso devo mettere anche il controllo del bottone, nonostante ci sia già checked sulla pagina HTML in quanto non sappiamo quali altre pagine 
                //HTML possono interpellare il nostro server
                $nome_prodotto = $_REQUEST["nomeProd"];
                $prezzo_prodotto = $_REQUEST["prezzoProd"];
                $iva = $_REQUEST["button1"];
                $prezzo_con_iva = $prezzo_prodotto + $iva*$prezzo_prodotto;
                printf("<p>il nome del prodotto è %s mentre il prezzo comprensivo di iva è: %.2f </p>", $nome_prodotto, $prezzo_con_iva);
            }else if(!isset($_REQUEST["nomeProd"]) || $_REQUEST["nomeProd"] != "")
                echo "<p>il nome del prodotto non è stato inserito correttamente o non è stato ricevuto dal server web</p>";
            else if(!isset($_REQUEST["prezzoProd"]) || $_REQUEST["prezzoProd"] != "")
                echo "<p>il prezzo del prodotto non è stato inserito correttamente o non è stato ricevuto dal server web</p>";
            else if(!isset($_REQUEST["button1"]) || $_REQUEST["button1"] != "")
                echo "<p>il bottone dell'iva non è stato selezionato correttamente o non è stato ricevuto dal server web</p>";
            
        ?>
    </body>
</html>