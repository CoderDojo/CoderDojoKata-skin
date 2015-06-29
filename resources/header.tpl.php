<header>
	<div class="row kata">
		<div class="col-md-12">
			<div class="logo kata">
				<a href="<?php echo $viewHelper["ArticlePath"], "Main_Page"; ?>"><img alt="CoderDojo.org"
					src="<?php echo $viewHelper["ImagePath"], "logo.png"; ?>" width="48"
					height="48"> 
				</a>
				<a href="<?php echo $viewHelper["ArticlePath"], "Main_Page"; ?>"><span class="kata-logo-text">CoderDojo<br />Kata</span></a>
			</div>
			<div class="login kata">
			<span ><a class="new" href="<?php echo $viewHelper["ArticlePath"], "Become_a_Kata_Editor"; ?>">How to Share your Content!</a></span> 
				<?php 
					$this->html( 'userlangattributes' );
					$personalTools = $this->getPersonalTools();
					foreach ( $personalTools as $key => $item ) {
						echo $this->makeListItem( $key, $item, array("tag" => "span") );
					}

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
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</header>