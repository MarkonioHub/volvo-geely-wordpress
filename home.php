<?php /* Template Name: home */ ?>

<?php get_header(); ?>

<main class="site-content">

    <?php get_template_part( 'parts/home/cap' ); ?>
    <?php get_template_part( 'parts/home/description' ); ?>
    <?php get_template_part( 'parts/home/services' ); ?>
    <?php get_template_part( 'parts/home/prices' ); ?>
    <?php get_template_part( 'parts/home/why-we' ); ?>
    <?php get_template_part( 'parts/home/reviews' ); ?>
    <?php get_template_part( 'parts/home/about' ); ?>
    <?php get_template_part( 'parts/home/feedback' ); ?>
    <?php get_template_part( 'parts/home/contacts' ); ?>

</main>

<?php get_footer(); ?>

