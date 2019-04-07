<?php
//
// Конттроллер страницы чтения.
//

//include_once "C_Base.php";

include_once('/Users/o.varnakova/PhpstormProjects/geekbrains_php2/homework5/m/model.php');

class C_Page extends C_Base
{
	//
	// Конструктор.
	//
	
	public function action_index(){
		$this->title .= '::Чтение';
		$text = text_get();
		$this->content = $this->Template('v/v_index.php', array('text' => $text));	
	}
	
	public function action_edit(){
		$this->title .= '::Редактирование';
		
		if($this->isPost())
		{
			text_set($_POST['text']);
			header('location: index.php');
			exit();
		}
		
		$text = text_get();
		$this->content = $this->Template('v/v_edit.php', array('text' => $text));		
	}
}