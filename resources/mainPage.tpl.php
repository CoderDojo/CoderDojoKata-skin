<div id="home">
	<div class="container-fluid">
		<div class="row dl-menu">
			<a href="<?php echo $viewHelper["ArticlePath"], "Organising_a_Dojo"; ?>"><span class="col-xs-4 kata-home-panel organise">Organiser Resources</span></a>
			<a href="<?php echo $viewHelper["ArticlePath"], "Learning_Resource"; ?>"><span class="col-xs-4 kata-home-panel mentors">Learning Resources</span></a>
			<a href="<?php echo $viewHelper["ArticlePath"], "Ninja_Zone"; ?>"><span class="col-xs-4 kata-home-panel ninjas" style="">Ninja Zone</span></a>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="logo kata home">
				<a href="https://coderdojo.com"><img alt="CoderDojo.org"
					src="<?php echo $viewHelper["ImagePath"], "logo.png"; ?>"
					width="48px" height="48px"> <span class="kata-logo-text"><?php echo $viewHelper["SiteName"]; ?></span></a>
			</div>
			<span class="logo-text hidden-xs" style="">An open forum for the
				CoderDojo community to share resources with one another. </span>
		</div>
	</div>

	<div class="container-fluid">
		<div class="col-xs-4 kata kata-panel">
			<div class="organise"></div>
			<img class="responsive-image organiser-image"
				src="<?php echo $viewHelper["ImagePath"], "ratio-conserver.png"; ?>"
				alt="Organiser Resources" />
			<div style="" class="details">
				<p>
					In this section you can find out everything you need to know about organising a CoderDojo in your community.
				</p>
				<p>
					Here you will learn about becoming a CoderDojo Champion and registering your Dojo,
					finding a venue, finding technical mentors and volunteers, CoderDojo learning
					philosophies and practical tips from organisers for running your Dojo!
				</p>
				<p>
					In this section you will also find out about supports available to you and ways to
					connect to the CoderDojo community around the world.
				</p>
			</div>
			<a href="<?php echo $viewHelper["ArticlePath"], "Organising_a_Dojo"; ?>" class=" kata-home-panel kata-home-panel-button organise-button ">
				Learn More
			</a>
		</div>
		<div class="col-xs-4 kata kata-panel " style="">
			<div class="mentors"></div>
			<img class="responsive-image mentor-image"
				src="<?php echo $viewHelper["ImagePath"], "ratio-conserver.png"; ?>"
				alt="Learning Resources" />
			<div class="details">
				<p>
					Here you will find all sorts of learning resources for helping young people to explore
					technology in your Dojo!
				</p>
				<p>
					In this section there are Dojo Sushi concept cards for teaching HTML and CSS,
					resources and guides covering Scratch, HTML, Python, Ruby, Java, Minecraft and
					hardware guides for Arduino and Raspberry Pi projects and more!

				</p>
				<p>
					In this section you can also access foreign language resources from our communities​
					in the Netherlands, Belgium, Italy and Japan!
				</p>
			</div>
			<a href="<?php echo $viewHelper["ArticlePath"], "Learning_Resource"; ?>"
				class=" kata-home-panel kata-home-panel-button view-tutorials-button">
				View Resources
			</a>
		</div>
		<div class="col-xs-4 kata kata-panel">
			<div class="ninjas"></div>
			<img class="responsive-image ninja-image"
				src="<?php echo $viewHelper["ImagePath"], "ratio-conserver.png"; ?>"
				alt="communitysupportmilano" />
			<div class="details">
				<p>
					This section is for young people to explore and play with coding and technology!
				</p>
				<p>
					This will bring you to the CoderDojo Arcade where you will find lots of great coding games
					and tools for young people to engage with and learn programming skills.
				</p>
				<p>
					Here you will find games, some familiar some new, all focused on helping you learn to
					code from Scratch remakes of popular retro games to free tools to help you make your
					own awesome games!
				</p>
			</div>
			<a href="<?php echo $viewHelper["ArticlePath"], "Ninja_Zone"; ?>" class=" kata-home-panel kata-home-panel-button explore-button ">
				Explore
			</a>
		</div>

		<div class="row same-height"><?php $this->html( 'bodycontent' ) ?></div>
	</div>
</div>
