<?php get_header(); ?>

    <div class="content content-area">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php get_template_part('content', 'single'); ?>

            <?php
                if (comments_open() || '0' != get_comments_number()) :
                    comments_template();
                endif;
            ?>

        <?php endwhile; endif; ?>

    </div>

    <?php get_sidebar(); ?>

<?php get_footer(); ?>