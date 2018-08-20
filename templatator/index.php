<!-- includes header.php template file -->
<?php get_header();?>
<main class="wrap container">
    <div class="row">
        <section class="content-area content-thin col-md-8">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="article-loop">
                <header class="h4">
                <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                By: <span class="badge badge-pill badge-info"><?php the_author(); ?></span>
                </header>
            <?php the_excerpt(); ?>
            </article>
                <?php endwhile; else : ?>
            <article>
                <p class="text-center">Sorry, no posts were found!</p>
            </article>
            <?php endif; ?>
        </section>
        <!-- includes sidebar.php template file -->
        <?php get_sidebar(); ?>
    </div>
    <!-- includes footer.php template file -->
<div><?php get_footer(); ?></div>
</main>