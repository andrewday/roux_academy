<?php get_header(); ?>
<div id="contentWrap">
    <div id="content">
    <h1> Roux Academy Blog </h1>
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    
                    <div class="entry">
                        <?php the_content(); ?>
                    </div>
                    <div class="postmetadata">
    					  <?php comments_popup_link('No Comments ', '1 Comment', '% Comments'); ?> | 
                        Posted in <?php the_category(', ') ?> | 
                     
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <h2>Not Found</h2>
        <?php endif; ?>
    </div> <!-- end content -->
<?php get_sidebar(); ?>
</div> <!-- end contentWrap -->
<?php get_footer(); ?>
