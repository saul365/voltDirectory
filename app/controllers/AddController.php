<?php
use Phalcon\Mvc\Controller;

class AddController extends Controller
{
    public function indexAction()
    {
      		//$this->assets->addCss('css/index.css');
      		//$this->view->setVar('prueba', $prueba);
    }
    public function saveAction()
    {
        $contact = new Contacts();

        // Store and check for errors
         $contact->assign(
            $this->request->getPost(),
            [
                "name",
                "phone",
                "email",
                "company",
            ]
        );
	
	$success=$contact->save();

        if ($success) {
            echo "Thanks for registering!";
        } else {
            echo "Sorry, the following problems were generated: ";

            $messages = $contact->getMessages();

            foreach ($messages as $message) {
                echo $message->getMessage(), "<br/>";
            }
        }
   }

}
