<main>
    <article>
        <section class="image-container">
            <img src="/Assets/Images/profile/profileLoin.jpg" alt="photo de profile" class="image-profile">
        </section>
        <section>
            <h2><?= $data['article1']['title'] ?></h2>
            <ul>
                <?php foreach ($data['article1']['skills'] as $skill) { ?>
                    <li><?= $skill ?></li>
                <?php } ?>
            </ul>
        </section>
    </article>
    <article class="main-content">
        <h1><?= $data['article2']['title'] ?></h1>
        <p class="paragraph1"><?= $data['article2']['paragraph1'] ?></p>
        <p class="paragraph2"><?= $data['article2']['paragraph2'] ?></p>
        <p class="paragraph3">
            <?= $data['article2']['paragraph3']["sentence1"] ?>
            <a href="mailto:lucasmaiorano77@gmail.com" class="aBlack">lucasmaiorano77@gmail.com</a>
            <?= $data['article2']['paragraph3']["sentence1"] ?>
            <strong><?= $data['article2']['paragraph3']["strong"] ?></strong>
        </p>
    </article>
</main>