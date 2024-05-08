<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Esercizio 7.4</title>
        <meta charset="utf-8">
        <meta name="author" content="Paolo Aimar">
        <link rel="stylesheet" type="text/css" href="LAB7_4.css" >
        <!--utilizzo inoltre un file CSS per curare la grafica-->
    </head>
    <body>
        <?php
         if(isset($_REQUEST['menu1']) && $_REQUEST['menu1']!=""){         
            $numInserito = (int)$_REQUEST['menu1'];
            if($numInserito!=NULL && $numInserito>0 && $numInserito<=10 ){
                echo "<h1>Tabella dei quadrati e dei cubi sino al numero $numInserito</h1>\n";
                echo "<table>\n";
                echo "<thead>\n";
                echo"<tr><th>numero</th><th>quadrato</th><th>cubo</th></tr>\n";
                echo"</thead>\n";
                echo"<tbody>\n";
                for ($i = 1; $i <= $numInserito; $i++){
                    $quad = $i*$i;
                    $cubo= $quad*$i;
                    echo"<tr><td> $i</td><td> $quad </td><td> $cubo </td></tr>\n";}
                echo" </tbody>\n";
                echo"</table>\n";}
            else{
                echo "<p> ERRORE: &Egrave; stato inserito un valore non valido. </p>";}
        }
        else{
            echo "<p> ERRORE: &Egrave; obbligatorio riempire tutti i campi di testo. </p>";}
       ?>
    </body>
</html>