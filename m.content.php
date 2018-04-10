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

					echo '<tr >
							<td  width="100%" align="center" >
								<img width="100%"  class="img" src="http://oeowm07yr.bkt.clouddn.com/'.$url.'" />
							</td>
						</tr>';
					
				}
			?>
