<?php

/**
 * This is custom page template for about us page 
 * Template Name: About Template
 */
get_header();
?>
<div class="header-image-container">
    <?php $imgUrl = get_the_post_thumbnail_url(get_the_ID()) ?>
    <img src="<?php echo $imgUrl ?>" alt="">
</div>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post() ?>
        <div class="hero-section">
            <div class="details">
                <h1><?php the_title() ?></h1>
                <p>
                    <?php the_content() ?>
                </p>
                <span>
                    <h5>Author </h5>
                    <h6><?php the_author() ?></h6>
                    <h5>Posted on</h5>
                    <h6><?php the_date();
                        ?>
                    </h6>
                </span>
            </div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>
<?php
get_footer();
?>