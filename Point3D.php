<?php
include_once "Point2D.php";


class Point3D extends Point2D
{
    public $z;
    public $arrayxyz=[];

    public function __construct($x, $y,$z)
    {
        parent::__construct($x, $y);
        $this->z=$z;
    }

    /**
     * @param mixed $z
     */
    public function setZ($z)
    {
        $this->z = $z;
    }

    /**
     * @return mixed
     */
    public function getZ()
    {
        return $this->z;
    }


    public function getXYZ()
    {
      array_push($this->arrayxyz,$this->x,$this->y,$this->z);
      return $this->arrayxyz;
    }
    public function toString()
    {
       foreach ($this->getXYZ() as $value){
           echo $value;
           echo " ";
       }
    }

}