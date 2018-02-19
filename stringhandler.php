<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Scripting MD1A MD1B">
    <meta name="author" content="Ma">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>PHP String handler opdracht</title>
</head>
<body>
<img src ="https://www.ma-web.nl/static/vector/Logo_blok.svg"  alt = "logo" width = "30">
<div class="wrapper">
    <form method="GET" action="stringhandler.php">
        <fieldset>
            <legend>Stringhandler basis</legend>
            <input type = "text" name = "input1"  placeholder = " string 1"><br>
            <input type = "text" name = "input2"   placeholder = " string 2">
            <input type = "submit"  id = "submit" name = "submit" value = "submit">
        </fieldset>
    </form>
    <hr>
    <ul>
        <li class="showSpaces">Ingevoerde string 1: <?php echo $_GET["input1"];?></li>
        <li class="showSpaces">Ingevoerde string 2: <?php echo $_GET["input2"];?></li>
        <li>String 1 getrimd trim(): <?php echo trim($_GET["input1"]); ?></li>
        <li>String 2 getrimd trim(): <?php echo trim($_GET["input2"]); ?></li>
        <li>String 3 is de concatenation van string 1 en string 2: <?php $string3 = $_GET["input1"] . $_GET["input2"];  echo $string3;?></li>
        <li>De lengte van string 3 is: <?php echo strlen($string3) . " Characters"; ?></li>
        <li>Zoeken naar spaties. Er zit een spatie op positie <?php echo strrpos($string3," ");?></li>
        <li>Zoeken naar @. Er zit een @ op positie <?php echo strrpos($string3, "@");?></li>
        <li>Zoeken naar "." . Er zit een  "."  op positie <?php echo strrpos($string3, ".");?></li>
        <li>Zoek naar substring <strong>"PHP"</strong> vervang dit door <strong>"NodeJS"</strong> <?php echo str_replace("PHP", "NodeJS", "$string3"); ?></li>
        <li>Wijzig de eerste letter van string 3 naar hoofdletter: <?php echo ucfirst($string3);?></li>
        <li>Alles in hoofdletters: <?php echo strtoupper($string3)?></li>
        <br>
<hr>
        <li><?php if (strpos($string3, "@")!== false)
            {
                echo $string3 . " zou een geldig e-mail adres zijn.";
            }

            else if (strpos($string3, "@")!== true)
            {
                echo "Dit zou geen geldig e-mail zijn.";
            }
            ?></li>
    </ul>
    <hr>
    <li>Opdracht:<br> Stringhandler. Maak de PHP code voor <a href="http://schw.hosts.ma-cloud.nl/stringhandler/stringhandler.php">Stringhander<a>
    <li>Hoe moet jij inleveren?: <br>
1) Link naar de werkende code in jouw portfoliomap bij Ma-cloud<br>
        2) Link naar jouw code bij GITHUB</li>
    <li>Bonus opdracht: maak PHP code waarmee jij controleert of een input een geldig e-mail adres zou kunnen zijn. Met JS controleren is niet toegestaan.</li>
    <li>Bonus opdracht: na submitten form, schrijf de eerder ingevoerde strings terug met PHP in de formulier invoer velden</li>
    </ol>
</div>
</body>
</html>