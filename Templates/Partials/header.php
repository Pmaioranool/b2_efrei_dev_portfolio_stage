<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Assets/CSS/style.css">
    <title><?= $headerData["title"] ?></title>
</head>

<body>
    <header>
        <nav>
            <a href="/"><?= $headerData["head"]["nav"]["link1"] ?></a>
            <a href="\Assets\PDF\Lucas_MAIORANO_CV.pdf.pdf" download><?= $headerData["head"]["nav"]["link2"] ?></a>
            <a href="/material"><?= $headerData["head"]["nav"]["link3"] ?></a>
            <a href="/technologies"><?= $headerData["head"]["nav"]["link4"] ?></a>
            <a href="/projects"><?= $headerData["head"]["nav"]["link5"] ?></a>
        </nav>
        <form action="/setLanguage" method="POST" class="language-form">
            <select name="language" class="language-select">
                <?php foreach ($headerData['head']['form']['select'] as $key => $value) {
                    ?>
                    <option value="<?= $key ?>" <?= $_SESSION['language'] != "$key" ? 'selected' : '' ?>>
                        <?= $value ?>
                    </option>
                <?php } ?>
            </select>
            <button type="submit" class="language-button">
                <?= $headerData["head"]["form"]['button'] ?>
            </button>
        </form>
    </header>