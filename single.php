<?php
get_header();
?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post() ?>
        <div class="hero-section">
            <div class="image">
                <?php the_post_thumbnail() ?>
            </div>
            <div class="details">
                <h1><?php the_title() ?></h1>
                <p>
                    <?php the_content() ?>
                </p>
                <span>
                    <h4>Author </h4>
                    <h6><?php the_author() ?></h6>
                    <h4>Posted on</h4>
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