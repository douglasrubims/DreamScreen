<?php if(!strpos($_SERVER['REQUEST_URI'], 'layout')) { ?>
            <footer class="footer" style="padding: 0;">
				<div class="container-fluid">
					<div class="copyright" id="copyright">
						&copy;
						<script>
							document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
						</script> Coded by
						<a href="http://www.douglasrubim.tk" target="_blank">Douglas Rubim</a>.
					</div>
				</div>
			</footer>
<?php } ?>
