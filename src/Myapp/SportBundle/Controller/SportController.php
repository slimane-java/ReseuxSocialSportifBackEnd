<?php

namespace Myapp\SportBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Myapp\SportBundle\Entity\Sport;

class SportController extends Controller
{
    public function ListerAction()
    {

        return $this->render('MyappSportBundle:Default:Lister.html.twig');
    }

  
    
    public function AjouterAction()
    {
       header("Access-Control-Allow-Origin: *");

       $json =  file_get_contents('php://input');
       $obj  =  json_decode($json,true);
       $time =  date('Y-m-d');
    
       $em   =  $this->getDoctrine()->getManager();

   
      $S=new Sport();
      $S->setTitre($obj[0]['TitreS']);
      $S->setDateCreation(new \DateTime($obj[0]['DateCreationS']));
      $S->setDescription($obj[0]['DiscriptionS']);
      $S->setNbjoueur($obj[0]['nbJoureS']);
      $S->setPhoto($obj[0]['PhotoS']);
    
      $em->persist($S);
      $em->flush();
    
    

    return new JsonResponse( array("Nom"=>$obj[0]['TitreS'],"Date"=>$obj[0]['DateCreationS'],"Discription"=>$obj[0]['DiscriptionS'],"Nbjoures"=>$obj[0]['nbJoureS'],"Photo"=>$obj[0]['PhotoS']));


    }

}

?>