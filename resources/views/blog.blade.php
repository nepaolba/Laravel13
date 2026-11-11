<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
     <a href="/">Home</a>
        <a href="/about">About Us</a>
        <a href="/blog">Blog</a>
        <a href="/contact">Contact</a>
    <h1>Blog</h1>
    <article>
        <h2>{{ $articles1['title'] }}</h2>
        <p>{{ $articles1['content'] }}</p>
    </article>
    <article>
        <h2>{{ $articles2['title'] }}</h2>
        <p>{{ $articles2['content'] }}</p>
    </article>
</body>
</html>