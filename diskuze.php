<?php
session_start()
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>


<head>
    <title>Diskuze</title>
</head>
<body>
<div>
    Přihlášený uživatel - <?= $_SESSION['login']?>
</div>
<div>
    <a href="index.php?logout">Odhlásit</a>
</div>
<h1>Diskuze</h1>
<h2>Přidání zprávy</h2>

<form action="diskuze.html" method=get">
    Jméno: <input type="text" name="jmeno">
    Zpráva: <input type="text" name="zprava">
    <input type="submit" value="Odeslat">
</form>

<?php
if(isset($_GET['jmeno']) AND isset($_GET['zprava']))
{echo('Uživatel '.$_GET['jmeno'].' napsal: '.$_GET['zprava'].' </span>');}
else {};
?>


</body>
</html>