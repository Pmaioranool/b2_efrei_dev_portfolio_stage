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
            <a href="\Assets\PDF\Lucas_MAIORANO_CV.pdf.pdf" download>télécharger mon CV</a>
            <a href="/material">material</a>
            <a href="/technologies">technologies</a>
            <a href="/projects">projects</a>
        </nav>
        <form action="/setLanguage" method="POST" class="language-form">
            <select name="language" class="language-select">
                <option value="fr" <?= $_SESSION['language'] == 'en' ? 'selected' : '' ?>>Français</option>
                <option value="en" <?= $_SESSION['language'] == 'fr' ? 'selected' : '' ?>>English</option>
            </select>
            <button type="submit"
                class="language-button"><?= $_SESSION['language'] === 'en' ? 'changer' : 'change' ?></button>
        </form>
    </header>