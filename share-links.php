<div class="row divider-top">
	<div class="col-xs-12 text-right">
		<a href="#" onclick="jQuery('#share-box-<?php the_ID(); ?>').slideToggle('fast'); return false;"
		   class="btn btn-default btn-sm"><i class="fa fa-share-alt"></i> compartilhe</a>

		<?php if ( function_exists( 'ssb_share_icons' ) ): ?>
			<div id="share-box-<?php the_ID(); ?>" style="display: none;">
				<?php echo ssb_share_icons(); ?>
			</div>
		<?php endif; ?>
	</div>
</div>