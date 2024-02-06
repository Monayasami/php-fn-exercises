<?php

// Esercizio 1: Testa o Croce. Creare una funzione che, ad ogni invocazione, restituisca casualmente Testa o Croce. 

/* function testaCroce() {
    $scelta = rand(0, 1);
    if ($scelta == 0) {
      return "Croce";
    } else {
      return "Testa";
    }
 }
  
// $testaCroce = fn() => rand(0, 1) ? "Croce" : "Testa";
echo "il risultato è : " . testaCroce();
 */

// Esercizio 2: Area di un triangolo. Creare una funzione che calcoli l'area di un triangolo passando la base e l'altezza durante l'invocazione della funzione. Assicurarsi che i valori in input siano di tipo integer o float. Eseguire due invocazioni, dovranno uscire questi risultati:

/* function areaDiUnTriangolo(int | float $base, int | float $altezza) : int | float {
  return ($base * $altezza) / 2;
}

echo areaDiUnTriangolo(5, 10),'<br>';
echo areaDiUnTriangolo(2.5, 7.6),'<br>'; */
  
/* Esercizio 3: Somma per riferimento. Creare una funzione ricorsiva che prende in input una sola una variabile inizializzata a 10. Questo numero andrà ridotto di 1 unità ad ogni ricorsione. Effettuare la somma di tutti i numeri ad ogni ricorsione. Alla fine, mostrare sia la somma finale (che dovrà essere di valore 55), sia la variabile che dovrà avere valore 1.  */

/* $inizio = 10;
echo $inizio; // 10

function sommaRicorsiva(&$inizio) {
  if ($inizio > 1) {
    $count = $inizio;
    $inizio--;
    return $count + sommaRicorsiva($inizio);
  } else {
    return 1;
  }
}

echo sommaRicorsiva($inizio); // 55
echo $inizio; // 1
 */

/* Esercizio 4: Sequenza di Fibonacci. La sequenza di Fibonacci è una serie in cui ogni numero successivo è la somma dei due numeri precedenti. Gli inizi della sequenza sono 0 e 1. Stampare a schermo 10 successioni. */

/* function fibonacci($n) {
  $num1 = 0;
  $num2 = 1;
  // Stampa i primi due numeri della sequenza
  echo "Sequenza di Fibonacci: \$num1: $num1, \$num2: $num2. <br>";
  // Calcola e stampa il resto della sequenza fino a n
  for ($i = 0; $i < $n; $i++) {
      $num3 = $num1 + $num2;
      echo "$num3 ";
      // Aggiorna i numeri per la prossima iterazione
      $num1 = $num2;
      $num2 = $num3;
  }
}
fibonacci(10); */

/* Esercizio 5: Elenco di alunni. Creare una funzione per riempire un array di alunni e stamparli. Inizialmente, per evitare errori, sarà obbligatorio inserire almeno due alunni: "Martina" e "Agostino". Nell'invocazione si potranno passare quanti studenti desideriamo. Questi verranno aggiunti dinamicamente all'array degli alunni, e infine stamparli in pagina con le loro posizioni. */


 // 1. Creare funzione (inserire almeno 2 alunni, ...più_alunni)

    // 1a. Creare array degli alunni

    // 1b. Inserire altri alunni passati come parametri 

    // 1c. Inserire ...più_alunni all'interno dell'array alunni iniziale

    // 1d. stampare gli alunni con ciclo su array finale

  // 2. invoazione della funzione (almeno 2 alunni "Martina" e "Agostino", ..........)

  // Test nomeFunzione("Martina", "Agostino")
  // Test2 nomeFunzione("Martina", "Agostino", "Federico", "Luca", "Mona", "Matteo")

  /* Risultato: Elenco alunni
    1. alunno 1
    2. alunno 2
    3. alunno 3
  */

  /* function stampaAlunni($alunno1, $alunno2, ...$alunni) {
    $arrayAlunni = [$alunno1, $alunno2]; 
    echo "Array iniziale <br>";
    var_dump($arrayAlunni); 

    foreach($alunni as $alunno) {
      $arrayAlunni[] = $alunno;
    }

    echo "Array finale <br>";
    foreach ($arrayAlunni as $pos => $alunno) {
      echo "$pos . " . ($pos + 1) . ": " . "$alunno <br>";
    }
  }
  
  // stampaAlunni("Martina", "Agostino");
  stampaAlunni("Martina", "Agostino", "Federico", "Luca", "Mona", "Matteo"); */


    