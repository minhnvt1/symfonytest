<?php

namespace M3e\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use M3e\HelloBundle\Entity\Search;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$search = new Search();

    	$search->setQuery('Enter your query...');

    	$form = $this->createFormBuilder($search)
            ->add('query', 'text')
            ->getForm();

        return $this->render('M3eHelloBundle:Default:index.html.twig', array(
        	'form' => $form->createView(),
       	));
    }
    public function resultAction(Request $request)
    {
        $formData = $request->query->get('form');

       //$url = 'http://www.google.com.vn/search?q='.$formData['query'];

        return $this->redirect('http://www.google.com.vn/search?q='.$formData['query']);
        
    }
}
