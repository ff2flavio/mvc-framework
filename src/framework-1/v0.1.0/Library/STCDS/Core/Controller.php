<?php

namespace STCDS\Core;

class Controller {
	
	protected $model;
	protected $view;
	
	public function __construct(){
		$this->model = new Model();
		$this->view = new View($this->model);
	}
	
	public function clicked()
	{
		$this->model->string = 'Updating, MVC PHP is Working!';
	}
}
