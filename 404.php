<!-- Header -->
<?php get_template_part('layout/header'); ?>
<!-- Content -->
<main style="min-height: 80vh;">
    <section>
        <div class="page-width">
            <?php get_template_part('components/spacer') ?>
            <div class="text-container">
                <h1 class="text-display">
                    404. There has been an error.
                </h1>
                <p>
                    This page doesnt exist. <a class="text-underline" href="/">Back to the homepage?</a>
                </p>
            </div>
            <?php get_template_part('components/spacer') ?>
        </div>
    </section>
</main>
<!-- Footer -->
<?php get_template_part('layout/footer'); ?>