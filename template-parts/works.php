<section id="works" class="l-section l-first-view p-section js-first-view">
	<div class="l-inner">
		<hgroup class="p-section__title">
			<h2 class="p-section__title--main">Works</h2>
			<p class="p-section__title--sub">実績</p>
		</hgroup>

		<div class="p-section__contents swiper p-works__contents">
			<ul class="swiper-wrapper">

			<?php
			// カスタム投稿タイプ 'work' の最新投稿を取得
			$args = array(
				'post_type' => 'work',
				'posts_per_page' => 10, // 表示したい投稿数
			);
			$work_query = new WP_Query($args);
			
			if ($work_query->have_posts()) :
				while ($work_query->have_posts()) : $work_query->the_post(); ?>

					<li class="swiper-slide p-works-slide js-slide">
						<?php if (has_post_thumbnail()) : ?>
							<div class="p-works__img c-img js-modal__btn--open">
								<?php the_post_thumbnail(); ?>
							</div>
						<?php endif; ?>
						<dialog class="p-dialog__wrapper" aria-label="Dialog Box">
							<div class="p-dialog__container">
								<?php if (has_post_thumbnail()) : ?>
									<div class="p-dialog__img">
										<?php the_post_thumbnail('medium'); ?>
									</div>
								<?php endif; ?>
								<div class="p-dialog__text">
									<?php
									// カスタムフィールドの設定を配列でまとめる
										$args = array(
											'dt1' => 'スキル',
											'dd1' => 'skills',
											'dt2' => '制作時期',
											'dd2' => 'date',
											'dt3' => '制作時間',
											'dd3' => 'time',
											'dt4' => '制作概要',
											'dd4' => 'overview',
											'URL' => 'url',
										);
										get_template_part('template-parts/portfolio-summary', null, $args);
									?>
								</div>
							</div>
							<div class="p-modal__buttons">
								<a class="c-btn p-btn-modal js-modal__btn--link" 
								href="<?php echo get_field($args['URL']) ?  esc_url(the_field($args['URL'])) : "#";  ?>" 
								target="_blank">
									ページを見る
								</a>
								<form method="dialog">
									<button class="c-btn p-btn-modal js-modal__btn--close">
										閉じる
									</button>
								</form>
							</div>
						</dialog>
					</li>

				<?php endwhile;
				wp_reset_postdata();
			endif; ?>

			</ul>
			<div class="swiper-button-prev js-button-prev"></div>
			<div class="swiper-button-next js-button-next"></div>
			<div class="swiper-pagination js-pagination"></div>

			<div class="p-works__explanation js-explanation">
				<p>Basic認証を設定しております。<br />ユーザー名・パスワードともに『demo』となります。</p>
			</div>
		</div>
	</div>
</section>