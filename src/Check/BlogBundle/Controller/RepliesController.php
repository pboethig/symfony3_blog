<?php

namespace Check\BlogBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Pagerfanta\Pagerfanta;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\View\TwitterBootstrap3View;

use Check\BlogBundle\Entity\Replies;
use Check\BlogBundle\Form\RepliesType;

use Check\BlogBundle\Form\RepliesFilterType;

/**
 * Replies controller.
 *
 * @Route("/replies")
 */
class RepliesController extends Controller
{
    /**
     * Lists all Replies entities.
     *
     * @Route("/", name="replies")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $queryBuilder = $em->getRepository('CheckBlogBundle:Replies')->createQueryBuilder('e');
        list($filterForm, $queryBuilder) = $this->filter($queryBuilder, $request);

        list($replies, $pagerHtml) = $this->paginator($queryBuilder, $request);
        
        return $this->render('replies/index.html.twig', array(
            'replies' => $replies,
            'pagerHtml' => $pagerHtml,
            'filterForm' => $filterForm->createView(),

        ));
    }

    
    /**
    * Create filter form and process filter request.
    *
    */
    protected function filter($queryBuilder, $request)
    {
        $session = $request->getSession();
        $filterForm = $this->createForm('Check\BlogBundle\Form\RepliesFilterType');

        // Reset filter
        if ($request->get('filter_action') == 'reset') {
            $session->remove('RepliesControllerFilter');
        }

        // Filter action
        if ($request->get('filter_action') == 'filter') {
            // Bind values from the request
            $filterForm->submit($request->query->get($filterForm->getName()));

            if ($filterForm->isValid()) {
                // Build the query from the given form object
                $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($filterForm, $queryBuilder);
                // Save filter to session
                $filterData = $filterForm->getData();
                $session->set('RepliesControllerFilter', $filterData);
            }
        } else {
            // Get filter from session
            if ($session->has('RepliesControllerFilter')) {
                $filterData = $session->get('RepliesControllerFilter');
                $filterForm = $this->createForm('Check\BlogBundle\Form\RepliesFilterType', $filterData);
                $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($filterForm, $queryBuilder);
            }
        }

        return array($filterForm, $queryBuilder);
    }

    /**
    * Get results from paginator and get paginator view.
    *
    */
    protected function paginator($queryBuilder, $request)
    {
        // Paginator
        $adapter = new DoctrineORMAdapter($queryBuilder);
        $pagerfanta = new Pagerfanta($adapter);
        $currentPage = $request->get('page', 1);
        $pagerfanta->setCurrentPage($currentPage);
        $entities = $pagerfanta->getCurrentPageResults();

        // Paginator - route generator
        $me = $this;
        $routeGenerator = function($page) use ($me)
        {
            return $me->generateUrl('replies', array('page' => $page));
        };

        // Paginator - view
        $view = new TwitterBootstrap3View();
        $pagerHtml = $view->render($pagerfanta, $routeGenerator, array(
            'proximity' => 3,
            'prev_message' => 'previous',
            'next_message' => 'next',
        ));

        return array($entities, $pagerHtml);
    }
    
    

    /**
     * Displays a form to create a new Replies entity.
     *
     * @Route("/new", name="replies_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
    
        $reply = new Replies();
        $form   = $this->createForm('Check\BlogBundle\Form\RepliesType', $reply);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reply);
            $em->flush();

            return $this->redirectToRoute('replies_show', array('id' => $reply->getId()));
        }
        return $this->render('replies/new.html.twig', array(
            'reply' => $reply,
            'form'   => $form->createView(),
        ));
    }
    
    

    
    /**
     * Finds and displays a Replies entity.
     *
     * @Route("/{id}", name="replies_show")
     * @Method("GET")
     */
    public function showAction(Replies $reply)
    {
        $deleteForm = $this->createDeleteForm($reply);
        return $this->render('replies/show.html.twig', array(
            'reply' => $reply,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    

    /**
     * Displays a form to edit an existing Replies entity.
     *
     * @Route("/{id}/edit", name="replies_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Replies $reply)
    {
        $deleteForm = $this->createDeleteForm($reply);
        $editForm = $this->createForm('Check\BlogBundle\Form\RepliesType', $reply);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reply);
            $em->flush();
            
            $this->get('session')->getFlashBag()->add('success', 'Edited Successfully!');
            return $this->redirectToRoute('replies_edit', array('id' => $reply->getId()));
        }
        return $this->render('replies/edit.html.twig', array(
            'reply' => $reply,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    

    /**
     * Deletes a Replies entity.
     *
     * @Route("/{id}", name="replies_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Replies $reply)
    {
    
        $form = $this->createDeleteForm($reply);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($reply);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'flash.delete.success');
        } else {
            $this->get('session')->getFlashBag()->add('error', 'flash.delete.error');
        }
        
        return $this->redirectToRoute('replies');
    }
    
    /**
     * Creates a form to delete a Replies entity.
     *
     * @param Replies $reply The Replies entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Replies $reply)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('replies_delete', array('id' => $reply->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
    /**
     * Delete Replies by id
     *
     * @param mixed $id The entity id
     * @Route("/delete/{id}", name="replies_by_id_delete")
     * @Method("GET")
     */
    public function deleteById($id){

        $em = $this->getDoctrine()->getManager();
        $reply = $em->getRepository('CheckBlogBundle:Replies')->find($id);
        
        if (!$reply) {
            throw $this->createNotFoundException('Unable to find Replies entity.');
        }
        
        try {
            $em->remove($reply);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'flash.delete.success');
        } catch (Exception $ex) {
            $this->get('session')->getFlashBag()->add('error', 'flash.delete.error');
        }

        return $this->redirect($this->generateUrl('replies'));

    }
    
    
    
    /**
    * Bulk Action
    * @Route("/bulk-action/", name="replies_bulk_action")
    * @Method("POST")
    */
    public function bulkAction(Request $request)
    {
        $ids = $request->get("ids", array());
        $action = $request->get("bulk_action", "delete");

        if ($action == "delete") {
            try {
                $em = $this->getDoctrine()->getManager();
                $repository = $em->getRepository('CheckBlogBundle:Replies');

                foreach ($ids as $id) {
                    $reply = $repository->find($id);
                    $em->remove($reply);
                    $em->flush();
                }

                $this->get('session')->getFlashBag()->add('success', 'replies was deleted successfully!');

            } catch (Exception $ex) {
                $this->get('session')->getFlashBag()->add('error', 'Problem with deletion of the replies ');
            }
        }

        return $this->redirect($this->generateUrl('replies'));
    }
    
    
}
