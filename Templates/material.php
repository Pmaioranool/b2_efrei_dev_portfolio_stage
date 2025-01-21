<main>
    <h1><?= htmlspecialchars($data["title"]) ?></h1>

    <article class="material-article">
        <h2><?= htmlspecialchars($data["article1"]["h2"]) ?></h2>
        <p><?= htmlspecialchars($data["article1"]["p"]) ?></p>
        <a href="https://www.boulanger.com/ref/1189783" target="_blank" rel="noopener noreferrer" class="aBlack">HP
            Pavilion 15-eg2048nf</a>
        <ul>
            <h3><?= htmlspecialchars($data["article1"]["ul"]["title"]) ?></h3>
            <li><?= htmlspecialchars($data["article1"]["ul"]["li1"]) ?></li>
            <li><?= htmlspecialchars($data["article1"]["ul"]["li2"]) ?></li>
            <li><?= htmlspecialchars($data["article1"]["ul"]["li3"]) ?></li>
            <li><?= htmlspecialchars($data["article1"]["ul"]["li4"]) ?></li>
        </ul>
    </article>

    <article class="material-article">
        <h2><?= htmlspecialchars($data["article2"]["h2"]) ?></h2>
        <p><?= htmlspecialchars($data["article2"]["p"]) ?></p>
        <ul>
            <h3><?= htmlspecialchars($data["article2"]["ul"]["title"]) ?></h3>
            <li><?= htmlspecialchars($data["article2"]["ul"]["li1"]) ?></li>
            <li><?= htmlspecialchars($data["article2"]["ul"]["li2"]) ?></li>
            <li><?= htmlspecialchars($data["article2"]["ul"]["li3"]) ?></li>
            <li><?= htmlspecialchars($data["article2"]["ul"]["li4"]) ?></li>
            <li><?= htmlspecialchars($data["article2"]["ul"]["li5"]) ?></li>
        </ul>
    </article>

    <article class="material-article">
        <h2><?= htmlspecialchars($data["article3"]["h2"]) ?></h2>
        <p><?= htmlspecialchars($data["article3"]["p"]) ?></p>
    </article>
</main>