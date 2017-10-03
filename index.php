<?php
class ShopProduct {
    public $title = "Стандартный товар";
    public $producerMainName = "Фамилия автора";
    public $producerFirstName = "Имя автора ";
    public $price = 0;

    function __construct($title, $firstName, $mainName, $price)
    {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }

    function getProducer()
    {
        return "{$this->producerFirstName} "
            . "{$this->producerMainName}";
    }
}
//__construct упрощяет создание объекта
$productl = new ShopProduct('Собачье сердце', 'Михаил', 'Булгаков', 4.99);
$product2 = new ShopProduct('Евгений Онегин', 'Александр', 'Пушкин', 3.99);
//$productl->title = " Собачье сердце";
//$productl->producerMainName = " Булгаков" ;
//$productl->producerFirstName = "Михаил";
//$productl->price = 5.99;
print "Автор: {$productl->getProducer()}\n";
print "Автор: {$product2->getProducer()}\n";