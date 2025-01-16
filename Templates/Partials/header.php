<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Assets/CSS/style.css">
    <title>Portfolio Lucas MAIORANO</title>
</head>

<body>
    <header>
        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </nav>
        <form action="/setLanguage" method="POST" class="language-form">
            <select name="language" class="language-select">
                <option value="fr" <?= $_SESSION['language'] == 'fr' ? 'selected' : '' ?>>Français</option>
                <option value="en" <?= $_SESSION['language'] == 'en' ? 'selected' : '' ?>>English</option>
            </select>
            <button type="submit" class="language-button">Change</button>
        </form>
    </header>