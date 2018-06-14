<?php if (get_theme_mod('fmm-features-callout-display') == "Yes") { ?>
		<div class="footer-callout clearfix">
			<div class="footer-callout-image">
				<a href="<?php echo get_permalink(get_theme_mod('fmm-features-callout-link')) ?>"><img src="<?php echo wp_get_attachment_url(get_theme_mod('fmm-features-callout-image')) ?>"></a>
			</div>

			<div class="footer-callout-text">
				<h2><a href="<?php echo get_permalink(get_theme_mod('fmm-features-callout-link')) ?>"><?php echo get_theme_mod('fmm-features-callout-headline') ?></a></h2>
				<?php echo wpautop(get_theme_mod('fmm-features-callout-text')) ?>
				<p><a href="<?php echo get_permalink(get_theme_mod('fmm-features-callout-link')) ?>"><strong>Learn more &raquo;</strong></a></p>
			</div>
		</div>
		<?php } ?>