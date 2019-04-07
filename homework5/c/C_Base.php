<?php
//
// Базовый контроллер сайта.
//

//include_once "C_Controller.php";

abstract class C_Base extends C_Controller
{
	protected $title;		// заголовок страницы
	protected $content;		// содержание страницы


	protected function before()
	{
		$this->title = 'Название сайта';
		$this->content = '';
	}
	
	//
	// Генерация базового шаблонаы
	//	
	public function render()
	{
		$vars = array('title' => $this->title, 'content' => $this->content);
		$page = $this->Template('v/v_main.php', $vars);				
		echo $page;
	}	
}
