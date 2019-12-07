<?php
function __autoload($classname){
	include $classname.".class.php";
}
class Factory{
	function action($url){
		$f=new Filter();
		if($f->filt($url) == false){
			return false;
		}else{
			$h=new Handler();
			if($h->handle($url) == false){
				return false;
			}else{
				return $h->handle($url);
			}
		}
	}
}
