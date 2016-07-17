<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 16.07.16
 * Time: 15:34
 */

namespace Check\BlogBundle\Controller\Api;

use Check\BlogBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class UserController extends Controller
{

    /**
     * @Route("/api/user")
     * @Method("POST")
     */
    public function newAction(Request $request)
    {

        $body = $request->getContent();

        $data = json_decode($body);

        $user = new User();

        $em = $this->getDoctrine()->getManager();

        $response = $em->getRepository('CheckBlogBundle:User')->save($user, $data);

        return new Response(json_encode($response));
    }

}