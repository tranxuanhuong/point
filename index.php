<?php
include_once "Point2D.php";
include_once "Point3D.php";

$point2=new Point2D(3,5);
$point2->toString();

echo "<br>";

$point3=new Point3D(3,4,5);
$point3->toString();