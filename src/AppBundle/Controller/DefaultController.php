<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Hangar;
use AppBundle\Entity\LDF;
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
        $hangar = $this->getDoctrine()->getRepository(Hangar::class)->findAll();

        return $this->render('default/index.html.twig',['hangar_list'=>$hangar]);
    }

    /**
     * @Route("/ajax",name="ajax")
     * @param Request $request
     * @return Response
     */
    public function ajaxRequest(Request $request)
    {
        if ($request->request->get('barcode')) {
            var_dump($request->getContent());
            $em = $this->getDoctrine()->getManager();
            $hangar = $em->getRepository(Hangar::class)->find($request->request->get('hangar'));
            $status = $em->getRepository(Status::class)->find(2);
            $rest = new Rest();
            $ldf = $em->getRepository(LDF::class)
                ->findOneBy(['code' => substr($request->request->get('barcode'), 0, 2)]);
            $rest->setLdf($ldf);
            $rest->setHangar($hangar);
            $rest->setStatus($status);
            $rest->setCreated(new \DateTime());
            $rest->setWidth(substr($request->request->get('barcode'), 2, 4));
            $rest->setHeight(substr($request->request->get('barcode'), 6));

            $em->persist($rest);
            $em->flush();
            return new Response($ldf->getName() . ' - ' . substr($request->request->get('barcode'), 2, 4) . ' x ' . substr($request->request->get('barcode'), 6) . nl2br(PHP_EOL));
        }

        return new Response('error');
    }
}
