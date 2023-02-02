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
$dog = (new AnimalFactory)->createAnimal('dog');
echo $dog->makeSound(); // Woof

$cat = (new AnimalFactory)->createAnimal('cat');
echo $cat->makeSound(); // Meow

// Bad
$badDog = new Dog();
echo $badDog->makeSound();

// Pourquoi mauvais ?
// Si demain, je veux ajouter un nouvel animal, est que j'ai déjà mon algo écrit, je dois modifier mon code.
// Avec un pattern factory, je rajoute ma classe et j'ai pas besion de modifier mon code !!!
// Exemple

if ($_GET) {
    $animal = (new AnimalFactory)->createAnimal($_GET['animal']);
}
?>

<form action="">
    <label for="animal">Animal</label>
    <input type="text" id="animal" name="animal">
    <button type="submit">send</button>
</form>

<?php
if ($_GET) {
    if ($animal) {
        echo $animal->makeSound();
    } else {
        echo 'animal not found';
    }
}