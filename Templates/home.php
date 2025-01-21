<main>
    <h1><?= $data['article']['title'] ?></h1>
    <article class="image-container-container">
        <section class="image-container">
            <img src="/Assets/Images/profile/profileLoin.jpg" alt="photo de profile" class="image-profile">
        </section>
    </article>
    <article class="main-content">

        <h2><?= $data['article']['h2-1'] ?></h2>
        <p class="paragraph1"><?= $data['article']['paragraph1'] ?></p>

        <h2><?= $data['article']['ul']['title'] ?></h2>
        <ul>
            <li><strong><?= $data['article']['ul']['li1-t'] ?></strong><?= $data['article']['ul']['li1'] ?></li>
            <li><strong><?= $data['article']['ul']['li2-t'] ?></strong><?= $data['article']['ul']['li2'] ?></li>
            <li><strong><?= $data['article']['ul']['li3-t'] ?></strong><?= $data['article']['ul']['li3'] ?></li>
            <li><strong><?= $data['article']['ul']['li4-t'] ?></strong><?= $data['article']['ul']['li4'] ?></li>
            <p><?= $data['article']['ul']['paragraph'] ?></p>
        </ul>

        <h2><?= $data['article']['h2-2'] ?></h2>
        <p class="paragraph2"><?= $data['article']['paragraph2'] ?></p>

        <h2><?= $data['article']['h2-3'] ?></h2>
        <p class="paragraph3"><?= $data['article']['paragraph3'] ?></p>

        <h2><?= $data['article']['h2-4'] ?></h2>
        <p>
            <?= $data['article']['p'] ?>
            <a href="mailto:lucasmaiorano77@gmail.com" class="aBlack">lucasmaiorano77@gmail.com</a>
        </p>
        <p><?= $data['article']["paragraph4"] ?>
            <strong><?= $data['article']["strong"] ?></strong>
        </p>
        <p><?= $data['article']["paragraph5"] ?></p>

    </article>
</main>