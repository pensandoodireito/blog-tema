<article class="description-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<div class="row">
			<div class="col-sm-2 text-right">
				<h3 class="red font-roboto h1 mt-0"><?php the_time( 'd' ); ?></h3>

				<p class="red font-roboto"><strong><?php the_time( 'F/Y' ); ?></strong></p>
			</div>
			<div class="col-sm-9 divider-left">
				<h2 class="font-roboto red"><?php the_title(); ?></h2>

				<p>
					<small>Publicado por: <?php the_author(); ?></small>
				</p>
			</div>
		</div>
	</header>
	<section class="mt-md">
		<?php the_content(); ?>
		<div class="row">
			<div class="col-sm-8">
				<?php get_template_part( 'categories', 'list' ); ?>
			</div>
			<div class="col-sm-4 text-right">
				<p>
					<small><i class="fa fa-comment-o"></i> <a href="<?php comments_link(); ?>"
					                                          alt="comentários"><?php comments_number( 'nenhum comentário', 'um comentário', '% comentários' ); ?></a>
					</small>
				</p>
			</div>
		</div>
		<?php get_template_part( 'share', 'links' ); ?>
		<?php comments_template(); ?>
	</section>
</article>