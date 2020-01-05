<?php
use Phalcon\Mvc\Controller;

class AlgoController extends Controller
{
    public function indexAction()
    {
	    	
		$prueba = $this->db->fetchAll(
    		"SELECT * FROM contacts",
    		\Phalcon\Db\Enum::FETCH_ASSOC
		);
		$this->view->setVar('prueba', $prueba);
		$this->view->setVar('hi', "No creo que funcione");
		$this->view->render('algo','index');

		/*foreach ($robots as $robot) {
    			print_r($robot);
		}*/
    }
}
