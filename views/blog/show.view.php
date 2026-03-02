<!DOCTYPE html>
<html lang="lv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apskatīt ierakstu</title>
</head>
<body>
  <h1>Apskatīt ierakstu</h1>
  <p><strong>Saturs:</strong></p>
  <p><?= htmlspecialchars($post['content'] ?? 'Saturs nav pieejams') ?></p>
  <a href="/posts">Atpakaļ uz sarakstu</a>
</body>
</html>