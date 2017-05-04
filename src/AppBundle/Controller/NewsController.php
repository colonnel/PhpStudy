<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class NewsController extends Controller
{

    /**
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/news")
     */
    public function indexAction()
    {
        $title_id = "ID";
        $title_date = "Date";
        $title_header = "Header";
        return $this->render('news/news.html.twig', array('id' => $title_id, 'date' => $title_date,
            'header' => $title_header));
    }


}
