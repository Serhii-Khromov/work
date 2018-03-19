<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Hangar;
use AppBundle\Entity\LDF;
use AppBundle\Entity\Project;
use AppBundle\Entity\Rest;
use AppBundle\Entity\Status;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $project = $this->getDoctrine()->getRepository(Project::class)->findAll();
        return $this->render('default/index.html.twig',['project_list' => $project]);
    }


}
