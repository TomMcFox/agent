<?php

define('WEBSITE_ACCESS', true);
define('WEBSITE_URL', 'https://' . $_SERVER['HTTP_HOST']);
define('WEBSITE_ROOT', __DIR__);

error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', WEBSITE_ROOT . '/php_error.log');

$login =  require __DIR__ . '/config/login.php';
require_once __DIR__ . '/config/database.php';

$titel =  $login['domain']['titel'];
$domain = $login['domain']['url'];

$db = Database::getInstance();
/* Check ob Datanbankverbindung erfolgreich 
if ($db instanceof PDO) {echo "Die Verbindung steht und ist ein gültiges PDO-Objekt.";} else {echo "Verbindung unterbrochen.";}
*/
/*
$id = 2;
$stmt = $db->prepare("SELECT * FROM test WHERE id = :id");
$stmt->execute(['id' => $id]);
$call = $stmt->fetch(PDO::FETCH_ASSOC);


$call['TEXT'];
*/


?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titel ?> | Keyword</title>
    <meta name="description" content="Hier steht eine aussagekräftige Beschreibung der Seite, die in den Suchergebnissen angezeigt wird (ca. 150-160 Zeichen).">
    <link rel="canonical" href="https://<?= $domain ?>/">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://<?= $domain ?>/">
    <meta property="og:title" content="Optimierter Titel für Social Media">
    <meta property="og:description" content="Ansprechende Kurzbeschreibung für das Teilen auf sozialen Netzwerken.">
    <meta property="og:image" content="https://<?= $domain ?>/images/og-image.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://<?= $domain ?>/">
    <meta property="twitter:title" content="Optimierter Titel für Twitter">
    <meta property="twitter:description" content="Ansprechende Kurzbeschreibung für Twitter.">
    <meta property="twitter:image" content="https://<?= $domain ?>/images/og-image.jpg">

    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="assets/style.min.css">
</head>
<body>
  <main>
    <div id="screen-placeholder" class="login-container">
      <p>Lade Formular...</p>
    </div>
  </main>      

    <script src="assets/brokenjava.js"></script>
</body>
</html>

<?php $db = null; ?>