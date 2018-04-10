<?php
	require_once('inc.config.php');
	$dir = trim($_GET['dir']);
	function traverse($path = './') {
			//opendir()返回一个目录句柄,失败返回false
		  $current_dir = opendir($path);
			//readdir()返回打开目录句柄中的一个条目
			$filearr = array();
		  while(($file = readdir($current_dir)) !== false) {
				//构建子目录路径
			  $sub_dir = $path.DIRECTORY_SEPARATOR.$file;
				
			  if($file == '.' || $file == '..' ) {

				  continue;
			  } else if(is_dir($sub_dir)) {
				  
				 //目录，递归
				 traverse($sub_dir);
			  } else{
					if('.' !== $file[0] ){
						$filearr[] = explode('.',$file);
					}
			  }
		  }
		  return $filearr;
	}
	//图片存放的目录名
	$directory = empty($dir)?'fashion':$dir;
	$fileinfo = traverse($directory);
	//获取排序所需的number
	foreach($fileinfo as $key=>$val){

		$temp_arr[] = $val[0];
		
	}
	//按照排序number对实际fileinfo进行排序
	array_multisort($temp_arr,$fileinfo);
?>
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
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="author" content="csw_jar@163.com" />
<title>LOGAN</title>
<link rel="stylesheet" type="text/css" href="css/stylev2.css" />
<link rel="stylesheet" type="text/css" href="css/works.css" />
<meta name="keywords" content="商业摄影,LOGAN,时装摄影,人像摄影">
</head>
<body style="text-align:center;" >

	<div id="page" >
		<div style="position:absolute;z-index:2100;">
			<?php include 'include_menu_v2.php';?>
		</div>
		<div id="content">
			<?php
					//文件夹的名字
					$case_url = $directory.DIRECTORY_SEPARATOR;
					//$title = '图片标题';
				for($i = 0,$len = count($fileinfo); $i < $len; $i++ ){
					$url = $case_url.$fileinfo[$i][0].'.'.$fileinfo[$i][1];
					//echo '<div><img class="img" src="images/loading.png" data-src="'.$url.'" /></div><p style="height:29px;">&nbsp;</p>';
//					echo '<div>
//							<div>
//								<img class="img"  src="images/loading.png" data-src="http://hasyimage.qiniudn.com/'.$url.'" />
//							</div>
//						</div>';

					echo '<div style="float:left;">
							<div style="position:absolute;z-index:2;">
								<img class="img" src="images/loading.png" data-src="http://oeowm07yr.bkt.clouddn.com/'.$url.'" />
							</div>
							<div style="margin-top:0px;">
								<img  class="img" src="images/loading.png" data-src="http://oeowm07yr.bkt.clouddn.com/load/'.$url.'" />
							</div>
						</div>
							<p style="height:29px;">&nbsp;</p>';
					
				}
			?>
		</div>
		<div style="clear:both;"></div>
		
	</div>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?eb682373693a4f841042a5e6912c98b1";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

</body>
</html>