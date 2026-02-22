<?php

define('WEBSITE_ACCESS', true);
require_once __DIR__ . '/config/database.php';
$db = Database::getInstance();
if ($db instanceof PDO) {echo "Die Verbindung steht und ist ein gültiges PDO-Objekt.";} else {echo "Verbindung unterbrochen.";}
$db = null;

$login =  require __DIR__ . '/config/login.php';
?>

<form class="login-form" action="" method="POST">
    <h2><?= htmlspecialchars($login['domain']['titel']) ?></h2>
    <div class="input-group">
        <label for="username">Benutzername</label>
        <input type="text" id="username" name="username" required value="<?= htmlspecialchars($login['login']['user']) ?>">
    </div>
    <div class="input-group">
        <label for="password">Passwort</label>
        <input type="password" id="password" name="password" required value="<?= htmlspecialchars($login['login']['passwort']) ?>">
    </div>
    <button type="submit">Anmelden</button>
</form>
