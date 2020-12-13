<footer class="footer">
	<div class="container">
		<div class="columns">
			<div class="column is-4">
				<span>© <?php echo date('Y')?> Kalyna Group Ltd</span>
			</div>
			<div class="column is-8">
                <ul>
				<?php wp_nav_menu([
					'theme-location' => 'footer-bottom',
					'depth'		=>	2,
					'menu'			=>	'Footer',
					'container'		=>	'',
					'menu_class'		=>	'',
					'items_wrap'		=>	'%3$s',
				]);
				?>
                </ul>
			</div>
		</div>
	</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>