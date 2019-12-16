<?php
use Phalcon\Mvc\Controller;

class AlgoController extends Controller
{
    public function indexAction()
    {
		$this->view->render('algo','index');
    }
}
