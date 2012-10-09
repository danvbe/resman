<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 08.10.2012
 * Time: 09:42
 * To change this template use File | Settings | File Templates.
 */

namespace Danvbe\ResmanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Danvbe\ResmanBundle\Form\Type\PropertyTypeType;
use Danvbe\ResmanBundle\Entity\PropertyType;
use Danvbe\ResmanBundle\Entity\ResourceType;
use Danvbe\ResmanBundle\Entity\ConnectionType;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{

    /**
     * Test action... do tests here :)
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\Response
     */
    public function testAction(){
        $property_type = new PropertyType();
        $form = $this->createForm(new PropertyTypeType(),$property_type);

        return $this->render('DanvbeResmanBundle:Admin:test.html.twig',array(
            'form'=>$form->createView(),
        ));
    }

    /**
     * Lists the resource types
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Bundle\FrameworkBundle\Controller\Response
     */
    public function listResourceTypeAction(Request $request){
        $em = $this->getDoctrine()->getManager();

        $resource_types = $em->getRepository('DanvbeResmanBundle:ResourceType')
            ->findAllOrderedByName();

        return $this->render('DanvbeResmanBundle:Admin:listResourceType.html.twig', array(
           'resource_types'=>$resource_types,
        ));
    }

    public function showResourceTypeAction(Request $request){
        $em = $this->getDoctrine()->getManager();

        if($id = $request->get('id')) {     //we have valid ID
            $resource_type = $em->getRepository('DanvbeResmanBundle:ResourceType')
                ->find($id);
            if(! $resource_type)    //object does not exist
                return $this->redirect($this->generateUrl('danvbe_resman_admin_resource_type_list'));
        }
        else        //no ID => redirect to listing
            return $this->redirect($this->generateUrl('danvbe_resman_admin_resource_type_list'));

        $repository = $em->getRepository('DanvbeResmanBundle:ConnectionType');
        return $this->render('DanvbeResmanBundle:Admin:showResourceType.html.twig', array(
            'resource_type' => $resource_type,
            'identification' =>$repository->findIdentification($resource_type),
        ));
    }

    /**
     * Form for CRUD operations on resource types
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Bundle\FrameworkBundle\Controller\RedirectResponse|\Symfony\Bundle\FrameworkBundle\Controller\Response
     */
    public function formResourceTypeAction(Request $request){
        $em = $this->getDoctrine()->getManager();

        if($id = $request->get('id')) {
            $resource_type = $em->getRepository('DanvbeResmanBundle:ResourceType')
                ->find($id);
        }
        else
            $resource_type = new ResourceType();

        $form = $this->createForm(new \Danvbe\ResmanBundle\Form\Type\ResourceTypeType(),$resource_type);

        if($request->getMethod() == 'POST'){
            $form->bind($request);
            if($form->isValid()){
                $resource_type = $form->getData();
                $em->persist($resource_type);
                $em->flush();
            }
            return $this->redirect($this->generateUrl('danvbe_resman_admin_resource_type_show',array(
                'id'=>$resource_type->getId(),
            )));
        }

        return $this->render('DanvbeResmanBundle:Admin:formResourceType.html.twig',array(
           'form' => $form->createView(),
        ));
    }


    public function formPropertyTypeAction(Request $request){
        $em = $this->getDoctrine()->getManager();

        $resource_type = ($id = $request->get('resource_type_id'))
                                ?$em->getRepository('DanvbeResmanBundle:ResourceType')->find($id)
                                :null;

        if(! $resource_type)
            return $this->redirect($this->generateUrl('danvbe_resman_admin_resource_type_list'));

        $property_type = new PropertyType();
        $property_type->setResourceType($resource_type);

        $form = $this->createForm(new PropertyTypeType(),$property_type);

        return $this->render('DanvbeResmanBundle:Admin:formPropertyType.html.twig',array(
            'form'=>$form->createView(),
        ));
    }
}
