<!DOCTYPE html>
<html lang="lv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rediģēt ierakstu</title>
  <link rel="stylesheet" href="/blog.css">
</head>
<body>
  <main class="container">
    <h1>Rediģēt ierakstu #<?= htmlspecialchars((string)($post->id ?? '')) ?></h1>

    <section class="card">
      <form action="/posts/<?= urlencode((string)($post->id ?? '')) ?>/update" method="POST">
        <label for="body">Saturs</label>
        <textarea id="body" name="body" required><?= htmlspecialchars($post->body ?? $post->content ?? $post->text ?? '') ?></textarea>
        <button type="submit">Saglabāt izmaiņas</button>
      </form>
    </section>

    <p><a href="/posts/<?= urlencode((string)($post->id ?? '')) ?>">Atpakaļ uz ierakstu</a></p>
  </main>
</body>
</html>