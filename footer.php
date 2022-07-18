			
					</div><!-- /.col -->

					

				</div><!-- /.row -->
			
		</main><!-- /#main -->
		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p><?php the_field('email_footer'); ?></p>
						<p><?php the_field('address_footer'); ?></p>
						<p>Telp. <?php the_field('phone_footer'); ?></p>
						<?php the_field('menu_footer'); ?>
					</div>
				</div><!-- /.row -->
			</div><!-- /.container -->
		</footer><!-- /#footer -->
	</div><!-- /#wrapper -->
	
	<?php
		wp_footer();
	?>
</body>
</html>
