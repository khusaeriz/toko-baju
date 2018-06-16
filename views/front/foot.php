<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-6 copyright">
				<div class="logo-small no-border">
					<h1>Ridia</h1>
					<span>Clothes Shop</span>
				</div>
				<p>Copyright &copy;2018 All right reserved</p>
			</div>
			<div class="col-md-3">
				<ul class="vertical-link">
					<li>
						<a href="#">
							<span class="trn">about</span>
							</a>
					</li>
					<!--						<li><a href="#">FAQ</a></li>-->
					<li>
						<a href="#">
								<span class="trn">contact</span>
							</a>
					</li>
					<li><a href="#"><span class="trn">privacy_policy</span></a></li>
				</ul>
			</div>
			<div class="col-md-3">
				<ul class="vertical-link">
					<li>
						<a href="#">
								<span class="social-icon"><i class="fab fa-facebook"></i></span>
								 Facebook</a>
					</li>
					<li>
						<a href="#">
								<span class="social-icon"><i class="fab fa-google-plus-g"></i></span>
									Twitter</a>
					</li>
					<li>
						<a href="#">
								<span class="social-icon"><i class="fab fa-twitter"></i></span>
								Google+</a>
					</li>
					<li>
						<a href="#">
								<span class="social-icon"><i class="fab fa-instagram"></i></span>
								Instagram</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>
</body>
<!-- js -->
<script src="<?php echo base_url('dist/js/jquery.min.js'); ?>" charset="utf-8"></script>
<script src="<?php echo base_url('dist/bootstrap/js/bootstrap.min.js'); ?>" charset="utf-8"></script>
<script src="<?php echo base_url('dist/js/jquery.translate.js'); ?>"></script>
<script src="<?php echo base_url('dist/js/jquery.cookie.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/translate.js'); ?>"></script>
<?php
		foreach($js as $j)
		{
			echo "<script src='". base_url('assets/js/') . $j ."'></script>";
		}
	?>

</html>
