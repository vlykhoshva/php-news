<?php
/**
 * @var $this \App\View
 * @var $newsList \App\NewsModel[]
 */
?>

<html>
<head>
</head>
<body>
<h1>News</h1>
<?php foreach ($newsList as $news) : ?>
    <article>
        <h2>
            <a href="/news/<?= $news->id ?>">
                Section of news #<?= $news->id ?>
            </a>
        </h2>
        <time datetime="<?= $news->creation_date ?>"><?= $news->creation_date ?></time>
        <p><?= $news->short_text ?></p>

    </article>
<?php endforeach; ?>
</body>
</html>

