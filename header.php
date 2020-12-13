<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<?php $classes = ""; ?>
<body <?php body_class(); ?>>
<div class="flex-wrap">
	<section class="header">
		<div class="container">
			<nav class="navbar" role="navigation" aria-label="main navigation">
				<div class="navbar-brand">
					<a class="navbar-item" href="<?php echo home_url(); ?>">
                        <?php if (is_front_page()): ?>
                            <?php do_action('kalina_show_logo_action'); ?>
                        <?php else: ?>
                            <?php do_action('kalina_show_color_logo_action'); ?>
                        <?php endif; ?>
					</a>

					<a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
						<span aria-hidden="true"></span>
						<span aria-hidden="true"></span>
						<span aria-hidden="true"></span>
					</a>
				</div>

				<div id="navbarMenu" class="navbar-menu">

					<div class="navbar-end">
						<?php wp_nav_menu([
							'theme-location' => 'top-header-menu',
							'depth'		=>	2,
							'menu'			=>	'Main',
							'container'		=>	'',
							'menu_class'		=>	'',
							'items_wrap'		=>	'%3$s',
							'walker'		=>	new Bulma_NavWalker(),
							'fallback_cb'		=>	'Bulma_NavWalker::fallback'
						]);
						?>
					</div>
				</div>
			</nav>
		</div>
	</section>