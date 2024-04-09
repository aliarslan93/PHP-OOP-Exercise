$bmwCar = new Vehice('car',4);
$bmwCar->setColor('red');
//Engine Running Waiting Passengers
$bmwCar->run();
//Two Passengers leaving.
$bmwCar->increaseCapacity(2);

echo $bmwCar->getCapacity();
//Result

//Only Driver Goooing...

//Few days later

$bmwCar->stopEngine();



