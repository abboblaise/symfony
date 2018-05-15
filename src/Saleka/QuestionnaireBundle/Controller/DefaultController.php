<?php

namespace Saleka\QuestionnaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {
	public function indexAction() {
		return $this->render('SalekaQuestionnaireBundle:Default:index.html.twig');
	}

	public function questionsAction() {
		$content = $this->get('templating')->render('SalekaQuestionnaireBundle:Questions:index.html.twig', array('question' => "Quel est votre nom?"));
		return new Response($content);
	}
}
