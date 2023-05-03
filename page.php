<?php
get_header();
?>
<div class="header-image-container">
    <img src="<?php header_image() ?>" alt="">
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