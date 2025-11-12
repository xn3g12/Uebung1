<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Uebung1</h1>
    <?php
    echo "Hello Welt";
    ?>
    <?php
    //$_GET ... $_POST --> $_REQUEST
    if (isset($_REQUEST["last"])) {
         $last = $_REQUEST["last"];
         $last += $_REQUEST["zahl"];
    }
    else {
        $last = 0; 
    }
    ?>
<form action="/uebung1.php">
  <label for="zahl">Zahl:</label><br>
  <input type="text" id="zahl" name="zahl" placeholder="0"><br>
  <input type="hidden" id="last" name="last" value="<?=$last?>"><br>
  Die aktuelle Summe aller Zahlen ist <b><?=$last?></b>.
  <br>
  <input type="submit" value="Schicken"><br><br>
</form>
 
<?php
// Prüfen, ob beide Werte über GET übergeben wurden
if (isset($_GET["tankZahl1"]) && isset($_GET["tankZahl2"])) {
// eingabe auslesen und in float umwandeln
    $tankZahl1 = floatval($_GET["tankZahl1"]);
    $tankZahl2 = floatval($_GET["tankZahl2"]);
    //Fixe Preis
    $preis = 1.499;
    // Gesamtkosten berechnen
    $kosten = ($tankZahl1 + $tankZahl2) * $preis;
    // Ergebnis anzeigen
    echo "<p>Die Benzinkosten betragen <b>$kosten €</b></p>";
}
?>
<!-- Formular zum Eingeben der beiden Tankfüllungen -->
<form action="/uebung1.php" method="get">
    <!-- Eingabefeld-->
    <label for="tankZahl1">Tankfüllung 1:</label><br>
    <input type="number" id="tankZahl1" name="tankZahl1" placeholder="0" step="0.01"><br><br>
    <label for="tankZahl2">Tankfüllung 2:</label><br>
    <input type="number" id="tankZahl2" name="tankZahl2" placeholder="0" step="0.01"><br><br>
    <!-- Button zum Absenden des Formulars -->
    <input type="submit" value="Ausgeben">
</form>

</body>
</html>