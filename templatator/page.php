<?php get_header();?>
<main class="wrap container">
    <section class="content-area content-thin">
    <!-- if blog has posts, display posts -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="article-full">
            <header>
              <h2><?php the_title(); ?></h2> <!-- article title -->
              By: <?php the_author(); ?> <!-- article author -->
            </header>
            <?php the_content(); ?> <!-- article content -->
        </article>
            <?php endwhile; else : ?>
            <!-- if no page is in the db -->
        <article>
            <p>Sorry, no page was found!</p>
        </article>
        <?php endif; ?>
        <!-- includes the sidebar.php template file -->
    </section><?php get_sidebar(); ?>
</main>
<!-- includes the footer.php template file -->
<?php get_footer(); ?>