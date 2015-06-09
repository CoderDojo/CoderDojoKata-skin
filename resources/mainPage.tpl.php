<div id="home">
	<div class="container-fluid">
		<div class="row dl-menu">
			<a href="<?php echo $viewHelper["ArticlePath"], "Organising_a_Dojo"; ?>"><span class="col-xs-4 kata-home-panel organise">Organiser Resources</span></a>
			<a href="<?php echo $viewHelper["ArticlePath"], "Overview_of_Learning_Resources"; ?>"><span class="col-xs-4 kata-home-panel mentors">Learning Resources</span></a>
			<a href="<?php echo $viewHelper["ArticlePath"], "The_Arcade"; ?>"><span class="col-xs-4 kata-home-panel ninjas" style="">Ninja Zone</span></a>
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
					In this section you can access information about Organising a Dojo, becoming a CoderDojo 
					Champion and registering your Dojo on Zen (our Dojo listing website).
					You can also access guides and information on recruiting Mentors and Volunteers, finding a 
					Venue and Dojo Operations such as Belts as well as Advice from CoderDojo Champions and 
					Guiding Principles and Philosophies.
				</p>
				<p>
					Here you can also discover all the great ways to connect with the CoderDojo Community, 
					which now includes 700+ Dojos from 57 countries around the world!
				</p>
				<p>
					There are also Sponsored Tools here which contain free or discounted learning tools and 
					aids available to use at your Dojo.
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
					Here you will find an Overview of Learning Resources tried, tested and contributed by 
					members of the global CoderDojo community. These Learning Resources consist of a wide 
					range of programming languages and technologies to help along the way.
				</p>
				<p>
					This sections includes CoderDojo Sushi, resources and guides covering Scratch, HTML, 
					Python, Ruby, Java, Minecraft and hardware guides for Arduino and Raspberry Pi projects.
				</p>
				<p>
					In this section you can also access foreign language resources. We have content from our 
					communities​ ​in the Netherlands, Belgium, Italy and Japan!
				</p>
			</div>
			<a href="<?php echo $viewHelper["ArticlePath"], "Overview_of_Learning_Resources"; ?>"
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
					Here you will find cool tools and games for young people to engage with and learn 
					programming skills! 
				</p>
				<p>
					This section has games, projects and online tools that can help you develop your coding 
					skills and create your own unique projects!
				</p>
			</div>
			<a href="<?php echo $viewHelper["ArticlePath"], "The_Arcade"; ?>" class=" kata-home-panel kata-home-panel-button explore-button ">
				Explore
			</a>
		</div>

		<div class="row same-height"><?php $this->html( 'bodycontent' ) ?></div>
	</div>
</div>

