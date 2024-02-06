<?php
/* 
Per ogni esercizio seguente sarà necessario creare un form per acquisire in input dinamicamente dei dati, e mostrarli in pagina.
 */

/* 1. Esercizio 1: Calcolo dell'IVA. L'utente inserirà un numero simulando il prezzo netto di un prodotto. Il prezzo verrà acquisito da una nostra funzione che aggiungerà il 20% di IVA. Una seconda funzione si occuperà di mostrare a schermo il prezzo ivato.  */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-fn-exercises</title>
</head>

<body>
    <section>
        <h3>Esercizio 1: Calcolo IVA</h3>
        <form method="post" action="">
            Inserisci il prezzo netto:
            <input type="number" name="netto" step="0.01">
            <input type="submit" name="submit" value="Calcola IVA">
        </form>

        <?php
        function calcolaIVA($prezzoNetto)
        { //* Calcola l'IVA al 20%
            return $prezzoNetto * 0.2;
        }
        function mostraPrezzoIvato($prezzoNetto, $IVA)
        { //* Mostra il prezzo ivato
            $prezzoIvato = $prezzoNetto + $IVA;
            echo "Il prezzo ivato è: " . number_format($prezzoIvato, 2) . "€";
        }

        if (isset($_POST['submit'])) { // Verifica se il form è stato inviato
            
            //* Verifica se la chiave "netto" esiste in $_POST e se è un numero valido
            if (isset($_POST['netto']) && is_numeric($_POST['netto']) && $_POST['netto'] != '' && $_POST['netto'] > 0) {
                $netto = $_POST['netto'];
                $IVA = calcolaIVA($netto); //* Calcola l'IVA
                mostraPrezzoIvato($netto, $IVA); //* Mostra il prezzo ivato
            } else {
                echo 'Inserisci un prezzo netto valido';
            }
        }   
    ?>
     </section>
     <?php
    /* 2. Esercizio 2: Mostrare le tabelline. Preso un numero in input da un form, creare una funzione che calcolerà i multipli di quel numero da 1 a 10. La funzione inserirà i multipli calcolati in un array. Una seconda funzione prenderà in input l'array utilizzando una closure, e renderizzerà in pagina una tabella html con due righe: quella superiore va da 1 a 10, mentre quella inferiore mostrerà i multipli del numero per i numeri nella riga di sopra. */
    ?>

    <section>
    <h3>Esercizio 2: Tabelline</h3>
        <form method="post" action="">
            Inserisci un numero per calcolare la tabellina.
            <input type="number" name="numero">
            <input type="submit" name="submit" value="Genera tabellina">
        </form>

        <?php
        function calcolaTabellina($numero)
        {
            $tabellina = [];
            //* Calcola i multipli del numero da 1 a 10 e li aggiunge all'array
            for ($i = 1; $i <= 10; $i++) {
                $tabellina[$i] = $numero * $i;
            }
            return $tabellina;
        }
      

        function mostraTabellina($tabellina) 
        {
            echo "<table>";
            echo "<tr><td>Moltiplicatori: </td>";

            //* Stampa i numeri da 1 a 10
            for ($i = 1; $i <= 10; $i++) {
                echo "<td>" . $i . "</td>";
            }
            echo "</tr>";

            //* Stampa i multipli
            echo "<tr><td>Multipli: </td>";
            foreach ($tabellina as $moltiplicatore) {
                echo "<td>" . $moltiplicatore . "</td>";
            }
            echo "</tr>";
            echo "</table>";
        }

        
        // Verifica se il form è stato inviato
        if (isset($_POST['submit'])) {
            //* Verifica se la chiave "numero" esiste in $_POST e se è un numero valido
            if (isset($_POST['numero']) && is_numeric($_POST['numero'])) {
                $numero = $_POST['numero'];

                //* Calcola la tabellina
                $tabellina = calcolaTabellina($numero);

                //* Mostra la tabellina
                mostraTabellina($tabellina);
            } else {
                echo "Inserisci un numero valido per generare la tabellina";
            }
        }
        ?>

    </section>



<?php
/* 3. Esercizio 3: Operazioni aritmetiche. Creare un form che acquisirà due numeri. Questi numeri verranno utilizzati come operandi delle seguenti operazioni aritmetiche: somma, differenza, moltiplicazione, divisione, resto della divisione, potenza, radice. Creare una funzione per ogni operazione aritmetica che restituisca il singolo risultato. Tutti i risultati dovranno essere passati ad un'ultima funzione che si occuperà di creare una tabella, e mostrerà i risultati di tutte le operazioni tra il primo e il secondo operando. */
?>


<?php
/* 4. Esercizio 4: Il seguente esercizio dovrà restituire una rata mensile che un cliente dovrà pagare. Creare un form con tre input numerici: l'importo desiderato, il tasso annuale, il numero di anni di pagamenti. Creare una funzione che, oltre il calcolo della rata mensile, utilizzi una callback che mostri la rata finale. La formula per il pagamento mensile di un prestito è la seguente: M = P [r(1+r)^n] / [(1+r)^n – 1], dove:
    ○ M è il pagamento mensile.
    ○ P è l'importo del prestito.
    ○ r è il tasso di interesse mensile (in forma decimale).
    ○ n è il numero di pagamenti (la durata del prestito in mesi).
 */
?>


</body>
</html>
