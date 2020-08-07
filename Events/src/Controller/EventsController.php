<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Events;

class EventsController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function showAll()
    {
        $events = $this->getDoctrine()->getRepository('App:Events')->findAll();

        return $this->render('events/index.html.twig', array('events'=>$events));
    }

    /**
    * @Route("/create", name="create")
    */
   public function createAction(Request $request)
   {
       $event = new Events;

       $form = $this->createFormBuilder($event)->
       			add('name', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:10px')))->  			
       			add('description', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:10px')))->
       			add('img', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:10px')))->
       			add('capacity', NumberType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:10px')))->
       			add('email', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:10px')))->
       			add('phone', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:10px')))->
       			add('address', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:10px')))->
       			add('url', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:10px')))->
       			add('type', ChoiceType::class, array('choices'=>array('Music'=>'Music', 'Sport'=>'Sport', 'Movie'=>'Movie', 'Theater'=>'Theater')))->
            add('day', DateType::class, array('attr' => array('style'=>'margin-bottom:10px')))->
            add('time_of', TimeType::class, array('attr' => array('style'=>'margin-bottom:10px')))->
       			add('save', SubmitType::class, array('label'=> 'Create Event', 'attr' => array('class'=> 'btn-primary', 'style'=>'margin-bottom:10px')))            
       			->getForm();
       			$form->handleRequest($request);

       			if($form->isSubmitted() && $form->isValid())
       			{
       				$name = $form['name']->getData();        			
        			$description = $form['description']->getData();
        			$img = $form['img']->getData();
        			$capacity = $form['capacity']->getData();
        			$email = $form['email']->getData();
        			$phone = $form['phone']->getData();
        			$address = $form['address']->getData();
        			$url = $form['url']->getData();    			
        			$type= $form['type']->getData();
              $day = $form['day']->getData();
              $time_of = $form['time_of']->getData();

        			$event->setName($name);        			
        			$event->setDescription($description);
        			$event->setImg($img);
        			$event->setCapacity($capacity);
        			$event->setEmail($email);
        			$event->setPhone($phone);
        			$event->setAddress($address);
        			$event->setUrl($url);        			
        			$event->setType($type);
              $event->setDay($day);
              $event->setTimeOf($time_of);

        			$em = $this->getDoctrine()->getManager();
        			$em->persist($event);
        			$em->flush();

        			$this->addFlash(
        						'notice',
        						'Added');
        			return $this->redirectToRoute('home');
       			}

       			return $this->render('events/create.html.twig', array('form'=>$form->createView()));
   	}

   /**
    * @Route("/update/{id}", name="update")
    */
   public function updateAction($id, Request $request)
   {
       $event = $this->getDoctrine()->getRepository(Events::class)->find($id);

       	$event->setName($event->getName());        
        $event->setDescription($event->getDescription());
        $event->setImg($event->getImg());
        $event->setCapacity($event->getCapacity());
        $event->setEmail($event->getEmail());
        $event->setPhone($event->getPhone());
        $event->setAddress($event->getAddress());
        $event->setUrl($event->getUrl());       
        $event->setType($event->getType());
        $event->setDay($event->getDay());
        $event->setTimeOf($event->getTimeOf());

        $form = $this->createFormBuilder($event)->
       			add('name', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:10px')))->  			
       			add('description', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:10px')))->
       			add('img', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:10px')))->
       			add('capacity', NumberType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:10px')))->
       			add('email', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:10px')))->
       			add('phone', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:10px')))->
       			add('address', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:10px')))->
       			add('url', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:10px')))->
       			add('type', ChoiceType::class, array('choices'=>array('Music'=>'Music', 'Sport'=>'Sport', 'Movie'=>'Movie', 'Theater'=>'Theater')))->
            add('day', DateType::class, array('attr' => array('style'=>'margin-bottom:10px')))->
            add('time_of', TimeType::class, array('attr' => array('style'=>'margin-bottom:10px')))->
       			add('save', SubmitType::class, array('label'=> 'Create Event', 'attr' => array('class'=> 'btn-primary', 'style'=>'margin-bottom:10px')))
       			->getForm();
       			$form->handleRequest($request);

       			if($form->isSubmitted() && $form->isValid())
       			{
       				$name = $form['name']->getData();        			
        			$description = $form['description']->getData();
        			$img = $form['img']->getData();
        			$capacity = $form['capacity']->getData();
        			$email = $form['email']->getData();
        			$phone = $form['phone']->getData();
        			$address = $form['address']->getData();
        			$url = $form['url']->getData();    			
        			$type= $form['type']->getData();
              $day = $form['day']->getData();
              $time_of = $form['time_of']->getData();              

        			$em = $this->getDoctrine()->getManager();
        			$event = $em->getRepository('App:Events')->find($id);

        			$event->setName($name);        			
        			$event->setDescription($description);
        			$event->setImg($img);
        			$event->setCapacity($capacity);
        			$event->setEmail($email);
        			$event->setPhone($phone);
        			$event->setAddress($address);
        			$event->setUrl($url);        			
        			$event->setType($type);
              $event->setDay($day);
              $event->setTimeOf($time_of);

        			$em->flush();
        			$this->addFlash(
        						'notice',
        						'Event Updated');
        			return $this->redirectToRoute('home');
        		}
        		return $this->render('events/update.html.twig', array('event'=>$event, 'form'=>$form->createView()));

   	}

   /**
    * @Route("/details/{id}", name="details")
    */
   public function detailsAction($id)
   {
      
       $event = $this->getDoctrine()->getRepository(Events::class)->find($id);

       return $this->render('events/details.html.twig', array('event'=>$event));
   }

   /**
    * @Route("/delite/{id}", name="delite")
    */
   public function deliteAction($id)
   {
        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository('App:Events')->find($id);
        $em->remove($event);
        $em->flush();
        $this->addFlash(
                	'notice',
                	'Event Removed');

        return $this->redirectToRoute('home');
   }
}