<?php
require('Database.php');


// Exemple de singleton
//$database1 = Database::getInstance();
//$database2 = Database::getInstance();
//
//if ($database1 === $database2) {
//    echo "Les deux instances sont identiques";
//} else {
//    echo "Les deux instances sont différentes";
//}
require ('AnimalFactory.php');
require ('AnimalInterface.php');
require ('Dog.php');
require ('Cat.php');
// Exemple de Factory
//$dog = (new AnimalFactory)->createAnimal('dog');
//echo $dog->makeSound(); // Woof
//
//$cat = (new AnimalFactory)->createAnimal('cat');
//echo $cat->makeSound(); // Meow

// Bad
//$badDog = new Dog();
//echo $badDog->makeSound();

// Pourquoi mauvais ?
// Si demain, je veux ajouter un nouvel animal, est que j'ai déjà mon algo écrit, je dois modifier mon code.
// Avec un pattern factory, je rajoute ma classe et j'ai pas besion de modifier mon code !!!
// Exemple Factory
//
//?>

<!--<form action="">-->
<!--    <label for="animal">Animal</label>-->
<!--    <input type="text" id="animal" name="animal">-->
<!--    <button type="submit">send</button>-->
<!--</form>-->
<!---->
<?php
//if ($_GET) {
//    $animal = (new AnimalFactory)->createAnimal($_GET['animal']);
//    if ($animal) {
//        echo $animal->makeSound();
//    } else {
//        echo 'animal not found';
//    }
//}

// Abstract Factory
//require ('ShapeFactory.php');
//require ('ShapeInterface.php');
//require ('CircleFactory.php');
//require ('Circle.php');
//require ('SquareFactory.php');
//require ('Square.php');
//require ('ColorInterface.php');
//require ('ColorFactory.php');
//require ('Red.php');
//require ('RedFactory.php');
//require ('Blue.php');
//require ('BlueFactory.php');
//require ('Green.php');
//require ('GreenFactory.php');
//require ('AbstractFactoryExample.php');


//$shape = AbstractFactoryExample::main('circle', 'red');
//echo $shape;
// Avec le factory simple nous pouvons pas utilisé plusieur objet.
// Exemple
//?>
<!--<form action="">-->
<!--    <label for="draw">Draw</label>-->
<!--    <input type="text" id="draw" name="draw" required>-->
<!--    <label for="color">Color</label>-->
<!--    <input type="text" id="color" name="color" required>-->
<!--    <button type="submit">send</button>-->
<!--</form>-->
<!---->
<?php
//
//if ($_GET) {
//    $shape = AbstractFactoryExample::main($_GET['draw'], $_GET['color']);
//}
require ('CoffeeInterface.php');
require ('CoffeeDecorator.php');
require ('SimpleCoffee.php');
require ('DoubleCoffee.php');
require ('MilkCoffee.php');
require ('ChocolateCoffee.php');

// Le pattern permet d'ajoute des nouvelles propriété à un objet
// Exemple

?>
<!--<form action="">-->
<!---->
<!--    <label for="coffee">Choice coffee</label>-->
<!--    <select name="coffee" id="coffee" required>-->
<!--        <option value="" selected disabled>Select ...</option>-->
<!--        <option value="simple">Simple</option>-->
<!--        <option value="double">Double</option>-->
<!--    </select>-->
<!--    -->
<!--    <label for="milk">Choice milk</label>-->
<!--    <select name="milk" id="milk">-->
<!--        <option value="" selected disabled>Select ...</option>-->
<!--        <option value="true">Yes</option>-->
<!--        <option value="false">Non</option>-->
<!--    </select>-->
<!---->
<!--    <label for="chocolate">Choice chocolate</label>-->
<!--    <select name="chocolate" id="chocolate">-->
<!--        <option value="" selected disabled>Select ...</option>-->
<!--        <option value="true">Yes</option>-->
<!--        <option value="false">Non</option>-->
<!--    </select>-->
<!--    <button type="submit">Send</button>-->
<!--</form>-->
<!---->
<?php
//
//if ($_GET) {
//    $result = '';
//    if ($_GET['coffee'] === 'simple') {
//        $coffee = new SimpleCoffee();
//    } else {
//        $coffee = new DoubleCoffee();
//    }
//    $result = $coffee->getCost() . "$ " . $coffee->getDescription() . ".\n";;
//
//    if (isset($_GET['milk'])) {
//        if ($_GET['milk']) {
//            $milkCoffee = new MilkCoffee($coffee);
//            $result = $milkCoffee->getCost() . "$ " . $milkCoffee->getDescription() . ".\n";
//        }
//    }
//
//    if (isset($_GET['chocolate'])) {
//        if ($_GET['chocolate']) {
//            $chocolateMilkCoffee = new ChocolateCoffee($milkCoffee);
//            $result = $chocolateMilkCoffee->getCost() . "$ " . $chocolateMilkCoffee->getDescription() . ".\n";
//        }
//    }
//    echo $result;
//}

//require ('Burger.php');
//require ('BurgerBuilder.php');
//
//$burger = (new BurgerBuilder(14))
//    ->addPepperoni()
//    ->addLettuce()
//    ->addTomato()
//    ->build();
//var_dump($burger);

require ('ObserverInterface.php');
require ('Display.php');
require ('WeatherData.php');

$weatherData = new WeatherData();

$display = new Display();
$weatherData->attach($display);

$weatherData->setMeasurements(22.5, 60, 1013);

