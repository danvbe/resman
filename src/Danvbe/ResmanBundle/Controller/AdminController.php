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
use \Danvbe\ResmanBundle\Entity\ConnectedResourceType;

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
            ->getAllNonPropertiesOrderedByNameQueryBuilder()->getQuery()->getResult();

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

        if($request->getMethod() == 'POST'){
            $property_type = new PropertyType();
            $form = $this->createForm(new PropertyTypeType(),$property_type);
            $form->bind($request);
            if($form->isValid()){
                $property_type = $form->getData();
                $resource_type = $property_type->getResourceType();

                $name = $property_type->getName().'_'.$resource_type->getName();
                $desc = 'Tip de proprietate "'.$property_type->getName().'" pentru tipul de resursa '.$resource_type->getName();

                $property_resource_type = new ResourceType();
                $property_resource_type->setName($name);
                $property_resource_type->setDescription($desc);
                $property_resource_type->setDataType($property_type->getDataType());
                $em->persist($property_resource_type);

                $connection_type = new ConnectionType();
                $connection_type->setName($property_type->getName());
                $connection_type->setDescription($property_type->getName());
                $connection_type->setIsLabel(true);
                $connection_type->setType($property_type->getType());
                $em->persist($connection_type);

                $connected_resource_type = new ConnectedResourceType();
                $connected_resource_type->setConnectionType($connection_type);
                $connected_resource_type->setResourceType($resource_type);
                $connected_resource_type->setIsMaster(true);
                $connected_resource_type->setIsUnique(false);
                $connected_resource_type->setIsChoosable(false);
                $connected_resource_type->setIsRequired(false);
                $connected_resource_type->setIsSingleInstance(false);
                $connected_resource_type->setName($name);
                $connected_resource_type->setDescription($desc);
                $em->persist($connected_resource_type);

                $connected_resource_type = new ConnectedResourceType();
                $connected_resource_type->setConnectionType($connection_type);
                $connected_resource_type->setResourceType($property_resource_type);
                $connected_resource_type->setIsMaster(false);
                $connected_resource_type->setIsUnique(false);
                $connected_resource_type->setIsChoosable(false);
                $connected_resource_type->setIsRequired(false);
                $connected_resource_type->setIsSingleInstance(false);
                $connected_resource_type->setName($name);
                $connected_resource_type->setDescription($desc);
                $em->persist($connected_resource_type);

                $em->flush();

                return $this->redirect($this->generateUrl('danvbe_resman_admin_resource_type_show',array('id'=>$property_type->getResourceType()->getId())));
            }

            return $this->render('DanvbeResmanBundle:Admin:formPropertyType.html.twig',array(
                'form'=>$form->createView(),
            ));
        }

        $resource_type = ($id = $request->get('resource_type_id'))
                                ?$em->getRepository('DanvbeResmanBundle:ResourceType')->find($id)
                                :null;
        $type = ($type = $request->get('type'))
                                ?$em->getRepository('DanvbeResmanBundle:TypeOfConnectionType')->findOneByType($type)
                                :null;

        if( (! $resource_type ) || (! $type ))
            return $this->redirect($this->generateUrl('danvbe_resman_admin_resource_type_list'));

        $property_type = new PropertyType();
        $property_type->setResourceType($resource_type);
        $property_type->setType($type);

        $form = $this->createForm(new PropertyTypeType(),$property_type);

        return $this->render('DanvbeResmanBundle:Admin:formPropertyType.html.twig',array(
            'form'=>$form->createView(),
        ));
    }
}
