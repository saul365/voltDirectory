<?php
use Phalcon\Mvc\Controller;

class AddController extends Controller
{
    public function indexAction()
    {
    }
    public function saveAction()
    {
    	$contact = new Contacts();

        // Store and check for errors
        $success = $contact->save(
            $this->request->getPost(),
            [
                "name",
		"phone",
                "email",
		"company",
            ]
        );

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
