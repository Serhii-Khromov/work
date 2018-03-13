<?php
/**
 * Created by PhpStorm.
 * User: Serg
 * Date: 12.03.2018
 * Time: 12:12
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Hangar;
use AppBundle\Entity\LDF;
use AppBundle\Entity\Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class RestController extends Controller
{
    /**
     * @Route("/rest",name="rest")
     */
    public function showRest(Request $request)
    {
        $em = $this->getDoctrine()
            ->getManager();
        $rest_list = $em
            ->getRepository(Rest::class)
            ->findAll();
        $ldf_list = $em
            ->getRepository(LDF::class)
            ->findAll();
        $hangar_list = $em
            ->getRepository(Hangar::class)
            ->findAll();
        if ($request->getContent()) {
            $ldf = $em->getRepository(LDF::class)->findBy(['id'=>$request->get('ldf')]);
            $hangar = $em->getRepository(Hangar::class)->findBy(['id'=>$request->get('hangar')]);
            $rest_list = $em->getRepository(Rest::class)->findBy(['ldf'=>$ldf, 'hangar'=>$hangar]);
        }
        return $this->render('default/rest.html.twig', ['rest_list' => $rest_list, 'ldf_list' => $ldf_list, 'hangar_list'=>$hangar_list]);
    }

}