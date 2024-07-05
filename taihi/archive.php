<?php get_header(); ?>

<p>archive</p>

<!-- ページネーション -->
<div class="staff-blog__blog-pagenation">
    <?php 
    if(paginate_links())
        get_template_part('template-parts/pagination');
    ?>
</div>

<?php get_footer(); ?>