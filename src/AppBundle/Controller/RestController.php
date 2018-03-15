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
use Symfony\Component\HttpFoundation\Response;


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
            $ldf = $request->get('ldf');
            $hangar = $request->get('hangar');
            $rest_list = $em->getRepository(Rest::class)->findByFilter($ldf, $hangar);
        }
        return $this->render('default/rest.html.twig', ['rest_list' => $rest_list, 'ldf_list' => $ldf_list, 'hangar_list' => $hangar_list]);
    }

    /**
     * @Route("/ajaxrequest",name="ajaxrequest")
     *
     * @param Request $request
     * @return Response
     */
    public function ajaxRequest(Request $request)
    {
        //echo 'asdasd';
        //var_dump($request);
        //die();
        if ($request->request->get('id')) {
            //var_dump($request->getContent());
            $rest = $this->getDoctrine()->getRepository(Rest::class)
                ->find($request->request->get('id'));
            $response = [
                'width' =>$rest->getWidth(),
                'height' =>$rest->getHeight(),
                'ldf' =>$rest->getLdf()->getName(),
                'barcode' => str_pad($rest->getLdf()->getCode(),2,'0',0).str_pad($rest->getWidth(),4,'0',0).str_pad($rest->getHeight(),4,'0',0)

            ];
            return new Response(json_encode($response));
        }

        return new Response('error');
    }

    /**
     *
     * @Route("/resttemplate",name="resttemplate")
     * @return Response
     *
     */
    public function restTemplate(){
        return $this->render('default/resttemplate.html.twig');
    }
}