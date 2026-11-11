<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
     <a href="/">Home</a>
        <a href="/about">About Us</a>
        <a href="/blog">Blog</a>
        <a href="/contact">Contact</a>
    <h1>Contact Us</h1>
    <p>Name: {{ $contact['name'] }}</p>
    <p>Email: {{ $contact['email'] }}</p>
    <p>Message: {{ $contact['message'] }}</p>
</body>
</html>