<?php
class random_photo_of_me_service
{
	private $photosRelativePath = '/photos';

	public function getUrlOfRandomPhoto()
	{
		$arrayOfPaths;
		
		foreach (scandir(dirname($photosRelativePath)) as $filename) {
			$path = dirname($photosRelativePath) . '/' . $filename;
			if (is_file($path)) {
				$arrayOfPaths.array_push($path);
			}
		}

		return $arrayOfPaths[rand(0, count($arrayOfPaths))];
	}
}
?>