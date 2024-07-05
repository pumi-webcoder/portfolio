<section id="skills" class="l-section p-section js-skills">
	<div class="l-inner">
		<hgroup class="p-section__title">
			<h2 class="p-section__title--main">Skills</h2>
			<p class="p-section__title--sub">スキル</p>
		</hgroup>

		<div class="p-section__contents p-skills__contents">
			<ul class="p-skills__list">
				
				<!-- カスタム投稿タイプskill-iconで作成しているカスタム投稿を全て表示する	 -->
				<?php
				$args = array(
					'post_type' => 'skill-icon',
					'posts_per_page' => -1,
					'orderby' => 'menu_order',
					'order' => 'ASC'
				);
				$the_query = new WP_Query($args);
				// the_query内のループ前処理
				if ($the_query->have_posts()) :
					while ($the_query->have_posts()) : $the_query->the_post();
				?>
				
					<!-- imgタグのリンクはサムネイル、ALT属性にはタイトルを表示する -->
					<li class="p-skills__item wow fadeInUp">
						<div class="p-skills__item--img">
							<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
						</div>
						<h3 class="p-skills__item-name">
							<?php the_title(); ?>
						</h3>
					</li>
				<?php
					endwhile;
				endif;
				wp_reset_postdata();
				?>
			</ul>
			<div class="p-skills__messages">
				<ul>
				<!-- カスタム投稿タイプskill-textで作成しているカスタム投稿を全て表示する	 -->

				<?php
				$args = array(
					'post_type' => 'skill-text',
					'posts_per_page' => -1,
					'orderby' => 'menu_order',
					'order' => 'ASC'
				);
				$the_query = new WP_Query($args);
				// the_query内のループ前処理
				if ($the_query->have_posts()) :
					while ($the_query->have_posts()) : $the_query->the_post();
				?>
				
				<!-- カスタム投稿のタイトルと本文を表示する -->
					<li class="p-skills__text--item">
						<div class="p-skills__text--title-main"><?php the_title(); ?></div>
						<div class="p-skills__text--title-sub"><?php the_content(); ?></div>
					</li>
				<?php
					endwhile;
				endif;
				wp_reset_postdata();
				?>
				</ul>

			</div>
		</div>
	</div>
</section>