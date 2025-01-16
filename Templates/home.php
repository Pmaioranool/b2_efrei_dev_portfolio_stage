<main>
    <article>
        <section class="image-container">
            <img src="/Assets/Images/profile/profileLoin.jpg" alt="photo de profile" class="image-profile">
        </section>
        <section>
            <h2><?= $data['article1']['title'][$_SESSION['language']] ?></h2>
            <ul>
                <?php foreach ($data['article1']['skills'] as $skill) { ?>
                    <li><?= $skill ?></li>
                <?php } ?>
            </ul>
        </section>
    </article>
    <article class=".main-content">
        <h1><?= $data['article2']['title'][$_SESSION['language']] ?></h1>
        <p><?= $data['article2']['paragraph1'][$_SESSION['language']] ?></p>
        <p><?= $data['article2']['paragraph2'][$_SESSION['language']] ?></p>
        <p>
            <?= $data['article2']['paragraph3'][$_SESSION['language']]["sentence1"] ?>
            <a href="mailto:lucasmaiorano77@gmail.com" class="blackColor">lucasmaiorano77@gmail.com</a>
            <?= $data['article2']['paragraph3'][$_SESSION['language']]["sentence1"] ?>
            <strong><?= $data['article2']['paragraph3'][$_SESSION['language']]["strong"] ?></strong>
        </p>
    </article>
</main>