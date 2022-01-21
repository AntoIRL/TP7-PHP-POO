<?php

    class Point
    {
        private $x;
        private $y;

        public function __construct(float $x, float $y)
        {
            $this->x=$x;
            $this->y=$y;
        }
        public function setX($x)
        {
            $this->x=$x;
        }
        public function getX()
        {
            return $this->x;
        }
        public function setY($y)
        {
            $this->y=$y;
        }
        public function getY()
        {
            return $this->y;
        }
    }


    $Coordonnees = new Point(20, 2.32);
    echo 'Les coordonnées initiales sont x='.$Coordonnees->getX().' et y='.$Coordonnees->getY().'<br/>';
    $Coordonnees->setX(12.87);
    $Coordonnees->setY(34);
    echo 'Les coordonnées sont désormais x='.$Coordonnees->getX().' et y='.$Coordonnees->getY();

?>