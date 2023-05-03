<?php
get_header();
?>
<div class="header-image-container">
    <img src="<?php header_image() ?>" alt="">
</div>
<div class="maincontainer">
    <div class="seventyside">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post() ?>
                <div class="article">
                    <div class="image">
                        <?php the_post_thumbnail() ?>
                    </div>
                    <div class="details">
                        <a href="<?php the_permalink() ?>">
                            <h4><?php the_title() ?></h4>
                        </a>
                        <p>
                            <?php the_excerpt() ?>
                        </p>
                        <span>
                            <h6><?php the_author() ?></h6>
                        </span>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <div class="thirtyside">
        <?php get_sidebar() ?>
    </div>
</div>
<div class="pagination-links">
    <?php echo paginate_links(); ?>
</div>
<?php
get_footer();
?>