<!-- ==========================================================
     SHOWCASE CARD
========================================================== -->

<article class="showcase-card <?= $index === 0 ? 'active' : ''; ?>">

    <figure class="showcase-media">

<img
    src="<?= htmlspecialchars($card['image']); ?>"
    alt="<?= htmlspecialchars($card['title']); ?>"
    class="showcase-image"
    loading="<?= $index === 0 ? 'eager' : 'lazy'; ?>"
    width="700"
    height="900">

    </figure>

    <div class="showcase-overlay"></div>

    <div class="showcase-content">

        <span class="showcase-tag">

            <?= htmlspecialchars($card['tag']); ?>

        </span>

        <h2 class="showcase-title">

            <?= htmlspecialchars($card['title']); ?>

        </h2>

        <p class="showcase-description">

            <?= htmlspecialchars($card['description']); ?>

        </p>

<?php if (!empty($card['button'])): ?>

    <a
        href="<?= htmlspecialchars($card['url']); ?>"
        class="showcase-button">

        <?= htmlspecialchars($card['button']); ?>

    </a>

<?php endif; ?>

    </div>

</article>

