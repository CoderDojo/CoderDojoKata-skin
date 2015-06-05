
<ul class="nav nav-pills nav-stacked">
        <li class="main<?php if($viewHelper['ThisPage'] == 'Main_Page'){ ?> active<?php } ?>">
            <a href="<?php echo $viewHelper["ArticlePath"], "Main_Page"; ?>">Home</a>
        </li>

        <li id="OrganiserMenuItem" class="organiser-resource dropdown <?php if($viewHelper['ThisPage'] == 'Organising_a_Dojo'){ ?> active<?php } ?>">
            <a href="<?php echo $viewHelper["ArticlePath"], "Organising_a_Dojo"; ?>">Organiser Resources</a>
        </li>

        <li id="TechnicalMenuItem" class="technical-resource dropdown<?php if($viewHelper['ThisPage'] == 'Overview_of_Learning_Resources'){ ?> active<?php } ?>">
            <a href="<?php echo $viewHelper["ArticlePath"], "Overview_of_Learning_Resources"; ?>">Learning Resources</span></a>
        </li>
		
        <li id="NinjaMenuItem" class="ninja-resource dropdown<?php if($viewHelper['ThisPage'] == 'The_Arcade'){ ?> active<?php } ?>">
            <a href="<?php echo $viewHelper["ArticlePath"], "The_Arcade"; ?>">Ninja Zone</a>
        </li>
</ul>
