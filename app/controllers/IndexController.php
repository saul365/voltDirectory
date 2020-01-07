<?php
use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
		
      		$this->assets->addCss('css/index.css');
		/*$contacts = $this->db->fetchAll(
    		"SELECT * FROM contacts",
    		\Phalcon\Db\Enum::FETCH_ASSOC
		);
		$this->view->setVar('contacts', $contacts);
		//$this->view->render('index','index');
		 */
		$this->view->contacts = Contacts::find();
    }
}

