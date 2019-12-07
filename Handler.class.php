<?php
class Handler{
	function handle($url){
		$readdate=file_get_contents($url);
		if(($readdate && strpos($readdate,'trackinfo: [')) == false){
			return false;
		}else{
			$pos = strpos($readdate,'trackinfo: [');
			$pos2 = strpos($readdate,'playing_from:');
			$old_string_json=substr($readdate,$pos+10,$pos2-$pos-12);
			$new_string_json=substr($old_string_json,0,strpos($old_string_json,']')+1);
			$arr=json_decode($new_string_json);
			return $arr;
		}
	} 
}
