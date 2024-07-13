<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!-- GoogleFonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;600&amp;family=Oswald:wght@400;500&amp;display=swap" rel="stylesheet" />
	<?php wp_head(); ?>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-M8V9YGPB1S"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-M8V9YGPB1S');
	</script>
</head>

<body>
	<!-- header -->
	<header class="l-header p-header">
		<div class="l-inner">
			<!-- ロゴ、グローバルナビ、ハンバーガーメニュー -->
			<div class="p-header__container <?php if (!is_front_page()) echo 'u-flex-center'; ?>">
				<!-- ロゴ　　トップページではロゴをh1に、それ以外のページではdivに -->
				<?php if (is_front_page()) : ?>
					<h1 class="p-header__logo"><a href="<?php echo home_url('/'); ?>">Pumi's<br />Portfolio</a></h1>
				<?php else : ?>
					<div class="p-header__logo"><a href="<?php echo home_url('/'); ?>">Pumi's<br />Portfolio</a></div>
				<?php endif; ?>

				<!-- グローバルナビ -->
				<nav class="p-header__nav <?php if (!is_front_page()) echo 'u-hidden-all'; ?>">
					<?php
						wp_nav_menu(
							array(
								'depth' => 1,//階層の深さ
								'theme_location' => 'global', // グローバルメニューをここに表示すると指定
								'container' => false,//ulリストのさらに外側にcontainerを作りたい時のタグ名（divやul）
								'menu_class' => 'p-header__nav--list',//ulに付与するクラス名
								'li_class' => 'p-header__nav--item', // liタグへclass追加
								'a_class' => 'p-header__nav--link hover__underline--from-left' // aタグへclass追加
							)
						);
					?>
				</nav>

				<!-- ハンバーガーメニュー -->
				<div class="p-header__hamburger--button <?php if (!is_front_page()) echo 'u-hidden-all'; ?>">
					<button id="js-drawer__btn" class="c-hamburger-btn" aria-label="ハンバーガーメニュー">
						<span class="c-hamburger-bar"></span>
						<span class="c-hamburger-bar"></span>
						<span class="c-hamburger-bar"></span>
					</button>
				</div>
			</div>
			<!-- ドロワーメニュー（ヘッダーコンテナの外） -->
			<nav class="p-drawer__nav">
				<?php
					wp_nav_menu(
						array(
							'depth' => 1,//階層の深さ
							'theme_location' => 'drawer', // グローバルメニューをここに表示すると指定
							'container' => false,//ulリストのさらに外側にcontainerを作りたい時のタグ名（divやul）
							'menu_class' => 'p-drawer__nav--list',//ulに付与するクラス名
							'li_class' => 'p-drawer__nav--item', // liタグへclass追加
							'a_class' => 'p-drawer__nav--link js-drawer__nav--link' // aタグへclass追加
						)
					);
				?>
			</nav>
		</div>
	</header>

	<main class="main">