<?php if ( is_active_sidebar( 'footer-a' ) || is_active_sidebar( 'footer-b') || is_active_sidebar( 'footer-c' ) ) : ?>

	<div class="footer">

		<div class="section-inner">

			<?php if ( is_active_sidebar( 'footer-a' ) ) : ?>

				<div class="column column-1 one-third">

					<div class="widgets">

						<?php dynamic_sidebar( 'footer-a' ); ?>

					</div>

				</div>

			<?php endif; ?> <!-- /footer-a -->

			<?php if ( is_active_sidebar( 'footer-b' ) ) : ?>

				<div class="column column-2 one-third">

					<div class="widgets">

						<?php dynamic_sidebar( 'footer-b' ); ?>

					</div> <!-- /widgets -->

				</div>

			<?php endif; ?> <!-- /footer-b -->

			<?php if ( is_active_sidebar( 'footer-c' ) ) : ?>

				<div class="column column-3 one-third">

					<div class="widgets">

						<?php dynamic_sidebar( 'footer-c' ); ?>

					</div> <!-- /widgets -->

				</div>

			<?php endif; ?> <!-- /footer-c -->

			<div class="clear"></div>

		</div> <!-- /footer-inner -->

	</div> <!-- /footer -->

<?php endif; ?>

<?php wp_footer(); ?>

<?php require_once 'web_footer.php' ?>

</body>
</html>
