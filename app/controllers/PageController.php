<?php

abstract class PageController {

	protected $title;
	protected $metaDesc;

	public function subscribeToNewsLetter() {

	}

	abstract public function buildHTML(); 

}



