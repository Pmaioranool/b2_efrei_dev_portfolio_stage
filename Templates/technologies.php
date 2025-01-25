<main class="columns">
    <h1><?= $data['title'] ?></h1>
    <?php foreach ($data['technos'] as $key => $value) { ?>
    <article class="technologies-article">
        <h2><?= $key ?>
            <img src="<?= $value['logo'] ?>" alt="logo de <?= $key ?>">
        </h2>
        <p>
            <?= $data['descriptionText'] ?>
            <?= $value['description'] ?>
        </p>
        <p><?= $data['principaleText'] ?>
            <strong><?= $value['principale'] ?></strong>
        </p>
    </article>
    <?php } ?>
</main>