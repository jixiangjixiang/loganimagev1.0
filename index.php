
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<script type="text/javascript" src="js/jquery-1.6.1.js"></script> 
<script type="text/javascript" src="js/jquery.unveil.js"></script> 
<script
	type="text/javascript" src="js/init.js"></script>
<script type="text/javascript">

$(document).ready(function() {
	 var isMobile = {
		Android: function() {
		    return navigator.userAgent.match(/Android/i) ? true : false;
		},
		BlackBerry: function() {
		    return navigator.userAgent.match(/BlackBerry/i) ? true : false;
		},
		iOS: function() {
		    return navigator.userAgent.match(/iPhone|iPad|iPod/i) ? true : false;
		},
		Windows: function() {
		    return navigator.userAgent.match(/IEMobile/i) ? true : false;
		},
		any: function() {
		    return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Windows());
		}
	};
    if( isMobile.any() ) 
    {
    	self.location='m.index.php';                                                       
    }

	    	          
	initbackgroundimg();
	initmenu();
});

</script> 


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>LOGAN</title>
<link rel="stylesheet" type="text/css" href="css/stylev2.css" />
<link rel="stylesheet" type="text/css" href="css/index_menu.css" />
<meta name="keywords" content="商业摄影,LOGAN,时装摄影,人像摄影">
</head>
<!--<body style="text-align:center;" onload="initbackgroundimg();">-->
<body style="text-align:center;background-color: rgb(0,0,0)" >
		<div style="position:absolute;z-index:2;">
			<?php include 'include_menu_v2.php';?>
		</div>
		<div id="back" style="margin-top:0px;overflow: hidden;height: 0px;width: 100%;">
			<div style="width:100%;height:auto;text-align:center;padding-top:200px;position:absolute;z-index:1;">
				<table style="margin:auto;top:50%;">
				 <tr class="center_menu"><td>
				 	<?php 
				 		$url;
				 		if($_GET['dir']=="fashion"){
					 			$url="fashion";
					 		}else if ($_GET['dir']=="jewelry"){
					 			$url="jewelry";
					 		}else if ($_GET['dir']=="portrait"){
					 			$url="portrait";
					 		}else if ($_GET['dir']=="about"){
					 			$url="about";
					 		}else{
					 			$url="fashion";
					 		}
				 	?>
					 <a style="font-size: 80px;color:#808080;font-weight: bold;" href="works.php?dir=<?php echo $url?>">
					 	<?php 
					 		if($_GET['dir']=="fashion"){
					 			echo "FASHION";
					 		}else if ($_GET['dir']=="advertising"){
					 			echo "ADVERTISING";
					 		}else if ($_GET['dir']=="portait"){
					 			echo "PORTAIT";
					 		}else if ($_GET['dir']=="wedding"){
					 			echo "WEDDING";
					 		}else if ($_GET['dir']=="about"){
					 			echo "ABOUT";
					 		}
					 	?>
					 </a>
				 </td></tr>
				</table>
				
			</div>
			<a href="works.php?dir=<?php echo $url?>">
				<img  id="backImg" style="width: 100%" 
					<?php 
						if($_GET['dir']=="fashion"){
					 			echo 'src="http://7xjk35.dl1.z0.glb.clouddn.com/bigimg/4.jpg"';
					 		}else if ($_GET['dir']=="advertising"){
					 			echo 'src="http://7xjk35.dl1.z0.glb.clouddn.com/bigimg/7.jpg"';
					 		}else if ($_GET['dir']=="portait"){
					 			echo 'src="http://7xjk35.dl1.z0.glb.clouddn.com/bigimg/8.jpg"';
					 		}else if ($_GET['dir']=="wedding"){
					 			echo 'src="http://7xjk35.dl1.z0.glb.clouddn.com/bigimg/6.jpg"';
					 		}else if ($_GET['dir']=="about"){
					 			echo 'src="http://7xjk35.dl1.z0.glb.clouddn.com/bigimg/3.jpg"';
					 		}else {
					 			echo 'src="http://7xjk35.dl1.z0.glb.clouddn.com/bigimg/16.jpg"';
					 		}
					?>
				 /> 
			</a>
		</div>
		
		
		
</body>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?eb682373693a4f841042a5e6912c98b1";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</html>