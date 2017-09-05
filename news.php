<?php 

  // !!! Дополнительное задание !!!

  /**
  * Новости
  */
  class News
  { 
    public $header;
    public $publicationDate;
    public $contentOfNews;

    public function __construct($header, $publicationDate, $contentOfNews)
    {
     $this->publicationDate = $publicationDate;
     $this->header = $header; 
     $this->contentOfNews = $contentOfNews;          
    }

    public function postIt()
    {
      return "{$this->header} {$this->publicationDate} <br> {$this->contentOfNews}";
    }
  }

  $news_0 = new News("Началось", "06.09.2017", "АААфигеть! Первым 200 сачстливчикам удалось приземлиться на Марсе на Falcon 153!!!");


?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700&amp;subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Новости</title>
</head>
<body>
  <div class="wrapper">
    <div class="news">
      <?php echo $news_0->postIt(); ?>
    </div>
    <a href="index.php">Вернуться обратно</a>
  </div>
</body>
</html>