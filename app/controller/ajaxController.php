<?php 
	class ajaxController extends Controller
	{
		public function ajaxAction()
		{
			$this->view('ajax/ajax');
			if(!empty($n = $_POST['n']))
			{
				//Application::myDump($n);
			}
		}
	}
?>