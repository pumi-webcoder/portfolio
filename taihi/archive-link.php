<!-- カスタム投稿タイプ 'work' のアーカイブページへのリンク -->
<div class="link-to-works">
    <a href="<?php echo get_post_type_archive_link('work'); ?>">View All Works</a>
</div>
<!-- カスタムタクソノミー 'genre' の一覧を表示し、それぞれのアーカイブページへのリンクを作成 -->
<ul>
    <?php
    $genres = get_terms(array(
        'taxonomy' => 'genre',
        'hide_empty' => false,
    ));
    foreach ($genres as $genre) {
        echo '<li><a href="' . get_term_link($genre) . '">' . $genre->name . '</a></li>';
    }
    ?>
</ul>