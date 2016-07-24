<?php

setParameterSetId("bb23baeded354b44980977800a952545");


$mm = 1;
$inch = 25.4 * $mm;

$degree = 1;
$radian = 180/pi();

$uts632Screw->clampingDiameter = 0.6 * $inch; 

$lightSwitchCover->mounting->screw = $uts632Screw;

$wallPlate->mountHoleInterval = 50 * $mm; //FIX ME
$wallPlate->leverPort->extentX = 8 * $mm; //FIX ME
$wallPlate->leverPort->extentZ = 20 * $mm; //FIX ME

$lightSwitchCover->pokerPort->diameter =3 * $mm; //tweak me
$lightSwitchCover->pokerPortToWallPlateIntervalY = 7 * $mm; //tweak me

$lightSwitchCover->leverChamber->extentY = 10 * $mm; //tweak me
$lightSwitchCover->leverChamber->extentX = $wallPlate->leverPort->extentX;
$lightSwitchCover->leverChamber->extentZ = $wallPlate->leverPort->extentZ; 

$lightSwitchCover->wallThickness = 3 * $mm;

// $lightSwitchCover->extentX = 
	// max(
		// $lightSwitchCover->leverChamber->extentX + 2 * $lightSwitchCover->wallThickness,
		// $lightSwitchCover->mounting->screw->clampingDiameter
	// );

$lightSwitchCover->extentX = $lightSwitchCover->leverChamber->extentX + 2 * $lightSwitchCover->wallThickness;

$lightSwitchCover->extentZ = $wallPlate->mountHoleInterval + $lightSwitchCover->mounting->screw->clampingDiameter;
//$lightSwitchCover->extentY = ...; //fix or ignore

$lightSwitchCover->earThickness = 5 * $mm;


?>