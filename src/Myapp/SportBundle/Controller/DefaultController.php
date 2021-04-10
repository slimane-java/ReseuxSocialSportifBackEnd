<?php

namespace Myapp\SportBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Myapp\SportBundle\Entity\Utilisateur;

class DefaultController extends Controller
{

    

    public function indexAction()
    {

        return $this->render('MyappSportBundle:Default:index.html.twig');
    }

    public function AjouterAction()
    {
        header("Access-Control-Allow-Origin: *");

$json    =  file_get_contents('php://input');
$obj     =  json_decode($json);
$time = date('Y-m-d');

   






   
    


    $em = $this->getDoctrine()->getManager();
    $U=new Utilisateur();
    $U->setNom($obj[0]->NomU);
    $U->setPrenom($obj[0]->PrenomU);
    $U->setAdresse($obj[0]->AdresseU);
    $U->setTele($obj[0]->TeleU);
    $U->setEmail($obj[0]->EmailU);
    $U->setUserName($obj[0]->UsernameU);
    $U->setPassWord($obj[0]->PasswordU);
    $U->setVille($obj[0]->villeU);
    $U->setDateNaissence(new \DateTime($obj[0]->dateNaisenceU));
    $U->setPhoto($obj[0]->PhotoU);

    $U->setConect(1);
    $em->persist($U);
    $em->flush();

   
    return new JsonResponse(array("Nom"=>$obj[0]->NomU));
    }


 public function FindByEmilPassworedAction()
 {
    header("Access-Control-Allow-Origin: *");

    $json    =  file_get_contents('php://input');
    $obj     =  json_decode($json);
    
    
    $repository = $this->getDoctrine()->getRepository(Utilisateur::class);
    $user =  $repository->findOneBy(
        array('Email' =>'a', 'PassWord' =>'a')
    );
   //return new Response($user);
   // var_dump($user);die;
   
   

 if(empty($user))
 {
    return new JsonResponse(array("Valider"=>0));
 }
 else
 {
     return new JsonResponse(array("Valider"=>$user->getId()));
     
 }
   
 }

public function FindByIdAction($Id)
{
    header("Access-Control-Allow-Origin: *");
    $repository = $this->getDoctrine()->getRepository(Utilisateur::class);
    $user = $repository->findOneBy(
        array('Id' =>$Id)
    );
   $tab= array("Id"=>$user->getId(),"Nom"=>$user->getNom(),"Prenom"=>$user->getPrenom(),"DateNaissence"=>$user->getDateNaissence(),"Tele"=>$user->getTele(),"Email"=>$user->getEmail(),"UserName"=>$user->getUserName(),"PassWord"=>$user->getPassWord(),"Conect"=>$user->getConect(),"Ville"=>$user->getVille(),"Photo"=>$user->getPhoto(),"Adresse"=>$user->getAdresse());
    
   return new JsonResponse($tab);

}


}
