
<footer id="footer">
	<div class="subscribe-block">
		<div class="container">
			<div class="row">
				<div class="col-sm-6"></div>
				<div class="col-sm-6"></div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-5 pull-right">
				<ul class="social-networks">
					<li class="flickr"><a
						href="https://www.flickr.com/photos/helloworldfoundation/">Flickr</a></li>
					<li class="google"><a
						href="https://plus.google.com/+coderdojo/posts">Google+</a></li>
					<li class="linkedin"><a
						href="https://www.linkedin.com/company/5178906?trk=tyah&amp;trkInfo=tarId%3A1409649959259%2Ctas%3Acoderdojo%2Cidx%3A3-1-3">Linkedin</a></li>
					<li class="facebook"><a href="https://www.facebook.com/CoderDojo">Facebook</a></li>
					<li class="twitter"><a href="https://twitter.com/coderdojo">Twitter</a></li>
				</ul>
				<?php
					$searchTitleObject = SpecialPage::getTitleFor("Search");
					$searchFormUrl = $searchTitleObject->getLinkURL();
					parse_str(parse_url($searchFormUrl, PHP_URL_QUERY), $searchFormParams);
				?>
				<form method="get" class="search-form" action="<?=$searchFormUrl ?>">
					<fieldset>
						<div class="form-group">
							<input type="search" class="form-control" placeholder="Search" name="search"><?php
							foreach ($searchFormParams as $key => $value) {
								echo Html::element('input', array('type' => 'hidden', 'value' => $value, 'name' => $key)). "\n";
							}?>
							<input type="hidden" value="all" name="profile">
						</div>
						<div class="cc">
							<a target="_blank" class="external" href="https://creativecommons.org/licenses/by-nc-sa/4.0/"><img src="<?php echo $viewHelper["ImagePath"], "cc-by.png"; ?>" width="88" height="31" /></a>
							<p>Content is available under <a target="_blank" class="external" href="https://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution</a></p>
						</div>
					</fieldset>
				</form>
			</div>
			<div class="col-sm-3">
				<div class="logo hidden-xs">
					<a href="https://coderdojo.com"><img
						src="<?php echo $viewHelper["ImagePath"], "footerlogo.png"; ?>"
						alt="CoderDojo.org"></a>
				</div>
				<address>
					<span>Dogpatch Labs,</span> <span>Unit 1,</span><span>The CHQ Building,</span> <span>Dublin
						1,</span> Ireland
				</address>
			</div>
			<div class="col-sm-4">
				<dl>
					<a class="btn btn-primary contact-button" href="https://coderdojo.com/contact/">Contact Us</a>
				</dl>
				<p>
					Supported by the CoderDojo Foundation, CHY 20812. For more information about the CoderDojo Foundation, <a title="More information about the CoderDojo Foundation" href="https://coderdojo.com/about/coderdojo-foundation">click here</a>.
				</p>
				<span class="visit">Visit <a href="http://www.coderdojo.com">CoderDojo.com</a></span>
			</div>
		</div>
	</div>
</footer>
