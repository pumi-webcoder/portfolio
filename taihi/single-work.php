<?php get_header(); ?>

<?php get_template_part('template-parts/breadcrumb'); ?>

<div class="l-container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="c-work">
            <header class="c-work__header">
                <h1 class="c-work__title"><?php the_title(); ?></h1>
                <div class="c-work__meta">
                    <span class="c-work__date"><?php the_date(); ?></span>
                    <span class="c-work__categories"><?php the_terms( $post->ID, 'genre', 'Genre: ', ', ' ); ?></span>
                </div>
            </header>

            <div class="c-work__content">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="c-work__thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>
                <?php the_content(); ?>
            </div>
            
        </article>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>

<style>
	.l-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}
.c-work {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.c-work__header {
    border-bottom: 1px solid #ddd;
    padding-bottom: 10px;
    margin-bottom: 20px;
}

.c-work__title {
    font-size: 2.5em;
    margin-bottom: 10px;
}

.c-work__meta {
    font-size: 0.9em;
    color: #666;
}

.c-work__date {
    margin-right: 10px;
}

.c-work__categories {
    color: #999;
}

.c-work__thumbnail {
    margin-bottom: 20px;
}

.c-work__content {
    font-size: 1.2em;
    line-height: 1.6;
}
.u-hidden {
    display: none;
}

</style>