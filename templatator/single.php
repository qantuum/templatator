<!-- single article page -->
<!-- includes the header.php template file -->
<?php get_header();?>
<!-- bootstrap container -->
<main class="wrap container">
    <section class="content-area content-full-width">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <!-- as long as articles are in db -->
        <article class="article-full">
            <header>
              <h2><?php the_title(); ?></h2> <!-- article title -->
              By: <?php the_author(); ?> <!-- article author -->
            </header>
            <?php the_content(); ?> <!-- article content -->
        </article>
    <?php endwhile; else : ?>
        <!-- in case there is no article -->
        <article>
          <p>Sorry, no post was found!</p>
        </article>
    <?php endif; ?>
    </section>
</main>
<?php get_footer(); ?>