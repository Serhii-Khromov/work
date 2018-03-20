<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Project;
use AppBundle\Entity\Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        $project = $this->getDoctrine()->getRepository(Project::class)->findAll();

        foreach ($project as $key => $value){
            if ($value->getHasRest()) {
                $project[$key]->setLdf($this->getDoctrine()->getRepository(Rest::class)->findLdfByProject($value->getId()));
            }
    }

return $this->render('default/index.html.twig', ['project_list' => $project,]);
}

}
