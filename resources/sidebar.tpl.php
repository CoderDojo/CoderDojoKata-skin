
<ul class="nav nav-pills nav-stacked">
        <li class="main<?php if($viewHelper['ThisPage'] == 'Kata_About'){ ?> active<?php } ?>">
            <a href="<?php echo $viewHelper["ArticlePath"], "Kata_About"; ?>">About</a>
        </li>

        <li id="OrganiserMenuItem" class="organiser-resource dropdown <?php if($viewHelper['ThisPage'] == 'Organising_a_Dojo'){ ?> active<?php } ?>">
            <a href="<?php echo $viewHelper["ArticlePath"], "Organising_a_Dojo"; ?>">Organiser Resources</a>
        </li>

        <li id="TechnicalMenuItem" class="technical-resource dropdown<?php if($viewHelper['ThisPage'] == 'Learning_Resource'){ ?> active<?php } ?>">
            <a href="<?php echo $viewHelper["ArticlePath"], "Learning_Resource"; ?>">Learning Resources</span></a>
        </li>
		
        <li id="NinjaMenuItem" class="ninja-resource dropdown<?php if($viewHelper['ThisPage'] == 'Ninja_Zone'){ ?> active<?php } ?>">
            <a href="<?php echo $viewHelper["ArticlePath"], "Ninja_Zone"; ?>">Ninja Zone</a>
        </li>
        <?php
        if(array_key_exists('AdminLoggedIn', $viewHelper))
        {
            ?>
            <li class="main <?php if($viewHelper['ThisPage'] == 'Special:SpecialPages'){ ?> active<?php } ?>">
                <a href="<?php echo $viewHelper["ArticlePath"], "Special:SpecialPages"; ?>">Special Pages</a>
            </li>
            <?php
        }
        ?>
</ul>
