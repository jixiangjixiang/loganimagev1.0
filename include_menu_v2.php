
<div id="left" >
	<div id="logo" >
		<a href="index.php"><label class="logo_text">LOGAN IMAGE</label></a>
	</div>
	<p <?php if($_GET['dir']=="fashion"){?> class="clickedMenu" <?php }else{ ?> class="menu"<?php }?>><a href="works.php?dir=fashion">• Fashion</a> </p>
	<p <?php if($_GET['dir']=="jewelry"){?> class="clickedMenu" <?php }else{ ?> class="menu"<?php }?>><a href="works.php?dir=jewelry">• Jewelry</a></p>
	<p <?php if($_GET['dir']=="portrait"){?> class="clickedMenu" <?php }else{ ?> class="menu"<?php }?>><a href="works.php?dir=portrait">• Portrait</a></p>
	<p <?php if($_GET['dir']=="about"){?> class="clickedMenu" <?php }else{ ?> class="menu"<?php }?>><a href="works.php?dir=about">• About</a></p>  
</div>
