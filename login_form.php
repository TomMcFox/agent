<?php

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
