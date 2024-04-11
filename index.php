$bmwCar = new Vehice('car',4);
$bmwCar->setColor('red');
//Engine Running Waiting Passengers
$bmwCar->run();
//Two Passengers leaving.
$bmwCar->increaseCapacity(2);

echo $bmwCar->getCapacity();
//Result 3

$bmwCar->decreaseCapacity(2);
//Only Driver Goooing...

//Few minutes later
$bmwCar->stopEngine();
Driver Free..



