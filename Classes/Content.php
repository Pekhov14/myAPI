<?php

class Content {

	private $title;

	 public function get_title($title) {
	 	$this->title = $title;
		return $this->title;
	}
}