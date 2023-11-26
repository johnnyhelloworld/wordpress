        <footer id="footer-id">	
			<div class="footer-container">
				<div class="footer-item">
					<div class="container">						
						<?php if (is_404()) : ?>
							<div class="container-item-error-page" id="error-page-footer-logo">
								<?= getFooterLogoESGIErrorPage("footerLogo")?>
							</div>
							
							<?php else : ?>
								<div class="container-item">
									<?= getFooterLogoESGI("footerLogo")?>
								</div>
							<?php endif; ?>
								
						<div class="container-item" id="text-bottom-left">
							2022 Figma Template by ESGI
						</div>
					</div>
				</div>

				<div class="footer-item">
					<div class="container">
						<div class="container-item">
							<div class="container-contact">
								<div class="contact">
									<p><b>Manager</b></br></br></p>
									<p>+33 1 53 31 25 23</p>
									<p>ceo@company.com</p>
								</div>
								<div class="contact">
									<p><b>CEO</b></br></br></p>
									<p>+33 1 53 31 25 25</p>
									<p>info@esgi.com</p>
								</div>
							</div>
						</div>

						<div class="container-item">
							<div class="logo-container">
								<div class="logo"><?= getLogoLinkedin("LinkedinLogo")?></div>
								<div class="logo"><?= getLogoFacebook("facebookLogo")?></div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>



