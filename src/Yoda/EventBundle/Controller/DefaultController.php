<?php

namespace Yoda\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

//use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {

    public function indexAction($count, $name) {
        $params = array('name' => $name, 'count' => $count);
        return $this->render('EventBundle:Default:index.html.twig', $params);
    }

}
