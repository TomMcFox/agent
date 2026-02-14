<?php
$domain = 'www.test.de';
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Optimierter Titel für Suchmaschinen | Keyword</title>
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
    <div id="screen" class="login-container">
      <form class="login-form" action="" method="POST">
        <h2>Login</h2>
        <div class="input-group">
          <label for="username">Benutzername</label>
          <input type="text" id="username" name="username" required>
        </div>
        <div class="input-group">
          <label for="password">Passwort</label>
          <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Anmelden</button>
      </form>
    </div>
  </main>

  <div>test</div>
       
</body>
</html>
