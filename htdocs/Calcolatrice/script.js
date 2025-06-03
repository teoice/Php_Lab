let justCalculated = false; // flag globale

function getDisplay(value){
    const display = document.getElementById('display');

    if (justCalculated && !isNaN(value)) {
        display.value = value;  // Se è un numero dopo un calcolo, riparti da zero
    } else {
        display.value += value; // Altrimenti continua a scrivere
    }

    justCalculated = false;
}

function getValue() {
    const display = document.getElementById('display');
    const espressione = display.value;
    const match = espressione.match(/^(\d+\.?\d*)([+\-*/])(\d+\.?\d*)$/);

    let operando1, operatore, operando2, risultato;

    try {
        operando1 = match[1];
        operatore = match[2];
        operando2 = match[3];
        risultato = eval(display.value);
        display.value = risultato;
    } catch (e) {
        display.value = 'Error';
        return;
    }
    justCalculated = true;
    // Passa i valori al form nascosto e invia al PHP
    document.getElementById("operando1").value = operando1;
    document.getElementById("operatore").value = operatore;
    document.getElementById("operando2").value = operando2;
    document.getElementById("risultato").value = risultato;
    setTimeout(() => {
        document.getElementById("formOperazione").submit();}, 5500);    
}

function removeAll() {
    const display = document.getElementById('display');
    display.value = null;
}

function remove() {
	var display = document.getElementById('display');
	display.value = display.value.slice(0, -1);
}

document.addEventListener('keydown', function(event) {
    const validKeys = '0123456789+-*/.';
    const key = event.key;

    if (validKeys.includes(key)) {
        getDisplay(key);
    } else if (key === 'Enter') {
        getValue();
    } else if (key === 'Backspace') {
        remove();
    }
});

function sleep(ms) {
	return new Promise(resolve => setTimeout(resolve, ms));
}