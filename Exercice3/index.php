<?php

    abstract class  forme
    {
        protected $hauteur;
        protected $largeur;
    }

    class Triangle extends forme
    {
        public function Surface()
        {
            return ($this->hauteur*$this->largeur)/2;
        }
        function __construct($hauteur,$largeur)
        {
            $this->hauteur = $hauteur;
            $this->largeur = $largeur;
        }

    }
    class Rectangle extends forme
    {
        public function Surface()
        {
            return ($this->hauteur*$this->largeur);
        }
        function __construct($hauteur,$largeur)
        {
            $this->hauteur = $hauteur;
            $this->largeur = $largeur;
        }
    }

    $Rectangle = new Rectangle(2,12);
    $Triangle = new Triangle(3,47);
    echo 'La suface du triangle est '.$Triangle->Surface().'</br>';
    echo 'La suface du rectangle est '.$Rectangle->Surface().'</br>';


?>