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
use AppBundle\Entity\Project;
use AppBundle\Entity\Rest;
use AppBundle\Entity\Status;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


/**
 * Class RestController
 * @package AppBundle\Controller
 */
class RestController extends Controller
{

    /**
     * @Route("/restscan", name="restscan")
     */
    public function restScan(Request $request)
    {
        $hangar = $this->getDoctrine()->getRepository(Hangar::class)->findAll();

        return $this->render('default/Rest/restscan.html.twig', ['hangar_list' => $hangar]);
    }


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
        return $this->render('default/Rest/rest.html.twig', ['rest_list' => $rest_list, 'ldf_list' => $ldf_list, 'hangar_list' => $hangar_list]);
    }

    /**
     * @Route("/ajaxrequest",name="ajaxrequest")
     *
     * @param Request $request
     * @return Response
     */
    public function ajaxRequest(Request $request)
    {

        $session = $this->get('session');

        if ($request->request->get('id')) {
            $rest = $this->getDoctrine()->getRepository(Rest::class)
                ->find($request->request->get('id'));
            $response = [
                [
                    'width' => $rest->getWidth(),
                    'height' => $rest->getHeight(),
                    'ldf' => $rest->getLdf()->getName(),
                    'barcode' => str_pad($rest->getLdf()->getCode(), 2, '0', 0) . str_pad($rest->getWidth(), 4, '0', 0) . str_pad($rest->getHeight(), 4, '0', 0)
                ]

            ];
            $session->set('data', $response);
            return new Response(json_encode($response));
        }
        return new Response('error');
    }

    /**
     * @Route("/ajax",name="ajax")
     * @param Request $request
     * @return Response
     */
    public function ajax(Request $request)
    {
        if ($request->request->get('barcode')) {
            //var_dump($request->getContent());
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

    /**
     *
     * @Route("/resttemplate",name="resttemplate")
     * @return Response
     *
     */
    public function restTemplate()
    {
        return $this->render('default/Rest/resttemplate.html.twig');
    }

    /**
     * @Route("/ajaxproject",name="ajaxproject")
     *
     * @param Request $request
     * @return Response
     */
    public function ajaxProject(Request $request)
    {

        $session = $this->get('session');
        $em = $this->getDoctrine()->getManager();
        if ($request->request->get('id')) {
            $project = $em->getRepository(Project::class)->find($request->request->get('id'));
            $status = $em->getRepository(Status::class)->find(3);

            if ($request->request->get('ldf') != 'all') {
                $ldf = $em->getRepository(LDF::class)->find($request->request->get('ldf'));
                $rest = $em->getRepository(Rest::class)
                    ->findBy([
                        'project' => $project,
                        'ldf' => $ldf,
                        'status' => $status
                    ]);
            } else {
                $rest = $em->getRepository(Rest::class)
                    ->findBy([
                        'project' => $project,
                        'status' => $status], [
                        'ldf' => 'ASC'
                    ]);
            }


            foreach ($rest as $value) {
                //  $value->setStatus($em->getRepository(Status::class)->find(2));
                // $em->persist($value);
                $response[] =
                    [
                        'width' => $value->getWidth(),
                        'height' => $value->getHeight(),
                        'ldf' => $value->getLdf()->getName(),
                        'barcode' => str_pad($value->getLdf()->getCode(), 2, '0', 0) . str_pad($value->getWidth(), 4, '0', 0) . str_pad($value->getHeight(), 4, '0', 0)
                    ];
            }

            //  $em->flush();
            //  var_dump($response);
            // die();
            $session->set('data', $response);
            return new Response(json_encode($response));
        }
        //die();
        return new Response('error');
    }

    /**
     * @Route("/printrest",name="printrest")
     *
     */
    public function printRest(Request $request)
    {
        $ldf = $this->getDoctrine()->getRepository(LDF::class)->findAll();
        if ($request->request->get('width') > 0) {
            $session = $this->get('session');
            $ldf_print = $this->getDoctrine()->getRepository(LDF::class)->find($request->request->get('ldf'));
            $response[] =
                [
                    'width' => $request->request->get('width'),
                    'height' => $request->request->get('height'),
                    'ldf' => $ldf_print->getName(),
                    'barcode' => str_pad($request->request->get('ldf'), 2, '0', 0) . str_pad($request->request->get('width'), 4, '0', 0) . str_pad($request->request->get('height'), 4, '0', 0)
                ];
            $session->set('data', $response);
            return new Response(json_encode($response));
        }
        return $this->render('default/Rest/restprint.html.twig', ['ldf_list' => $ldf]);
    }
}