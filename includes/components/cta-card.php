<?php
/**
 * ==========================================================================
 * CTA CARD COMPONENT
 * ==========================================================================
 */

if (empty($ctaData['card'])) {
    return;
}

$card = $ctaData['card'];
$benefits = $ctaData['benefits'] ?? [];
?>

<article class="cta-card">

<div class="cta-card__icon">
    <i class="fa-solid fa-rocket"></i>
</div>


    <div class="cta-card__header">

        <h3 class="cta-card__title">
            <?= htmlspecialchars($card['title']) ?>
        </h3>

        <p class="cta-card__description">
            <?= htmlspecialchars($card['description']) ?>
        </p>

    </div>

    <div class="cta-card__separator"></div>


    <?php if (!empty($benefits)) : ?>

        <ul class="cta-card__benefits">

            <?php foreach ($benefits as $benefit) : ?>

                <li class="cta-card__benefit">

                    <i
                        class="<?= htmlspecialchars($benefit['icon']) ?>"
                        aria-hidden="true"
                    ></i>

                    <span>
                        <?= htmlspecialchars($benefit['text']) ?>
                    </span>

                </li>

            <?php endforeach; ?>

        </ul>

    <?php endif; ?>

    <div class="cta-card__separator"></div>


    <div class="cta-card__actions">

        <a
            href="<?= htmlspecialchars($card['buttons'][0]['url']) ?>"
            class="btn btn-primary"
        >
            <?= htmlspecialchars($card['buttons'][0]['label']) ?>
        </a>

        <a
            href="<?= htmlspecialchars($card['buttons'][1]['url']) ?>"
            class="btn btn-outline"
        >
            <?= htmlspecialchars($card['buttons'][1]['label']) ?>
        </a>

    </div>

</article>