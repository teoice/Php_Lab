<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calc</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		$conn = new mysqli("localhost", "root", "12345", "calcolatrice");
		if ($conn->connect_error) die("Connessione fallita");
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$op1 = $_POST["operando1"];
			$op = $_POST["operatore"];
			$op2 = $_POST["operando2"];
			$res = $_POST["risultato"];
			$exp = $op1 . $op . $op2 . "= " . $res;

			$stmt = $conn->prepare("INSERT INTO operazioni (operando1, operatore, operando2, risultato) VALUES (?, ?, ?, ?)");
			$stmt->bind_param("dsds", $op1, $op, $op2, $res);
			if ($stmt->execute()) {
				$stmt->close();
				$conn->close();
				// Evita il doppio inserimento al refresh
				header("Location: " . $_SERVER['PHP_SELF']);
				exit();
			} else {
				echo "Errore: " . $stmt->error;
				$stmt->close();
			}
		
			$stmt->close();
		}
	?>
	
	<div class="header">
		<ul class="menu">
			<a href="#"><li>Calcolatrice</li></a>
			<a href="#"><li>Convertitore</li></a>
			<a href="#"><li>Barometro</li></a>
			<a href="#"><li>BlaBleBlu</li></a>
		</ul>
	</div>

	<div class="content">
		<h1>Calcolatrice</h1>
		<input type="text" id="display" class="display" readonly>
		<div class="calcolatrice">
			<div class="row">
				<button onclick="getDisplay('9')">9</button>
				<button onclick="getDisplay('8')">8</button>
				<button onclick="getDisplay('7')">7</button>
				<button class="operator" onclick="getDisplay('+')">+</button>
			</div>
			<div class="row">	
				<button onclick="getDisplay('6')">6</button>
				<button onclick="getDisplay('5')">5</button>
				<button onclick="getDisplay('4')">4</button>
				<button class="operator" onclick="getDisplay('-')">-</button>
			</div>
			<div class="row">
				<button onclick="getDisplay('3')">3</button>
				<button onclick="getDisplay('2')">2</button>
				<button onclick="getDisplay('1')">1</button>
				<button class="operator" onclick="getDisplay('*')">x</button>
			</div>
			<div class="row">
				<button onclick="getDisplay">0</button>
				<button onclick="removeAll()">DEL</button>
				<button onclick="getValue()">=</button>
				<button class="operator" onclick="getDisplay('/')">/</button>
			</div>
		</div>
		<div class="funzionalità">
		<div class="cronologia" id="cronologia">
				<?php 

					$sql = "SELECT * FROM operazioni ORDER BY ID DESC LIMIT 10"; // ultimi 10
					$result = $conn->query($sql);
					echo "<h3>Cronologia</h3>";
					echo "<table class=\"tabella\">";
					echo "<tr>";
					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
							echo "<th>{$row['operando1']} {$row['operatore']} {$row['operando2']} = {$row['risultato']}</th>";
						}
					} else {
						echo "Nessuna operazione trovata.";
					}

					//echo "<th> kjk</th>";
					
					echo "</tr>";
					echo "</table>";
				?>
		</div>
		<div class="k">
			<p> ciao</p>
		</div>
	</div>
	</div>
	<div class="footer">
		<p>Contattaci su i nostri social!</p>
		<a href="https://open.spotify.com/intl-it"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-spotify" viewBox="0 0 16 16">
			<path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.669 11.538a.5.5 0 0 1-.686.165c-1.879-1.147-4.243-1.407-7.028-.77a.499.499 0 0 1-.222-.973c3.048-.696 5.662-.397 7.77.892a.5.5 0 0 1 .166.686m.979-2.178a.624.624 0 0 1-.858.205c-2.15-1.321-5.428-1.704-7.972-.932a.625.625 0 0 1-.362-1.194c2.905-.881 6.517-.454 8.986 1.063a.624.624 0 0 1 .206.858m.084-2.268C10.154 5.56 5.9 5.419 3.438 6.166a.748.748 0 1 1-.434-1.432c2.825-.857 7.523-.692 10.492 1.07a.747.747 0 1 1-.764 1.288"/>
		</svg></a>
		<a href="https://github.com/teoice"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
			<path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
		</svg></a>
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  			<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
		</svg>
	</div>
	
	<form id="formOperazione" method="POST" action="">
		<input type="hidden" name="operando1" id="operando1">
		<input type="hidden" name="operatore" id="operatore">
		<input type="hidden" name="operando2" id="operando2">
		<input type="hidden" name="risultato" id="risultato">
	</form>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>