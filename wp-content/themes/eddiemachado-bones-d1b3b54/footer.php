			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap clearfix">

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
					<p>Site by <a href="http://ianmarquette.com" target="_blank">Ian Marquette</a></p>

				</div> <!-- end #inner-footer -->

			</footer> <!-- end footer -->

		</div> <!-- end #container -->

		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

		 <script>
            $(function() {
                Grid.init();
            });
        </script>

        <script>
        $("a[href='#container']").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});
        </script>

	</body>

</html> <!-- end page. what a ride! -->
