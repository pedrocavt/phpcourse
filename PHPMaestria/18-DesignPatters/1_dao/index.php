<?php 
include_once("db.php");
include_once("dao/CarDAO.php");

$car = new CarDAO($conn);

$cars = $car->findAll();
?>

  <h1>Insira um carro:</h1>
  <form action="process.php" method="POST">
    <div>
      <label for="brand">Marca do carro:</label>
      <input type="text" name="brand" placeholder="Insira a marca">
    </div>
    <div>
      <label for="km">Km do carro:</label>
      <input type="text" name="km" placeholder="Insira o km">
    </div>
    <div>
      <label for="color">Cor do carro:</label>
      <input type="text" name="color" placeholder="Insira a cor">
    </div>
    <input type="submit" value="Enviar">
  </form>

  <ul>
    <?php foreach($cars as $car): ?>
      <li><?= $car->getBrand() ?> - <?= $car->getKm() ?> - <?= $car->getColor() ?></li>
    <?php endforeach ?>
  </ul>