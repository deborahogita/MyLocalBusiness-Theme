<?php get_header(); ?>

<main>
    <section id="content">
        <h1>Welcome to My Custom WordPress Theme</h1>
        <p>This is a basic custom theme for a local business.</p>

        <h2>Latest Posts</h2>
        <?php if (have_posts()) : ?>
            <ul>
                <?php while (have_posts()) : the_post(); ?>
                    <li>
                        <!-- Display the title of the post and link to the single post page -->
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <!-- Display the post excerpt -->
                        <p><?php the_excerpt(); ?></p>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php else : ?>
            <!-- Display this message if there are no posts -->
            <p>No posts found.</p>
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>
