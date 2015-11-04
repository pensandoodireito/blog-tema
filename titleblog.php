<div class="row">
	<div class="col-md-12">
		<?php
		$blog_settings = get_option( 'participacao_settings' );
		?>
		<header class="intercambio-archive">
			<div class="bck-header-intercambio"
			     style="background-image: url(<?php echo $blog_settings['padrao']; ?>);"></div>
			<h3 class="titulo-header font-roboto white"><a
					href="<?php echo home_url(); ?>"><?php bloginfo( 'title' ); ?></a></h3>
		</header>
	</div>
</div>