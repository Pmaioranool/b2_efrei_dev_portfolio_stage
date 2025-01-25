<main>
    <article>
        <h1><?= $data["title"] ?></h1>
        <h2><?= $data["title"] ?></h2>
        <p><?= $data["description"] ?></p>
        <p><?= $data["timeText"] ?><?= $data["time"] ?></p>
        <ul>
            <h2><?= $data["technologiesText"] ?></h2>
            <?php foreach ($data["technologies"] as $value) { ?>
            <li><?= $value ?></li>
            <?php } ?>
        </ul>
        <a href="<?= $data["link"] ?>" class="aBlack" target="_blank"></a><br>
        <a href="/projects" class="aBlack"><?= $data["backText"] ?></a>
    </article>
</main>