<?php
function check_Cognome($cognome){
    //$cognome = trim($cognome);

    if (empty($cognome)) {
        echo "Non è presente nessun cognome.";
    }

    if (preg_match('/^[a-zA-Z\s]+$/', $cognome)) {
        echo "Il cognome '$cognome' contiene solo lettere, Giusto.";
    } else {
        echo "Il cognome '$cognome' ha dei simboli, dei numeri, Correggilo.";
    }

    if (strlen($cognome) < 3) {
        echo "Il cognome deve essere lungo almeno 3 caratteri.<br>";
    }
}

function check_Int ($valNumerico){
    if (isset($valNumerico)){
            echo "L'input del programma è '$valNumerico'<br>";
        }else{
            echo "Non è presente nessun numero<br>";
        }

        if (is_numeric($valNumerico) && ctype_digit(strval($valNumerico))){
            echo "Il numero è corretto, come richiesto, intero e senza segno<br>";
        }else{
            echo "Non è un intero senza segno, è presente un segno oppure altri caratteri non idonei, Correggi!<br>";
        }
    }


function check_RealN($n) {
    $n_str = (string) $n;
    
    if (str_starts_with($n_str, "0x") || str_starts_with($n_str, "0X") || 
        (str_starts_with($n_str, "0") && strlen($n_str) > 1 && $n_str[1] != '.')) {
        return "Errato";
    }
    
    return "Corretto";
}

function check_EU_State($stato){
$righe = file("State.txt");
    foreach ($righe as $riga) {
        if($stato == $riga){
            return "Corretto";
        }
    }
    return "Errato";
}

function check_Comuni($comune){
    $righe = file("Comuni.txt");
    foreach ($righe as $riga) {
        $riga = trim($riga);

        [$nomeComune, $cap] = explode("=>", $riga);

        $nomeComune = trim($nomeComune);
        if ($comune === $nomeComune) {
            return "Corretto";
        }
    }
    return "Errato";
}

function check_CAPeComune($comune, $cap){
$righe = file("Comuni.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    // normalizzo l'input (minuscolo, trim)
    $comune = trim($comune);
    $cap = trim((string)$cap);

    foreach ($righe as $riga) {
        $riga = trim($riga);
        if ($riga === '') continue;
        if (strpos($riga, '=>') === false) continue;

        [$nomeComune, $capComune] = array_map('trim', explode('=>', $riga, 2));

        if ($nomeComune === $comune && $capComune === $cap) {
            return "Corretto";
        }
    }

    return "Errato";
}

$menu = -1;
while($menu != 0){
    print_r("Scegli l'operazione da svolgere:\n1.Chech_Cognome\n2.Check_Int\n3.Check_RealN\n4.Check_EU_State\n5.Check_Comuni\n6. Check_CAPeComune\n");
    $menu = readline();
    switch ($menu) {
        case 0:
            echo ("exit...\n");
        break;

        case 1:
            echo (check_Cognome("Saramin")."\n");
        break;
        case 2:
            echo (check_Int(3) . "\n");
        break;
        case 3:
            echo (check_RealN(45) . "\n");
        break;
        case 4:
            echo (check_EU_State("italia") . "\n");
        break;
        case 5;
            echo (check_Comuni("venezia") . "\n");
        break;
        case 6:
            echo (check_CAPeComune("jesolo", 30016) . "\n");
        break;

    }
}

?>