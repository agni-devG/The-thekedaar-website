<?php
/**
 * Reusable alternate page hero.
 *
 * Set these variables before including this file:
 * $hero_image   Path/URL of the hero image (e.g. '/assets/images/about-hero.webp')
 * $hero_heading Main heading
 * $hero_subtext Supporting copy
 *
 * Example:
 * $hero_image = '/assets/images/about-hero.webp';
 * $hero_heading = 'Thoughtful interiors, made for you';
 * $hero_subtext = 'We create spaces that feel like home.';
 * include __DIR__ . '/templates/hero-alt.php';
 */
$heroImage = isset($hero_image) ? (string) $hero_image : '';
$heroHeading = isset($hero_heading) ? (string) $hero_heading : '';
$heroSubtext = isset($hero_subtext) ? (string) $hero_subtext : '';
$heroImageAlt = isset($hero_image_alt) ? (string) $hero_image_alt : $heroHeading;
$escapeHeroValue = static function ($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
};
?>
<section class="hero-alt-section" aria-labelledby="hero-alt-heading">
    <?php if ($heroImage !== ''): ?>
        <img
            class="hero-alt-image"
            src="<?= $escapeHeroValue($heroImage) ?>"
            alt="<?= $escapeHeroValue($heroImageAlt) ?>"
            fetchpriority="high"
        >
    <?php endif; ?>
    <div class="hero-alt-overlay" aria-hidden="true"></div>
    <div class="hero-alt-content">
        <?php if ($heroHeading !== ''): ?>
            <h1 id="hero-alt-heading" class="hero-alt-heading"><?= $escapeHeroValue($heroHeading) ?></h1>
        <?php endif; ?>
        <?php if ($heroSubtext !== ''): ?>
            <p class="hero-alt-subtext"><?= $escapeHeroValue($heroSubtext) ?></p>
        <?php endif; ?>
    </div>
</section>
