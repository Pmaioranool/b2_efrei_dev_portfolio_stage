<main>
    <h1><?= $data["title"] ?></h1>
    <?php
    foreach ($data["projects"] as $key => $project) { ?>
    <article>
        <h2><?= $project['title'] ?></h2>
        <p><?= $project['description'] ?></p>
        <p><?= $data["importantText"]['timeText'] ?><?= $project['time'] ?></p>
        <ul>
            <h3><?= $data["importantText"]["technologiesText"] ?></h3>
            <?php foreach ($project['technologies'] as $value) { ?>
            <li><?= $value ?></li>
            <?php } ?>
        </ul>
        <a href="/projects/<?= $key ?>" class="aBlack"><?= $data["importantText"]["linkText"] ?></a>
        <br>
        <a href="<?= $project['link'] ?>" class="aBlack" target="_blank"><?= $data["importantText"]["repoText"] ?></a>
    </article>
    <?php } ?>
</main>