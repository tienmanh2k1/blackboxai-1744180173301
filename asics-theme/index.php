<?php
/**
 * The main template file
 *
 * @package ASICS Vietnam
 */

get_header();
?>

<div class="hero bg-blue-500 text-white p-8 mb-8">
    <div class="container mx-auto">
        <h1 class="text-4xl font-bold"><?php bloginfo('name'); ?></h1>
        <p class="mt-2"><?php bloginfo('description'); ?></p>
    </div>
</div>

<div class="container mx-auto">
    <?php if (have_posts()) : ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class('bg-white shadow rounded overflow-hidden'); ?>>
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail('large', ['class' => 'w-full h-auto']); ?>
                        </div>
                    <?php endif; ?>
                    <div class="p-4">
                        <h2 class="text-xl font-bold mb-2">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <div class="post-excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p><?php esc_html_e('No posts found.', 'asics'); ?></p>
    <?php endif; ?>
</div>

<?php
get_footer();
