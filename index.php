<?php 

  /**
  * Машина
  */
  class Car
  {
    public $brandOfCar = "Some brand";
    public $colorOfCarbody = "Some color";

    public function __construct($brandOfCar, $colorOfCarbody)
    {
      $this->brandOfCar = $brandOfCar;
      $this->colorOfCarbody = $colorOfCarbody;
    }

    public function getAllView()
    {
      return "Марка: {$this->brandOfCar} <br> Цвет: {$this->colorOfCarbody} <br>";
    }
  }

  /**
  * Телевизор
  */
  class TV
  {
    public $screenSize = 40;
    public $maxResolution = "1920x1080 FullHD";


    public function __construct($screenSize, $maxResolution)
    {
      $this->screenSize = $screenSize;
      $this->maxResolution = $maxResolution;
    }

    public function getAllView()
    {
      return "Диагональ: {$this->screenSize}″ <br> Разрешение: {$this->maxResolution}px <br>";
    }    
  }

  /**
  * Шариковая ручка
  */
  class Pen
  {
    public $inkColor = "Чёрный";
    public $brandOfPen = "";
    public $typeOfPen = "Гелевая";


    public function __construct($inkColor, $brandOfPen, $typeOfPen)
    {
      $this->inkColor = $inkColor;
      $this->brandOfPen = $brandOfPen;
      $this->typeOfPen = $typeOfPen;
    }

    public function getAllView()
    {
      return "Это {$this->typeOfPen} ручка с цветом чернил: {$this->inkColor}. Производитель: {$this->brandOfPen}<br>";
    }       
  }

  /**
  * Утка
  */
  class Duck
  {
    public $age = 3;
    public $color = "Желтый";

    public function __construct($age, $color)
    {
      $this->age = $age;
      $this->color = $color;
    }

    public function getVolumeLevel()
    {
      $volumeLevelOfKrya = rand(1,10);
      if ($volumeLevelOfKrya <= 3) {
        $volumeLevelOfKrya = "почти не беспокоила нас.";
      } else if ($volumeLevelOfKrya <= 7) {
        $volumeLevelOfKrya = "очень громко крякала.";
      } else if ($volumeLevelOfKrya <= 10) {
        $volumeLevelOfKrya = "задолбала всю деревню своими кряками!";
      } else {
        $volumeLevelOfKrya = "...эм, вообще-то у нас не водится тут никаких уток.";
      }
      return "Эта утка сегодня $volumeLevelOfKrya Все утки, у которых цвет перьев {$this->color} такие...<br>";
    }
  }

  /**
  * Товар
  */
  class Product
  { 
    public $name = "Спиннер";
    public $category = "Игрушки";
    public $price = 199;
    public $weight = 0.7;
    
    public function __construct($name, $category, $price, $weight)
    {
      $this->name = $name;
      $this->category = $category;
      $this->price = $price;
      $this->weight = $weight;
    }

    public function liftUp()
    {
      if ($this->category === "Игрушки" and $this->weight < 25) {
        return "Полагаем, доставочка на этаж вам не нужна. Сами справитесь.";
      } else {
        return "Воу-воу! Чё таскать-то? Занесем прямо к вам в прихожую за 100 рублей.";
      }
    }

    public function getAllView()
    {
      return "Вы заказываете: {$this->name} весом {$this->weight} кг. <br>";
    }      
  }

  // Машины
  $myCar = new Car("Tesla", "Тёмно-синий");
  $anotherCar = new Car("BMW", "Чёрный");

  // Телевизоры
  $myTV = new TV("88", "3840x2160");
  $anotherTV = new TV("32", "1920x1080");

  // Шариковая ручка
  $myPen = new Pen("зелёный", "BIC Co", "шариковая");
  $anotherPen = new Pen("красный", "BIC Co", "гелевая");

  // Утка
  $myDuck = new Duck(1, "жёлтый");
  $anotherDuck = new Duck(25, "коричневый");

  // Товар
  $myProduct = new Product("Спиннер", "Игрушки", 990, 0.63);
  $anotherProduct = new Product("Кукольный домик MAX EXTRA Big Class BOOM Suuuuupa size", "Игрушки", 33700, 26);



 ?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700&amp;subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Домашнее задание №9</title>
</head>
<body>
  <div class="wrapper">
    <div class="determination">
      <h2>Как я понимаю, что такое инкапсуляция</h2>
      <p><strong>Инкапсуляция</strong>, по-моему - это собрание всего нужного в отдельной капсулке (в нашем случае - в отдельном классе) и процесс сокрытия чего-либо от внешнего воздействия. Это изоляция свойств и методов, но при этом возможность контроля доступа к этим свойствам и методам при помощи указания их типа - <em>public, private</em> или <em>protected</em>.</p>
    </div>
    <div class="pros-and-cons">
      <h2>Плюсы и минусы объектов</h2>
      <ul class="plus">
        <li>Код становится более аккуратным и читабельным</li>
        <li>Меньше шансов ошибиться</li>   
        <li>Такой код легче поддерживать</li>           
      </ul>
      <ul class="minus">
        <li>Описывать классы, из которых потом будут создаваться объекты, достаточно сложно (если, конечно, программист хочет, чтобы все работало ровно потом)</li>
        <li>Пока нет практики, я не совсем понимаю какие ещё минусы есть именно у объектов</li>
      </ul>
    </div>
    <div class="five-classes clearfix">
      <h2>Примеры классов и объектов</h2>
      <div class="class">
        <h3>Машина</h3>
        <?php echo $myCar->getAllView() . "<hr>"; echo $anotherCar->getAllView(); ?>
      </div>
      <div class="class">
        <h3>Телевизор</h3>
        <?php echo $myTV->getAllView() . "<hr>";  echo $anotherTV->getAllView();   ?>
      </div>
      <div class="class">
        <h3>Шариковая ручка</h3>
        <?php echo $myPen->getAllView() . "<hr>";  echo $anotherPen->getAllView();   ?>
      </div>
      <div class="class">
        <h3>Утка</h3>
        <?php echo $myDuck->getVolumeLevel() . "<hr>";  echo $anotherDuck->getVolumeLevel(); ?>
      </div>
      <div class="class">
        <h3>Товар</h3>
        <?php   echo $myProduct->getAllView(); echo $myProduct->liftUp() . "<hr>";
                echo $anotherProduct->getAllView(); echo $anotherProduct->liftUp();   ?>
      </div>
      <div class="class">
        <a href="news.php" target="_blank">Дополнительное задание здесь</a>
      </div>      
    </div>
  </div>
</body>
</html>