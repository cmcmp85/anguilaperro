<?php

class Controllers_Exam
{

	public $content;
	public $request;

	public function __construct($request)
	{
		$this->request=$request;
	}

	public function indexAction($viewparams)
	{
		$exam = new Model_Exam();
		$viewparams['exam']=$exam->getExam();
		$this->content=renderView($this->request,$viewparams);
	}

	public function __destruct()
	{
		$layoutparams=array('content'=>$this->content);
		echo renderLayout('backend', $layoutparams);
	}


}
