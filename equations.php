<?php

setParameterSetId("bb23baeded354b44980977800a952545");


$mm = 1;
$inch = 25.4 * $mm;

$degree = 1;
$radian = 180/pi();

$uts632Screw->clampingDiameter = 0.6 * $inch; 

$lightSwitchCover->mounting->screw = $uts632Screw;
$lightSwitchCover->roundingRadius = 3 * $mm;
$wallPlate->mountHoleInterval = 60.3 * $mm; //confirmed
$wallPlate->leverPort->extentX = 10.3 * $mm; //confirmed
$wallPlate->leverPort->extentZ = 23.8 * $mm; //confirmed

$lightSwitchCover->pokerPort->diameter =1.9 * $mm; //tweak me
$lightSwitchCover->pokerPortToWallPlateIntervalY = 9.5 * $mm; //tweak me

$lightSwitchCover->leverChamber->extentY = 16 * $mm; //adjust me
$lightSwitchCover->leverChamber->extentX = $wallPlate->leverPort->extentX;
$lightSwitchCover->leverChamber->extentZ = $wallPlate->leverPort->extentZ + 2*1.6 * $mm; 

$lightSwitchCover->wallThickness = 4 * $mm;

// $lightSwitchCover->extentX = 
	// max(
		// $lightSwitchCover->leverChamber->extentX + 2 * $lightSwitchCover->wallThickness,
		// $lightSwitchCover->mounting->screw->clampingDiameter
	// );

$lightSwitchCover->extentX = $lightSwitchCover->leverChamber->extentX + 2 * $lightSwitchCover->wallThickness;

$lightSwitchCover->extentZ = $wallPlate->mountHoleInterval + $lightSwitchCover->mounting->screw->clampingDiameter + 2 * $lightSwitchCover->roundingRadius;
$lightSwitchCover->extentY = $lightSwitchCover->leverChamber->extentY + $lightSwitchCover->wallThickness; 

$lightSwitchCover->earThickness = 5 * $mm;
$lightSwitchCover->logoEngravingDepth = 0.2 * $mm;

?>