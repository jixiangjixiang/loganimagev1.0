<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>LOGAN</title>
<link rel="stylesheet" type="text/css" href="css/m.style.css" />
<link rel="stylesheet" type="text/css" href="css/index_menu.css" />
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?eb682373693a4f841042a5e6912c98b1";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

<meta name="keywords" content="商业摄影,LOGAN,时装摄影,人像摄影">
	
	<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
	<script type="text/javascript" src="js/jquery-1.6.1.js"></script> 
	<script type="text/javascript" src="js/jquery.unveil.js"></script> 
	<script type="text/javascript" src="js/init.js"></script>
	<!--<script-->
	<!--	type="text/javascript" src="js/lazyLoad.js"></script>-->
	<script type="text/javascript">
	$(document).ready(function() {
			$("img[data-src]").unveil(300);
			initmenu();
			initcontentimg();
	});
		
	//	$(document).ready(function() {
	//		$("img.img").lazyload({ 
	//			threshold : 200 ,
	//		});
	//	});
	//	$(document).ready(function() {
	//	
	//	lazyLoad.init();
	//});
	</script> 
	
</head>
<body style="text-align: center; background-color: #000000;margin: 0;">
<div style="position:fixed; width:100%">
	<table style="width: 100%;background-color:rgba(0,0,0,0.7);">
		<tr> 
			<td width="25%" height="80" align="center" onclick="location='m.index.php?dir=fashion'"><h1<?php if($_GET['dir']=="fashion" || $_GET['dir']==""){?> style="color:82807f;margin:auto" <?php }else{ ?> style="color:ffffff;margin:auto"<?php }?>>FASHION</h1></td>
			<td width="25%" height="80" align="center" onclick="location='m.index.php?dir=jewelry'"><h1<?php if($_GET['dir']=="jewelry"){?> style="color:82807f;margin:auto" <?php }else{ ?> style="color:ffffff;margin:auto"<?php }?>>JEWELRY</h1></td>
			<td width="25%" height="80" align="center" onclick="location='m.index.php?dir=portrait'"><h1<?php if($_GET['dir']=="portrait"){?> style="color:82807f;margin:auto" <?php }else{ ?> style="color:ffffff;margin:auto"<?php }?>>PORTRAIT</h1></td>
			<td width="25%" height="80" align="center" onclick="location='m.index.php?dir=about'"><h1<?php if($_GET['dir']=="about"){?> style="color:82807f;margin:auto" <?php }else{ ?> style="color:ffffff;margin:auto"<?php }?>>ABOUT</h1></td>
		</tr>
		
	</table>
</div>

<table style="width: 100%;padding-top:90px" >
		<?php include 'm.content.php';?>
</table>

</body>
</html>
