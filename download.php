<!DOCTYPE html>
<html lang="zh-CN">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<title>FreeBandCamp</title>
	
	<!--  Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="jumbotron">
			<div class="container">
			<h1 class="text-center"><span class="text-primary">Free</span>BandCamp</h1>
			
			<h2 class="text-center">BandCamp音乐下载链接解析</font></h2>
			</div>
		</div>
		
		<div class="container">
			<?php
include "Factory.class.php";

$url=$_POST["url"];
if(!$url){
        echo '抱歉，请输入URL';
}else{
        $factory=new Factory();
        $res=$factory->action($url);
        $download_str="";
        if(!$res){
                echo '抱歉，无数据';
	}else{
		 for($i=0;$i<sizeof($res);$i++)
                {
                        $download_str='<a href="'.$res[$i]->file->{'mp3-128'}.'" >'.$res[$i]->title.'</a>';
                        echo $download_str;
                        echo "<br>";
		}	 
		echo '<font color="gray"><span>(提示:将链接另存为即可下载)</span></font>'; 
        }
}
?>
<br>
<br>
<a href="http://freebandcamp.abotaku.cn">返回主页</a>

<br>
			<br>
			<br>
			<div class="text-center text-muted">
				&copy;<a href="http://www.abotaku.cn">Abotaku</a>
			</div>
		</div>
	
	
	<script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
	</body>
</html>
