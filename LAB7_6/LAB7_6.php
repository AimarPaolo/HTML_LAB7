<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Esercizio 7.5</title>
        <meta charset="utf-8">
        <meta name="author" content="Paolo Aimar">
        <link rel="stylesheet" type="text/css" href="LAB7_6.css" >
    </head>
    <body>
        <?php
            if(isset($_REQUEST["nomeProd"]) && $_REQUEST["nomeProd"] != "" && isset($_REQUEST["prezzoProd"]) && $_REQUEST["prezzoProd"] != "" && isset($_REQUEST["button1"]) && $_REQUEST["button1"] != ""){
                if(isset($_REQUEST["check1"]) && $_REQUEST["check1"]!=""){
                    $nome_prodotto = $_REQUEST["nomeProd"];
                    $prezzo_prodotto = $_REQUEST["prezzoProd"];
                    $iva = $_REQUEST["button1"];
                    $prezzo_con_iva = $prezzo_prodotto + $iva*$prezzo_prodotto;
                    $tipoProd = gettype($_REQUEST["nomeProd"]);
                    $tipoPrezzo = gettype($_REQUEST["prezzoProd"]);
                    $tipoButton = gettype($_REQUEST["button1"]);
                    printf("<p>il nome del prodotto è %s mentre il prezzo comprensivo di iva è: %.2f </p>", $nome_prodotto, $prezzo_con_iva);
                    echo "<table>\n";
                    echo "<thead>\n<tr><th>nome</th><th>tipo</th><th>valore</th></tr>\n</thead>\n";
                    echo "<tbody>\n<tr><td>nomeProd</td><td>$tipoProd</td><td>$nome_prodotto</td></tr>\n";
                    echo "<tr><td>prezzoProd</td><td>$tipoPrezzo</td><td>$prezzo_prodotto</td></tr>\n";
                    echo "<tr><td>button1</td><td>$tipoButton</td><td>$iva</td></tr>\n";
                    echo "</tbody></table>";
                }else{
                    $nome_prodotto = $_REQUEST["nomeProd"];
                    $prezzo_prodotto = $_REQUEST["prezzoProd"];
                    $iva = $_REQUEST["button1"];
                    $prezzo_con_iva = $prezzo_prodotto + $iva*$prezzo_prodotto;
                    printf("<p>il nome del prodotto è %s mentre il prezzo comprensivo di iva è: %.2f </p>", $nome_prodotto, $prezzo_con_iva);
                }
            }else if(!isset($_REQUEST["nomeProd"]) || $_REQUEST["nomeProd"] != "")
                echo "<p>il nome del prodotto non è stato inserito correttamente o non è stato ricevuto dal server web</p>";
            else if(!isset($_REQUEST["prezzoProd"]) || $_REQUEST["prezzoProd"] != "")
                echo "<p>il prezzo del prodotto non è stato inserito correttamente o non è stato ricevuto dal server web</p>";
            else if(!isset($_REQUEST["button1"]) || $_REQUEST["button1"] != "")
                echo "<p>il bottone dell'iva non è stato selezionato correttamente o non è stato ricevuto dal server web</p>";
            
        ?>
    </body>
</html>