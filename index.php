<?php
// **Descrizione**
// Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
// L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
// **Milestone 1**
// Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
// Scriviamo tutto (logica e layout) in un unico file *index.php*// **Milestone 2**
// Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file *functions.php* che includeremo poi nella pagina principale
// **Milestone 3**
// Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.


// **Milestone 4 (BONUS)**
// Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
// Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.

session_start();

$pass_len = $_GET["pass_len"] ?? "";
$pass_len = intval($pass_len);

include_once __DIR__ . '/functions.php';

if (!empty($pass_len)) {
    generate_rnd_password($pass_len);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="my_wrapper">
        <div class="my_container">

            <div class="container container-fluid">
                <div class="mb-5">
                    <h1 class="text-center">Strong Password Generator</h1>
                    <h2 class="text-center">Genera una Password sicura</h2>
                </div>

                <!-- blocco parametro valido -->

                <!-- FORM -->
                <form action="index.php" method="GET">
                    <div class="row">
                        <div class="col-6">
                            <label for="pass">lunghezza password</label>
                        </div>
                        <div class="col-6">
                            <input type="number" min="8" max="24" id="pass" name="pass_len">
                        </div>

                    </div>

                    <!-- spazio checkbox -->

                    <div class="row mt-5">
                        <div class="col-6">
                            <button class="btn btn-primary" type="submit">GENERA PASS</button>
                            <button class="btn btn-primary" type="reset">RESET</button>
                            <?php if ($pass_len != 0) { ?>
                                <a class="btn btn-primary" href="result.php">MOSTRA PASS</a>
                            <?php } ?>
                        </div>
                    </div>

                </form>
                <!-- / FORM -->


            </div>

        </div>
    </div>
</body>

</html>