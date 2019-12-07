<?php
class Filter{
	function filt($url){
		//判断是否为URL
	$pattern="#(http|https)://(.*\.)?.*\..*#i";
	if(!preg_match($pattern,$url)){ 
		return false; 
	}else{ 		
			//判断字符串是否包含非法字符
			//指定的非法字符
			$arr=['~','!','@','#','$','%','^','&','*','(',')','+','{','}','[',']','?','`','='];
			foreach($arr as $value){
				if(strpos($url,$value) == true)
					return false;
			}

			return true;


		
	} 

	}
}
