<?php

class AutoLoad {

	function core($className){
		$className = ltrim($className,'\\');
		$fileName = '';
		$namespace = '';
		if ($lastNsPos = strrpos($className, '\\')){
			$namespace = substr($className, 0, $lastNsPos);
			$className = substr($className, $lastNsPos + 1);
			$fileName = str_replace('\\', DS, $namespace) . DS;
				
			$fileName .= str_replace('\\', DS, $className) . '.php';
				
			require ROOT . DS .'Library'. DS . $fileName;
		}
	}
}