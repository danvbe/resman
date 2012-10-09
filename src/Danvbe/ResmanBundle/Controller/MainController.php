<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 08.10.2012
 * Time: 15:42
 * To change this template use File | Settings | File Templates.
 */

namespace Danvbe\ResmanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MainController extends Controller
{
    /**
     * Home action
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\Response
     */
    public function homeAction(){

        return $this->render('DanvbeResmanBundle:Main:home.html.twig');
    }
}
