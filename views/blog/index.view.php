
<!DOCTYPE html>
<html lang="lv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Visi ieraksti</title>
  <link rel="stylesheet" href="/blog.css">
</head>
<body>
  <main class="container">
    <h1>Visi bloga ieraksti</h1>
    <?php if (empty($posts)): ?>
      <p>Nav neviena ieraksta.</p>
    <?php else: ?>
      <ul class="post-list">
        <?php foreach ($posts as $post): ?>
          <li class="post-card">
            <p>
              <?= nl2br(htmlspecialchars($post['body'] ?? $post['content'] ?? $post['text'] ?? '')) ?>
            </p>
            <?php if (!empty($post['id'])): ?>
              <div class="actions">
                <a href="/posts/<?= urlencode((string)$post['id']) ?>">Skatīt</a>
                <a href="/posts/<?= urlencode((string)$post['id']) ?>/edit">Rediģēt</a>
                <form action="/posts/<?= urlencode((string)$post['id']) ?>/delete" method="POST">
                  <button type="submit">Dzēst</button>
                </form>
              </div>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </main>
</body>
</html>
