<?php

namespace AppBundle\Controller;

use AppBundle\Record;
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
        $records_array = $this->generateArray();
        return $this->render('news/news.html.twig', array('records' => $records_array));
    }

    /**
     * Function generates array of objects Record
     * @return array
     */
    private function generateArray()
    {
        $array = array();
        for ($i = 1; $i <= 5; $i++) {
            $array[$i] = new Record($i, "Header #" . $i);
        }
        return $array;
    }
}
