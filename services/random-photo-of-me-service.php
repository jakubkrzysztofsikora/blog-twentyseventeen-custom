<?php
class random_photo_of_me_service
{
	private $photosPath;

	function __construct() {
       $this->photosPath = dirname(__FILE__) . '/../../../../public-photos';
   }

	public function getUrlOfRandomPhoto()
	{
		$arrayOfPaths = [];
		foreach (scandir($this->photosPath) as $filename) {
			$path = concatPaths($this->photosPath, $filename);
			$arrayOfPaths = addToArrayRealFilePath($arrayOfPaths, $path);
		}


		return $arrayOfPaths[rand(0, count($arrayOfPaths) - 1)];
	}

	private function addToArrayRealFilePath($array, $path)
	{
		if (is_file($path)) {
			array_push($array, createWebReadyRelativePath($path));
		}

		return $array;
	}

	private function concatPaths($path1, $path2)
	{
		return path1 . '/' . $path2;
	}

	private function createWebReadyRelativePath($path)
	{
		return substr($path, strlen($_SERVER['DOCUMENT_ROOT']));
	}
}
?>