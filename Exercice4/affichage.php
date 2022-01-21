<?php

   class personne
   {
       private $Nom;
       private $Prenom;
       private $Age;

       public function __construct(string $Nom,string $Prenom,int $Age)
       {
           $this->Nom = $Nom;
           $this->Prenom = $Prenom;
           $this->Age = $Age;
       }
       public function __destruct()
       {
           echo 'L\'objet a été détruit';
       }
       public function setNom($Nom)
       {
           $this->Nom = $Nom;
       }
       public function getNom()
       {
           return $this->Nom;
       }
       public function setPrenom($Prenom)
       {
           $this->Prenom = $Prenom;
       }
       public function getPrenom()
       {
           return $this->Prenom;
       }
       public function setAge($Age)
       {
           $this->Age = $Age;
       }
       public function getAge()
       {
           return $this->Age;
       }
   }

   function Homonyme($Perso1,$Perso2)
   {
        if (($Perso1->getNom() == $Perso2->getNom()) && ($Perso1->getPrenom() == $Perso2->getPrenom()) && ($Perso1->getAge() != $Perso2->getAge()))
        {
            echo 'Vous êtes des homonymes'.'</br>';
        }
   }
   function DememeFamille($Perso1,$Perso2)
   {
       if (($Perso1->getNom() == $Perso2->getNom()))
       {
           echo 'Vous êtes de la même famille'.'</br>';
       }
   }
   function DememeGeneration($Perso1,$Perso2)
   {
       $Generation = array(10, 18, 35,55);

       function RecupGeneration(int $Age, array $Generation)
       {
           $BoolGeneration = False;
           for ($i = 1; $i <= 3; $i++)
           {
                if ($Generation($i) >= $Age)
                {
                    $BoolGeneration = True;
                    return $Generation($i);
                }
           }
           if ($BoolGeneration == False)
           {
               return 100;
           }
       }

       $Generation_P1 = RecupGeneration($Perso1->getAge(),$Generation);
       $Generation_P2 = RecupGeneration($Perso2->getAge(),$Generation);

       if ($Generation_P1 == $Generation_P2)
       {
           echo 'Vous êtes de la même génération';
       }

   }

    $Perso1 = new personne($_POST['NomPerso1'],$_POST['PrenomPerso1'],$_POST['AgePerso1']);
    $Perso2 = new personne($_POST['NomPerso2'],$_POST['PrenomPerso2'],$_POST['AgePerso2']);

    Homonyme($Perso1,$Perso2);
    DememeFamille($Perso1,$Perso2);
    DememeGeneration($Perso1,$Perso2);

?>