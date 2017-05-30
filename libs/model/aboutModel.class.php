<?php
class aboutModel
{	
	private $file = 'data/about.txt';
	public function get_about_news(){
		return file_get_contents($this->file);
	}
} 
 ?>