<?php get_header(); ?>

<div class="l-container">
    <h1 class="c-archive-title"><?php post_type_archive_title(); ?></h1>

<?php get_template_part('template-parts/breadcrumb'); ?>


    <div class="l-archive-posts">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="c-post-item">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="c-post-item__thumbnail">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                    </div>
                <?php endif; ?>
                <h2 class="c-post-item__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="c-post-item__excerpt"><?php the_excerpt(); ?></div>
            </div>
        <?php endwhile; else : ?>
            <p><?php esc_html_e('No works found'); ?></p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer();
?>
<style>
.l-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}
.l-archive-posts {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}
.c-archive-title {
    font-size: 2.5em;
    text-align: center;
    margin-bottom: 30px;
}
.c-post-item {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    width: calc(33.333% - 20px);
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.c-post-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 10px rgba(0,0,0,0.15);
}

.c-post-item__thumbnail {
    width: 100%;
    height: auto;
}

.c-post-item__thumbnail img {
    width: 100%;
    height: auto;
    display: block;
}

.c-post-item__title {
    font-size: 1.5em;
    margin: 20px;
    text-align: center;
}

.c-post-item__title a {
    text-decoration: none;
    color: #333;
}

.c-post-item__excerpt {
    padding: 0 20px 20px;
    font-size: 1em;
    color: #666;
}
.c-post-item {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    width: calc(33.333% - 20px);
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.c-post-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 10px rgba(0,0,0,0.15);
}

.c-post-item__thumbnail {
    width: 100%;
    height: auto;
}

.c-post-item__thumbnail img {
    width: 100%;
    height: auto;
    display: block;
}

.c-post-item__title {
    font-size: 1.5em;
    margin: 20px;
    text-align: center;
}

.c-post-item__title a {
    text-decoration: none;
    color: #333;
}

.c-post-item__excerpt {
    padding: 0 20px 20px;
    font-size: 1em;
    color: #666;
}
.u-hidden {
    display: none;
}





</style>