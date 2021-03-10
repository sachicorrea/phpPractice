
<?php
// Form validation
function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// FOREACH SELECTS
function optionize($string){
  return str_replace(' ', '_', strtolower($string));
}

// 5th ACTIVITY Triangle properties calculation

function triangleOperations($base, $height, $calculation){
  $squareHypot = pow($base,2) + pow($height,2); // Pytagoras' theorem
  $hypotenuse = sqrt($squareHypot); // Hypotenuse
  
  if(isset($calculation) && $calculation=="area") {
    return "Triangle area: " . (($base * $height)/2);
  }

  elseif(isset($calculation) && $calculation=="perimeter"){
    return "Triangle perimeter: " . ($base + $height + $hypotenuse);
  }

  else {
    return "Triangle hypotenuse: " . $hypotenuse;
  }
}

//8TH ACTIVITY - FLIGHTS
$value = '';
$increase = '';
$age = '';
$services = '';

function flightCost($origin, $flight_to)
{
  if($origin == 'manizales' && $flight_to == 'neiva' || $origin == 'neiva' && $flight_to == 'manizales'){
    return 347000;
  }

  elseif ($origin == 'pereira' && $flight_to == 'manizales' || $origin == 'manizales' && $flight_to == 'pereira') {
    return 360000;
  }

  elseif ($origin == 'manizales' && $flight_to == 'pasto' || $origin == 'pasto' && $flight_to == 'manizales') {
    return 382000;
  }

  elseif ($origin == 'neiva' && $flight_to == 'pereira'|| $origin == 'pereira' && $flight_to == 'neiva') {
    return 375000;
  }

  elseif ($origin == 'neiva' && $flight_to == 'pasto' || $origin == 'pasto' && $flight_to == 'neiva') {
    return 392000;
  }

  elseif ($origin == 'pereira' && $flight_to == 'pasto' || $origin == 'pasto' && $flight_to == 'pereira') {
    return 408000;
  }

  else {
    return "Origin and city of destiny are equal. Choose different ones";
  }
}

function increasing($value, $flight_class)
{
  if($flight_class == 'tourist')
  {
    return $value;
  }
  elseif ($flight_class == 'first_class')
  {
    return $value * 0.20;
  }
  elseif ($flight_class == 'executive') 
  {
    return $value * 0.50;
  }
  else 
  {
    return "Choose a category flight class";
  }
}

function discounts($value, $age)
{
  if($age > 30)
  {
    return $value * 0.10;
  }
  elseif ($age <= 30)
  {
    return $value * 0.15;
  }
  else {
    return 'Any age was entered';
  }
}

function servicesCost($services)
{
  if(empty($services)){
    return 0;
  }
  else {
    // Loop to estimate services costs
    $sum = 0;

    foreach($services as $key => $value)
    {
      $sum += $value;
    }
    return $sum;
  }
}

// 9TH ACTIVITY - CARS DEALERSHIP
function carCost($model, $version)
{
  if($model == 'twingo' && $version == 'basic')
  {
    return 21990000;
  }
  else if($model == 'twingo' && $version == 'air')
  {
    return 23990000;
  }
  else if($model == 'sandero' && $version == 'basic')
  {
    return 25490000;
  }
  else if($model == 'sandero' && $version == 'air')
  {
    return 27490000;
  }
  else if($model == 'koleos' && $version == 'basic')
  {
    return 59990000;
  }
  else if($model == 'koleos' && $version == 'air')
  {
    return 64490000;
  }
  else if($model == 'logan' && $version == 'basic')
  {
    return 23490000;
  }
  else if($model == 'logan' && $version == 'air')
  {
    return 25490000;
  }
}

function accesoriesCost($accesories)
{
  if(empty($accesories)){
    return 0;
  }
  else {
    // Loop to estimate accesories costs
    $sum = 0;

    foreach($accesories as $key => $value)
    {
      $sum += $value;
    }
    return $sum;
  }
}

function discountGender($value, $gender)
{
  if($gender == 'woman')
  {
    return $value * 0.05;
  }
  else
  {
    return $value;
  }
}
?>